<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function removeTaskToEmployee($idemp, $idtsk)
    {
        
        $employee = findOrFail($idemp);

        $task = Task::findOrFail($idtsk);

        $employee = tasks() -> detach($task);

        return redirect() -> route('employee-index');
    }
}
