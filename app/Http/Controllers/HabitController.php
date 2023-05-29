<?php

namespace App\Http\Controllers;
use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function index(){
        $habits= auth()->user()->habits;
        return view('habits.all', compact('habits'));
    }
    public function createform(){
        return view('habits.createform');
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
    public function destroy($id){
        $habit=Habit::FindOrFail($id);
        $habit->delete();
        return redirect()->back();
    }
}
