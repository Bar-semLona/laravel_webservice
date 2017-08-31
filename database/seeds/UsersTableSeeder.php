<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // Seed User Default
        DB::table('users')->insert([
            'name'      => 'Vinicius Oliveira',
            'email'     => 'vinicius_o.a@live.com',
            'password'  => Hash::make('123456'),
            'api_token' => str_random(60),
            'dataDeNascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'facebook'     => $faker->email,
            'instagram'     => $faker->email,
            'CEP' => $faker->postcode,
            'endereco' => $faker->streetName,
            'numeroEndereco' => $faker->buildingNumber,
            'complemento' => $faker->buildingNumber,
            'bairro' => $faker->streetSuffix,
            'cidade' => $faker->city,
            'UF' => $faker->stateAbbr,
            'numeroCelular' => $faker->tollFreePhoneNumber,
            'img' => $faker->imageUrl($width = 640, $height = 480),
            'ativo' => $faker->boolean,
            'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
        ]);
        
        // Seed Users
    	foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name'      => $faker->name,
                'email'     => $faker->email,
                'password'  => bcrypt('secret'),
                'api_token' => str_random(60),
                'dataDeNascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'facebook'     => $faker->email,
                'instagram'     => $faker->email,
                'CEP' => $faker->postcode,
                'endereco' => $faker->streetName,
                'numeroEndereco' => $faker->buildingNumber,
                'complemento' => $faker->buildingNumber,
                'bairro' => $faker->streetSuffix,
                'cidade' => $faker->city,
                'UF' => $faker->stateAbbr,
                'numeroCelular' => $faker->tollFreePhoneNumber,
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'ativo' => $faker->boolean,
                'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
            ]);
        }
    }
}
