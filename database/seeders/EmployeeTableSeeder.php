<?php

namespace Database\Seeders;
use App\Models\Company;
use App\Models\Employee;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //hacer uso del Faker como faker
        $faker = Faker::create();

        //ciclo para que llene n cantidad de registros
        for ($i = 0; $i <= 20;$i++){

            //llamar al modelo para hacer uso de los datos que estan en array
            Employee::create([
                'name'=> $faker -> name,
                'lastname'=> $faker -> lastName,
                'email' => $faker -> email,
                'document' => $faker -> isbn10,
                'gender' => $faker -> title,
                'companies_id'=> 1

            ]);

        }
    }
}
