<?php

namespace App\Services;

use App\Repositories\Interfaces\RequestsRepositoryInterface;
use App\Repositories\Interfaces\UsersRepositoryInterface;
use App\Repositories\Interfaces\CitiesRepositoryInterface;
use App\Models\Request;
use App\User;
use App\Services\UsersService;
use Illuminate\Http\Request as LaravelRequest;

class RequestsService {

    /**
     * @var RequestsRepositoryInterface 
     */
    protected $requestsRepository;

    /**
     * @var UsersRepositoryInterface 
     */
    protected $usersRepository;

    /**
     * @var CitiesRepositoryInterface 
     */
    protected $citiesRepository;

    /**
     * @var UsersService 
     */
    protected $usersService;

    /**
     * RequestsService Constructor.
     * 
     * @param RequestsRepositoryInterface $requestsRepository
     * @param UsersRepositoryInterface $usersRepository
     * @param UsersService $usersService
     */
    public function __construct(RequestsRepositoryInterface $requestsRepository, UsersRepositoryInterface $usersRepository, CitiesRepositoryInterface $citiesRepository, UsersService $usersService)
    {
        $this->requestsRepository = $requestsRepository;
        $this->usersRepository = $usersRepository;
        $this->citiesRepository = $citiesRepository;
        $this->usersService = $usersService;
    }

    /**
     * Create a new request from a Request object.
     * 
     * @param LaravelRequest $request
     * @return boolean|Request
     */
    public function createFromRequest(LaravelRequest $request)
    {
        return $this->create($request->category_id, $request->contact_name, $request->contact_email, $request->contact_phone, $request->are_all_parties_behind_mediation, $request->description,
                             $request->city_id, $request->city_text);
    }

    /**
     * Create a request.
     * 
     * @param Integer $categoryID
     * @param string $contactName
     * @param string $contactEmail
     * @param string $contactPhone
     * @param boolean $areAllPartiesBehindMediation
     * @param string $description
     * @param Integer $cityID
     * @param String $cityText
     * @return boolean|Request
     */
    public function create($categoryID, $contactName, $contactEmail, $contactPhone = null, $areAllPartiesBehindMediation = false, $description = null, $cityID = null, $cityText = null)
    {
        if (empty($categoryID) || empty($contactName) || empty($contactEmail)) {
            return false;
        }

        // attempt to find user first to add the request to his list
        $user = $this->usersRepository->findBy($contactEmail, 'email');
        if (!$user) {
            // Create user with role 'user' and default password
            $user = $this->usersService->create($contactName, $contactEmail, '123456', ['user']);
            if (!$user) {
                return false;
            }
        }

        // attempt to find city from city text for metrics
        // TODO : LOWER CASE SEARCH
        if (empty($cityID) && !empty($cityText)) {
            $city = $this->citiesRepository->findBy($cityText, 'name');
            if ($city) {
                $cityID = $city->id;
            }
        }

        // Status is pending by default
        $request = $this->requestsRepository->create([
            'category_id' => $categoryID,
            'are_all_parties_behind_mediation' => $areAllPartiesBehindMediation,
            'description' => $description,
            'city_id' => $cityID,
            'city_text' => $cityText,
            'contact_phone' => $contactPhone,
            'user_id' => $user->id,
            'comission' => config('settings.comission.default')
        ]);

        return $request;
    }

}
