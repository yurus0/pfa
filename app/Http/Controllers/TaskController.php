<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks= auth()->user()->tasks;
        return view('task', compact('tasks'));
    }
}
