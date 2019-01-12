<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RequestsRepositoryInterface;
use App\Models\Request;

class EloquentRequestsRepository extends EloquentAbstractRepository implements RequestsRepositoryInterface {

    /**
     * Provinces Repository constructor.
     */
    public function __construct()
    {
        $this->modelClass = Request::class;
    }

}
