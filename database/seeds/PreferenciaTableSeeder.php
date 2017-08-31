<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
use App\User;
use App\Categoria;

class PreferenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
            $user  = User::find(rand(1,50));
            $category = Categoria::find(rand(1,10));
            DB::table('preferencias')->insert([
                'idUsuario'   => $user->id,
                'idCategoria' => $category->id,
                'created_at'  => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
            ]);
        }
    }
}
