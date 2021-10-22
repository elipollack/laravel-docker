<?php

use App\Models\Admin;
use App\Models\Config;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        if (Admin::find(1) !== null) {
            return;
        }

        factory(Admin::class)->createMany([
            [
                "name" => "admin",
                "password" => Hash::make("admin1234$"),
            ],
            [
                "name" => "greg",
                "password" => Hash::make("greg1234$"),
            ],
            [
                "name" => "andres",
                "password" => Hash::make("andres1234$"),
            ],
            [
                "name" => "jordan",
                "password" => Hash::make("jordan1234$"),
            ],
        ]);

        factory(User::class)->createMany([
            [
                "name" => "test",
                "email" => "test@legendsports.bet",
                "password" => Hash::make("test1234$"),
                'firstname' => '',
                'lastname' => '',
                'date_of_birth' => new \DateTime(),
                'is_bot' => 0,
            ],
            [
                "name" => "greg",
                "email" => "greg@legendsports.bet",
                "password" => Hash::make("greg1234$"),
                'firstname' => '',
                'lastname' => '',
                'date_of_birth' => new \DateTime(),
                'is_bot' => 0,
            ],
            [
                "name" => "andres",
                "email" => "andres@legendsports.bet",
                "password" => Hash::make("andres1234$"),
                'firstname' => '',
                'lastname' => '',
                'date_of_birth' => new \DateTime(),
                'is_bot' => 0,
            ],
        ]);

        factory(Config::class)
            ->times(1)
            ->create();
    }
}
