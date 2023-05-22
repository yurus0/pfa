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
}
