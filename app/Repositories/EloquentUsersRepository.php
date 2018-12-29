<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UsersRepositoryInterface;
use App\User;

class EloquentUsersRepository extends EloquentAbstractRepository implements UsersRepositoryInterface {

    /**
     * Users Repository constructor.
     */
    public function __construct()
    {
        $this->modelClass = User::class;
    }

    /**
     * Create a new user.
     *
     * @param array $fields
     * @return mixed
     */
    public function create(array $fields = null)
    {
        $fields['password'] = bcrypt($fields['password']);
        return parent::create($fields);
    }

    /**
     * Update a user.
     *
     * @param Integer $id
     * @param array $fields
     * @return mixed
     */
    public function update($id, array $fields = array())
    {

        if (!empty($fields['password'])) {
            $fields['password'] = bcrypt($fields['password']);
        }
        return parent::update($id, $fields);
    }

}
