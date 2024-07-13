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
                'customer_type' => "Perorangan",
                'customer_title' => "Nyonya",
                'customer_name' => $faker->name,
                'customer_nik' => Str::random(16),
                'customer_address' => $faker->address,
                'customer_nohp' => $faker->phoneNumber,  
                'customer_npwp' => Str::random(16), 
                'customer_sales' => 1,
                'customer_uniqueid' => $customer_uniqueid,
                'customer_dateadded' => '2024-07-10 21:01',
                'customer_password' => Hash::make('password'),
                'customer_status' => "Publish", 
            ]);
          }
          
    }
}
