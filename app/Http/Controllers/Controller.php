<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, ValidatesRequests;
    public function index() {
        return view('home');
    }
    public function habit() {
        $habits = \App\Models\Habit::all();
        return view('habit', ['habits' => $habits]);
    }
    public function event() {
        $events = \App\Models\Event::all();
        return view('event', ['events' => $events]);
    }
    public function task() {
        $tasks = \App\Models\Task::all();
        return view('task', ['tasks' => $tasks]);
    }
}
