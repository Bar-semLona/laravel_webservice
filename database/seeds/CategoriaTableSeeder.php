<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
            DB::table('categorias')->insert([
                'nomeCategoria' => $faker->text($maxNbChars = 25),
                'descCategoria' => $faker->text($maxNbChars = 50)
            ]);
        }
    }
}
