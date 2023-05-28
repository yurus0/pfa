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
    public function createform(){
        return view('createtask');
    }
    public function create(Request $request){
        $task= new Task();
        $task->user_id=auth()->user()->id;
        $task->name=$request->input('name');
        $task->description=$request->input('description');
        $task->deadline_date=$request->input('deadline date');
        $task->deadline_time=$request->input('deadline time');
        $task->completed=$request->input('completed');
        $task->save();
        return redirect()->route('task');
    }
}
