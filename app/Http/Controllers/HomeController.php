<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habit;
use App\Models\Task;
use App\Models\Event;
use App\Models\Category;
use App\Models\Award;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $doneHabits=$this->countDoneHabits();
        $doneTasks=$this->countDoneTasks();
        $doneEvents=$this->countDoneEvents();
        $allHabits=$this->countAllHabits();
        $allTasks=$this->countAllTasks();
        $allEvents=$this->countAllEvents();
        $categories=$this->allcategories();
        $awards=$this->allawards();
        $streaks=$this->streakValue();
        return view('home', compact('doneHabits', 'doneTasks', 'doneEvents', 'allHabits', 'allTasks', 'allEvents', 'categories', 'awards', 'streaks'));
    }


    static public function countDoneHabits(){
        $count = Habit::whereHas('user', function ($query) {
            $query->where('id', auth()->id()); // Assuming you want to count done habits for the authenticated user
        })->where('status', 'done')->count();

        return $count;
    }
    static public function countDoneTasks(){
        $count = Task::whereHas('user', function ($query) {
            $query->where('id', auth()->id()); // Assuming you want to count done tasks for the authenticated user
        })->where('status', 'done')->count();

        return $count;
    }
    static public function countDoneEvents(){
        $count = Event::whereHas('user', function ($query) {
            $query->where('id', auth()->id()); // Assuming you want to count done events for the authenticated user
        })->where('status', 'done')->count();

        return $count;
    }
    static public function countAllHabits(){
        $count = Habit::whereHas('user', function ($query) {
            $query->where('id', auth()->id()); // Assuming you want to count all habits for the authenticated user
        })->count();

        return $count;
    }
    static public function countAllTasks(){
        $count = Task::whereHas('user', function ($query) {
            $query->where('id', auth()->id()); // Assuming you want to count all tasks for the authenticated user
        })->count();

        return $count;
    }
    static public function countAllEvents(){
        $count = Event::whereHas('user', function ($query) {
            $query->where('id', auth()->id()); // Assuming you want to count all events for the authenticated user
        })->count();

        return $count;
    }
    static public function allcategories(){
        $categories=Category::All();
        return $categories;
    }
    public function streakValue(){
        $habits = auth()->user()->habits;
        $ans=0;
        $streaks = $habits->pluck('streak')->toArray();
        foreach($streaks as $streak){
            $ans=max($streak, $ans);
        }
        return $ans;
    }
    public function allawards(){
        $awards=award::All();
        return $awards;
    }
}
