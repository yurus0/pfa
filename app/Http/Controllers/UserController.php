<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class UserController extends Controller
{
    public function index(){
        $users= User::all();
        return view('users', compact('users'));
    }
    public function account(){
        $users=auth()->user();
        $first_name=$users->first_name;
        $last_name=$users->last_name;
        $email=$users->email;
        return view('account', compact('first_name', 'last_name', 'email'));
    }
    public function generatePDF(){
        $users=auth()->user();
        $first_name=$users->first_name;
        $last_name=$users->last_name;
        $email=$users->email;
        $allhabits=HomeController::countAllHabits();
        $alltasks=HomeController::countAllTasks();
        $allevents=HomeController::countAllEvents();
        if($allhabits==0){
            $habit_productivity=0;
        }
        else{
            $habit_productivity=HomeController::countDoneHabits()/HomeController::countAllHabits();
        }
        if($alltasks==0){
            $task_productivity=0;
        }
        else{
            $task_productivity=HomeController::countDoneTasks()/HomeController::countAllTasks();
        }
        if($allevents==0){
            $event_productivity=0;
        }
        else{
            $event_productivity=HomeController::countDoneEvents()/HomeController::countAllEvents();
        }
        $productivity=$habit_productivity+$task_productivity+$event_productivity;
        $data = [
            'title' => 'Summary',
            'date' => date('m/d/Y'),
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'task_productivity' => $task_productivity,
            'habit_productivity' => $habit_productivity,
            'event_productivity' => $event_productivity,
            'productivity' => $productivity,
        ];

        $pdf = PDF::loadView('pdf.try1', $data);

        return $pdf->download('try1.pdf');
    }
}
