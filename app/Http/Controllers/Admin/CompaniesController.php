<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CompaniesService;
use App\Repositories\Interfaces\CompaniesRepositoryInterface;
use App\Repositories\Interfaces\CitiesRepositoryInterface;
use App\Repositories\Interfaces\CategoriesRepositoryInterface;
use App\Http\Requests\Companies\StoreCompanyRequest;
use App\Http\Requests\Companies\UpdateCompanyRequest;
use App\Models\Company;

class CompaniesController extends Controller {

    /**
     * @var CompaniesService 
     */
    protected $companiesService;

    /**
     * @var CompaniesRepositoryInterface 
     */
    protected $companiesRepository;

    /**
     * @var CitiesRepositoryInterface 
     */
    protected $citiesRepository;

    /**
     * @var CategoriesRepositoryInterface 
     */
    protected $categoriesRepository;

    /**
     * CompaniesController Constructor.
     * 
     * @param CompaniesService $companiesService
     * @param CompaniesRepositoryInterface $companiesRepository
     * @param CitiesRepositoryInterface $citiesRepository
     * @param CategoriesRepositoryInterface $categoriesRepository
     */
    public function __construct(CompaniesService $companiesService, CompaniesRepositoryInterface $companiesRepository, CitiesRepositoryInterface $citiesRepository,
            CategoriesRepositoryInterface $categoriesRepository)
    {
        $this->companiesService = $companiesService;
        $this->companiesRepository = $companiesRepository;
        $this->citiesRepository = $citiesRepository;
        $this->categoriesRepository = $categoriesRepository;
    }

    /**
     * List all companies. 
     * 
     * @return \Illuminate\View\View | \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $companies = $this->companiesRepository->all();
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Load create new company page.
     * 
     * @return \Illuminate\View\View | \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        $cities = $this->citiesRepository->lists();
        $categories = $this->categoriesRepository->lists();
        return view('admin.companies.create', compact('cities', 'categories'));
    }

    /**
     * Store Company.
     * 
     * @param StoreCompanyRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCompanyRequest $request)
    {
        $this->companiesService->createFromRequest($request);
        return redirect()->to('/admin/companies');
    }

    /**
     * Load view to edit a company.
     * 
     * @param Company $company
     * @return \Illuminate\View\View | \Illuminate\Contracts\View\Factory
     */
    public function edit(Company $company)
    {
        $cities = $this->citiesRepository->lists();
        $categories = $this->categoriesRepository->lists();
        return view('admin.companies.edit', compact('company', 'cities', 'categories'));
    }

    /**
     * Update content block.
     * 
     * @param UpdateCompanyRequest $request
     * @param Company $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $this->companiesService->editFromRequest($company->id, $request);
        return redirect()->to('/admin/companies');
    }

    /**
     * Delete a content block.
     * 
     * @param Company $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Company $company)
    {
        $this->companiesRepository->delete($company);
        return redirect()->to('/admin/companies');
    }

}
