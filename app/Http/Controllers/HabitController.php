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
        $habit->category=$request->input('category');
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
        $category=$request->input('category');
        $frequency=$request->input('frequency');
        $status=$request->input('status');
        if($status==null){
            $status='pending';
        }
        else{
            $status='done';
        }

        $habit=Habit::FindOrFail($id);

        $habit->title=$title;
        $habit->description=$description;
        $habit->category=$category;
        $habit->frequency=$frequency;
        $habit->status=$status;
        $habit->save();
        return redirect()->route('habit');
    }

    /* update streak:*/
    public function updateStreak($id){
        $habit=Habit::FindOrFail($id);
        $done=$habit->status;
        if($done){
            $habit->streak+=1;
        }
        else{
            $habit->streak=0;
        }
    }

}
