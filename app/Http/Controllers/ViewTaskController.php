<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ViewTaskController extends Controller
{
    public function viewtasks()
    {
        $tasks = Task::latest()->paginate(3);
        return view('viewtask.index', [
            'data' => $tasks
        ]);
        return view('viewtask.index');
    }
}
