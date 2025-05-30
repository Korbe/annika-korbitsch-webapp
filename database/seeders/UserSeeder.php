<?php

namespace Database\Seeders;

use App\Models\User;
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
        if (User::whereEmail("korbitschl@gmail.com")->doesntExist()) {
            $user = User::create([
                'name' => "Lukas Korbitsch",
                'email' => "korbitschl@gmail.com",
                'password' => Hash::make("password")
            ]);
        }
    }
}
