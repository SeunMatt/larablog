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
        DB::table("users")->insert([
        	["name" => "Seun Matt",
        	  "email" => "test@test.com",
              "is_admin" => true,
        	  "password" => bcrypt('test123')	
        	],
          ["name" => "Test Man",
            "email" => "test@man.com",
              "is_admin" => true,
            "password" => bcrypt('testman') 
          ]
        ]);


    }
}
