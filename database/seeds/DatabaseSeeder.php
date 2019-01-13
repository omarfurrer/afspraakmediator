<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvincesCitiesSeeder::class);
        $this->call(LanguagesTableSeeder::class);
//        $this->call(CategoriesTableSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(AdminUsersSeeder::class);
    }

}
