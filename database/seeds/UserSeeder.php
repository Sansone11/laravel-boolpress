<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Mirco',
            'email' =>'sansonemirc@gmail.com',
            'password' => Hash::make('ninnananna11'),
        ]);
    }
}
