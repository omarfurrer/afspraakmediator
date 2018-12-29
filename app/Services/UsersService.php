<?php

namespace App\Services;

use App\Repositories\Interfaces\UsersRepositoryInterface;
use App\User;

class UsersService {

    /**
     * @var UsersRepositoryInterface 
     */
    protected $usersRepository;

    /**
     * UsersService Constructor.
     * 
     * @param UsersRepositoryInterface $usersRepository
     */
    public function __construct(UsersRepositoryInterface $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    /**
     * Create a new user and assign roles.
     * 
     * @param string $name
     * @param string $email
     * @param string $password
     * @param array $roles
     * @return boolean|User
     */
    public function create($name, $email, $password, $roles)
    {
        if (empty($name) || empty($email) || empty($password) || empty($roles)) {
            return false;
        }

        $user = $this->usersRepository->create(compact('name', 'email', 'password'));
        $user->assignRole($roles);

        return $user;
    }

    /**
     * edit a user and reassign roles.
     * 
     * @param Integer $id
     * @param string $name
     * @param string $email
     * @param array $roles
     * @param string $password
     * @return boolean|User
     */
    public function edit($id, $name, $email, $roles, $password = null)
    {
        if (empty($id) || empty($name) || empty($email) || empty($roles)) {
            return false;
        }
        
        $data = compact('name', 'email');
        if ($password != null) {
            $data['password'] = $password;
        }
        
        $user = $this->usersRepository->update($id, $data);

        $user->syncRoles($roles);

        return $user;
    }

}
