<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        App\User::create([
            'name' => 'Chris Gmyr',
            'email' => 'chris@example.com',
            'password' => Hash::make('pass123'),
        ]);

        App\User::create([
            'name' => 'Taylor Otwell',
            'email' => 'taylor@example.com',
            'password' => Hash::make('pass123'),
        ]);

        App\User::create([
            'name' => 'Adam Wathan',
            'email' => 'adam@example.com',
            'password' => Hash::make('pass123'),
        ]);

        Model::reguard();
    }
}
