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
    public function createform(){
        return view('createevent');
    }
    public function create(Request $request){
        $event= new Event();
        $event->user_id=auth()->user()->id;
        $event->title=$request->input('title');
        $event->description=$request->input('description');
        $event->date = $request->input('date');
        $event->time= $request->input('time');
        $event->location=$request->input('location');
        $event->status='pending';
        $event->save();
        return redirect()->route('event');
    }
}
