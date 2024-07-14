<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');


        for ($x = 0; $x <= 25; $x++) {
            $n=7;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $customer_uniqueid = $randomString;
            DB::table('customer')->insert([
                'customer_type' => "Perusahaan",
                'customer_title' => "Tuan",
                'customer_name' => $faker->name,
                'customer_nik' => Str::random(16),
                'customer_address' => $faker->address,
                'customer_nohp' => $faker->phoneNumber,
                'customer_company' => $faker->company,
                'customer_companytax' => "PKP",
                'customer_companyaddress' => $faker->address,
                'customer_companyaddress2' => $faker->address,
                'customer_companynpwp' => Str::random(16),
                'customer_companynib' => Str::random(16),
                'customer_companyhaki' => Str::random(16),
                'customer_companyemail' => $faker->email,
                'customer_companytelp' =>$faker->phoneNumber,
                'customer_sales' => 3,
                'customer_uniqueid' => $customer_uniqueid,
                'customer_dateadded' => $faker->date('Y-m-d').' '.$faker->time(),
                'customer_password' => Hash::make('password'),
                'customer_status' => "Publish",
            ]);
          }

    }
}
