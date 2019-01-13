<?php

use Illuminate\Database\Seeder;
use App\Services\UsersService;

class AdminUsersSeeder extends Seeder {

    /**
     * @var UsersService 
     */
    protected $usersService;

    /**
     * AdminUsersSeeder Constructor.
     * 
     * @param UsersService $usersService
     */
    public function __construct(UsersService $usersService)
    {
        $this->usersService = $usersService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->usersService->create('Omar Furrer', 'omar.furrer@gmail.com', '123456', ['admin']);
        $this->usersService->create('Vincent De Vries', 'vincentmaar@gmail.com', '123456', ['admin']);
    }

}
