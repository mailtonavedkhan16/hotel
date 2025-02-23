<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder; 

class UserSeeder extends Seeder
{
    private $userdata = [
       ["id"=> 1, "name" => "Shakeel", "usertype" => "0", "email" => "asraf2asif@gmail.com", "password" => "6e41dc345a81aac1fe81a5efcd2491bb"],
       ["id"=> 2, "name" => "Admin-Shakeel", "usertype" => "1", "email" => "shakeel@gmail.com", "password" => "6e41dc345a81aac1fe81a5efcd2491bb"],
       ["id"=> 3, "name" => "Shakeel4", "usertype" => "0", "email" => "shakeel45@gmail.com", "password" => "6e41dc345a81aac1fe81a5efcd2491bb"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::whereNotNull('id')->delete();
        foreach ($this->userdata as $data) {
            User::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'usertype' => $data["usertype"],
                'email' => $data["email"],
                'password' => $data["password"],
            ]);
        }
    }
}
