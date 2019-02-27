<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_one = User::create([
        	'name' => 'San Win Maung',
        	'email' => 'sanwinmaung.dev@gmail.com',
        	'password' => bcrypt('password')
        ]);

        $user_two = User::create([
        	'name' => 'Zin Win Maw',
        	'email' => 'zin.winmaw@benline.com.mm',
        	'password' => bcrypt('password')
        ]);

        $user_thress = User::create([
        	'name' => 'Taylor Otwell',
        	'email' => 'taylor@gmail.com',
        	'password' => bcrypt('password')
        ]);
    }
}
