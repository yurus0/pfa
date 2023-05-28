<?php

namespace App\Http\Controllers;
use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function index(){
        $habits= auth()->user()->habits;
        return view('habit', compact('habits'));
    }
    public function createform(){
        return view('createhabit');
    }
    public function create(Request $request){
        $habit= new Habit();
        $habit->user_id=auth()->user()->id;
        $habit->title=$request->input('title');
        $habit->description=$request->input('description');
        $habit->category=$request->input('category');
        $habit->frequency=$request->input('frequency');
        $habit->status='pending';
        $habit->streak=0;
        $habit->save();
        return redirect()->route('habit');
    }
}
