<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks= auth()->user()->tasks;
        return view('tasks.all', compact('tasks'));
    }
    public function tasksbycateg($category_id){
        $tasksbycateg= auth()->user()->tasks()->where('category_id', $category_id)->get();
        return view('tasks.bycateg', compact('tasksbycateg'));
    }
    public function createform(){
        return view('tasks.createform');
    }
    public function create(Request $request){
        $task= new Task();
        $task->user_id=auth()->user()->id;
        $task->title=$request->input('title');
        $task->description=$request->input('description');
        $task->category_id=$request->input('category_id');
        $task->deadline_date=$request->input('deadline_date');
        $task->deadline_time=$request->input('deadline_time');
        $completed=$request->input('completed');
        if($completed==null){
            $completed='pending';
        }
        else{
            $completed='done';
        }
        $task->status=$completed;
        $task->event_id=null;
        $task->save();
        return redirect()->route('task');
    }
    public function updateform($id){
        $task=Task::find($id);
        return view('tasks.updateform', compact('task'));
    }
    public function update($id, Request $request){
        $task=Task::find($id);
        $task->title=$request->input('title');
        $task->description=$request->input('description');
        $task->category=$request->input('category');
        $task->deadline_date=$request->input('deadline_date');
        $task->deadline_time=$request->input('deadline_time');
        $completed=$request->input('completed');
        if($completed==null){
            $completed='pending';
        }
        else{
            $completed='done';
        }
        $task->status=$completed;
        $task->save();
        return redirect()->route('task');
    }
}
