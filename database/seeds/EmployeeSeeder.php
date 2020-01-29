<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;
use App\User;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 100) 
                -> make() 
                -> each(function($employee){

                $user = User::inRandomOrder() ->first();
                $employee -> user() -> associate($user);
                $employee ->save();

                $tasks = Task::inRandomOrder() -> take(rand(1,4)) -> get();
                $employee -> tasks() -> attach($tasks);
        });
    }
}
