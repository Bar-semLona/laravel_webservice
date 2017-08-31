<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
use App\User;
use App\Evento;

class ComentarioEventoTableSeeder extends Seeder
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
            $event = Evento::find(rand(1,50));
            DB::table('comentario_eventos')->insert([
                'idUsuario' => $user->id,
                'idEvento' => $event->id,
                'tituloComentario'   => $faker->text($maxNbChars = 75),
                'comentario'    => $faker->text($maxNbChars = 300),
                'like' => rand(0, 1000),
                'deslike' => rand(0, 1000),
                'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
            ]);
        }
    }
}
