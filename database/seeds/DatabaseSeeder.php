<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EventosTableSeeder::class);
        $this->call(ComentarioEventoTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(PreferenciaTableSeeder::class);
        $this->call(EventoCategoriaTableSeeder::class);
    }
}
