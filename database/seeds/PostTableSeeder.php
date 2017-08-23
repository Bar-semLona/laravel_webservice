<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\User;

class PostTableSeeder extends Seeder
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
            DB::table('posts')->insert([
                'title'   => $faker->text($maxNbChars = 75),
                'body'    => $faker->text($maxNbChars = 200),
                'user_id' => $user->id
            ]);
        }
    }
}
