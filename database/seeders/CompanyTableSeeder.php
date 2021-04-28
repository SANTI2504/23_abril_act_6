<?php

namespace Database\Seeders;

use http\Client\Curl\User;
use Illuminate\Database\Seeder;
use App\Models\Company;

// el as faker es para llamar la libreria con este nombre
use Faker\Factory as Faker;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //declarar variable faker para llamar a Faker
        $faker = Faker::create();

        //ciclo para enviar n cantidad de datos
        for ($i = 0; $i <= 2; $i++ ){

            //llamar al modelo para poder usar las variables almacenadas en array
            Company::create([
                'name'=> $faker -> company,
                'description' => $faker -> paragraph,
                'nit' => $faker -> isbn10,
                'phone' => $faker -> phoneNumber
            ]);

        }
    }
}
