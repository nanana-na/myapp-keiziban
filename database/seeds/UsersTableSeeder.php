<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'nakao',
            'number' => '20238297',
            'password' => '$2y$10$4vwqtdJfNraI/ICszol7YOBOjd1UZOic2YuMsUYBdVR7pCX/9wV.y'
        ]);
        User::create([
            'name' => 'nakao1',
            'number' => '20238296',
            'password' => '$2y$10$4vwqtdJfNraI/ICszol7YOBOjd1UZOic2YuMsUYBdVR7pCX/9wV.y'
        ]);
        User::create([
            'name' => '佐賀大学バトミントン部',
            'number' => '0001',
            'password' => '$2y$10$4vwqtdJfNraI/ICszol7YOBOjd1UZOic2YuMsUYBdVR7pCX/9wV.y'
        ]);
        User::create([
            'name' => 'CUBE',
            'number' => '0002',
            'password' => '$2y$10$4vwqtdJfNraI/ICszol7YOBOjd1UZOic2YuMsUYBdVR7pCX/9wV.y'
        ]);
        User::create([
            'name' => 'Geese',
            'number' => '0003',
            'password' => '$2y$10$4vwqtdJfNraI/ICszol7YOBOjd1UZOic2YuMsUYBdVR7pCX/9wV.y'
        ]);
        User::create([
            'name' => 'BDD',
            'number' => '0004',
            'password' => '$2y$10$4vwqtdJfNraI/ICszol7YOBOjd1UZOic2YuMsUYBdVR7pCX/9wV.y'
        ]);
        User::create([
            'name' => 'CLOVER',
            'number' => '0005',
            'password' => '$2y$10$4vwqtdJfNraI/ICszol7YOBOjd1UZOic2YuMsUYBdVR7pCX/9wV.y'
        ]);
        User::create([
            'name' => 'Score!!',
            'number' => '0006',
            'password' => '$2y$10$4vwqtdJfNraI/ICszol7YOBOjd1UZOic2YuMsUYBdVR7pCX/9wV.y'
        ]);
    }
}
