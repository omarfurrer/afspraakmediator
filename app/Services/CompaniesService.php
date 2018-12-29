<?php

namespace App\Services;

use App\Repositories\Interfaces\CompaniesRepositoryInterface;
use App\Company;
use App\Services\UsersService;
use Illuminate\Http\Request;

class CompaniesService {

    /**
     * @var CompaniesRepositoryInterface 
     */
    protected $companiesRepository;

    /**
     * @var UsersService 
     */
    protected $usersService;

    /**
     * CompaniesService Constructor.
     * 
     * @param CompaniesRepositoryInterface $companiesRepository
     * @param UsersService $usersService
     */
    public function __construct(CompaniesRepositoryInterface $companiesRepository, UsersService $usersService)
    {
        $this->companiesRepository = $companiesRepository;
        $this->usersService = $usersService;
    }

    /**
     * Create a new company from a Request object.
     * 
     * @param Request $request
     * @return boolean|Company
     */
    public function createFromRequest(Request $request)
    {
        return $this->create($request->name, $request->city_id, $request->contact_name, $request->contact_email, $request->contact_phone, $request->house_number, $request->zip_code, $request->street,
                             $request->cities, $request->categories);
    }

    /**
     * Edit a company from a Request object.
     * 
     * @param Integer $id
     * @param Request $request
     * @return boolean|Company
     */
    public function editFromRequest($id, Request $request)
    {
        return $this->edit($id, $request->name, $request->city_id, $request->contact_name, $request->contact_email, $request->contact_phone, $request->house_number, $request->zip_code,
                           $request->street, $request->cities, $request->categories);
    }

    /**
     * Create a company.
     * 
     * @param string $name
     * @param Integer $cityID
     * @param string $contactName
     * @param string $contactEmail
     * @param string $contactPhone
     * @param string $houseNumber
     * @param string $zipCode
     * @param string $street
     * @param array $cities
     * @param array $categories
     * @return boolean|Company
     */
    public function create($name, $cityID, $contactName, $contactEmail, $contactPhone = null, $houseNumber = null, $zipCode = null, $street = null, $cities = [], $categories = [])
    {
        if (empty($name) || empty($cityID) || empty($contactName) || empty($contactEmail)) {
            return false;
        }

        // Create user with role 'company' and default password
        $user = $this->usersService->create($contactName, $contactEmail, '123456', ['company']);
        if (!$user) {
            return false;
        }

        $company = $this->companiesRepository->create([
            'name' => $name,
            'phone' => $contactPhone,
            'house_number' => $houseNumber,
            'zip_code' => $zipCode,
            'street' => $street,
            'city_id' => $cityID,
            'user_id' => $user->id,
            'cities' => $cities,
            'categories' => $categories
        ]);

        return $company;
    }

    /**
     * edit a company.
     * 
     * @param Integer $id
     * @param string $name
     * @param Integer $cityID
     * @param string $contactName
     * @param string $contactEmail
     * @param string $contactPhone
     * @param string $houseNumber
     * @param string $zipCode
     * @param string $street
     * @param array $cities
     * @param array $categories
     * @return boolean|Company
     */
    public function edit($id, $name, $cityID, $contactName, $contactEmail, $contactPhone = null, $houseNumber = null, $zipCode = null, $street = null, $cities = [], $categories = [])
    {
        if (empty($id) || empty($name) || empty($cityID) || empty($contactName) || empty($contactEmail)) {
            return false;
        }

        $company = $this->companiesRepository->update($id,
                                                      [
            'name' => $name,
            'phone' => $contactPhone,
            'house_number' => $houseNumber,
            'zip_code' => $zipCode,
            'street' => $street,
            'city_id' => $cityID,
            'cities' => $cities,
            'categories' => $categories
        ]);

        $user = $this->usersService->edit($company->user->id, $contactName, $contactEmail, ['company']);

        return $company;
    }

}
