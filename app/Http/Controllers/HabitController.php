<?php

namespace App\Http\Controllers;
use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function index(){
        $habits=auth()->user()->habits;
        return view('habits.all', compact('habits'));
    }
    public function habitsbycateg($category_id){
        $habitsbycateg= auth()->user()->habits()->where('category_id', $category_id)->get();
        return view('habits.bycateg', compact('habitsbycateg'));
    }
    //create form
    public function createform(){
        return view('habits.createform');
    }
    //create habit
    public function create(Request $request){
        $habit= new Habit();
        $habit->user_id=auth()->user()->id;
        $habit->title=$request->input('title');
        $habit->description=$request->input('description');
        $habit->category_id=$request->input('category_id');
        $habit->frequency=$request->input('frequency');
        $habit->status='pending';
        $habit->streak=0;
        $habit->save();
        return redirect()->route('habit');
    }
    //delete habit
    public function destroy($id){
        $habit=Habit::FindOrFail($id);
        $habit->delete();
        return redirect()->back();
    }
    //update form
    public function updateform($id){
        $habit=Habit::FindOrFail($id);
        return view('habits.updateform', compact('habit'));
    }
    //update habit
    public function update($id, Request $request){
        $title=$request->input('title');
        $description=$request->input('description');
        $category_id=$request->input('category_id');
        $frequency=$request->input('frequency');
        $status=$request->input('status');
        if($status==null){
            $status='pending';
        }
        else{
            $status='done';
        }

        $habit=Habit::FindOrFail($id);
        if($status==='done'){
            $habit->streak=1;
        }
        $habit->title=$title;
        $habit->description=$description;
        $habit->category_id=$category_id;
        $habit->frequency=$frequency;
        $habit->status=$status;
        $habit->save();
        return redirect()->route('habit.bycateg', $habit->category_id);
    }

    /* update streak:*/
    public function updateStreak($id){
        $habit=Habit::FindOrFail($id);
        if($habit->status==='done'){
            $habit->streak=1;
        }
    }

}
