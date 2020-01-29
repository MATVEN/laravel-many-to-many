<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;

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
                -> create() 
                -> each(function($employee){

                $tasks = Task::inRandomOrder() -> take(rand(1,4)) -> get();
                $employee -> tasks() -> attach($tasks);
        });
    }
}
