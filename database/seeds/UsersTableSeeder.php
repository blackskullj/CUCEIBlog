<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Jonathan Nunez',
            'email' => 'jonathan@correo.com',
            'password' => bcrypt('1234'),
            'email_verified_at' => now(),
            'career' => 'INNI',
            'occupation' => 'alumno',
            'administrator' => 1
        ]);

        App\User::create([
            'name' => 'Ivan Hernandez',
            'email' => 'ivan@correo.com',
            'password' => bcrypt('1234'),
            'career' => 'INNI',
            'occupation' => 'alumno',
            'administrator' => 0
        ]);

        factory(App\User::class, 30)->create();

    }
}
