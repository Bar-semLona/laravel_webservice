<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
use App\User;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = User::find(1);
    	foreach (range(1,10) as $index) {
            DB::table('eventos')->insert([
                'idUsuarioCriacao' => $user->id,
                'name'   => $faker->text($maxNbChars = 75),
                'descEvento'    => $faker->text($maxNbChars = 300),
                'site' => $faker->url,
                'facebook'     => $faker->email,
                'instagram'     => $faker->email,
                'dataInicial' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'dataFinal' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'CEP' => $faker->postcode,
                'endereco' => $faker->streetName,
                'numeroEndereco' => $faker->buildingNumber,
                'complemento' => $faker->buildingNumber,
                'bairro' => $faker->streetSuffix,
                'cidade' => $faker->city,
                'UF' => $faker->stateAbbr,
                'faixaEtaria' => $faker->randomElement(['foo' ,'bar', 'baz']),
                'like' => rand(0, 1000),
                'deslike' => rand(0, 1000),
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'ativo' => $faker->boolean,
                'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
            ]);
        }
    }
}
