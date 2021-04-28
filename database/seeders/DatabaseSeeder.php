<?php

namespace Database\Seeders;

use Faker\Provider\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // hacer uso de CompanyTableSeeder
        $this ->call(CompanyTableSeeder::class);

        // hacer uso de EmployeeTableSeeder
        $this -> call(EmployeeTableSeeder::class);
    }
}
