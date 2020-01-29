<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call ([

            TaskSeeder::class,
            UserSeeder::class,
            UserInfoSeeder::class,
            EmployeeSeeder::class
            
                  
        ]);
    }
}
