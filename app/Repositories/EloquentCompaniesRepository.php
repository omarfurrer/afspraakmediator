<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CompaniesRepositoryInterface;
use App\Models\Company;

class EloquentCompaniesRepository extends EloquentAbstractRepository implements CompaniesRepositoryInterface {

    /**
     * Provinces Repository constructor.
     */
    public function __construct()
    {
        $this->modelClass = Company::class;
    }

    /**
     * Create Company.
     * 
     * @param array $fields
     * @return Company
     */
    public function create(array $fields = null)
    {
        $company = parent::create($fields);

        if (!empty($fields['cities'])) {
            $company->cities()->sync($fields['cities']);
        }

        if (!empty($fields['categories'])) {
            $company->categories()->sync($fields['categories']);
        }

        return $company;
    }

    /**
     * Update Company.
     * 
     * @param Integer $id
     * @param array $fields
     * @return Company
     */
    public function update($id, array $fields = null)
    {
        $company = $this->getById($id);

        $company->cities()->sync(!empty($fields['cities']) ? $fields['cities'] : []);

        $company->categories()->sync(!empty($fields['categories']) ? $fields['categories'] : []);

        return parent::update($id, $fields);
    }

}
