<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events=auth()->user()->events;
        return view('event', compact('events'));
    }
}
