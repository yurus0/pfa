<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events=auth()->user()->events;
        return view('events.all', compact('events'));
    }
    public function createform(){
        return view('events.createform');
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
    public function destroy($id){
        $event=Event::FindOrFail($id);
        $event->delete();
        return redirect()->back();
    }
    //update form
    public function updateform($id){
        $event=Event::FindOrFail($id);
        return view('events.updateform', compact('event'));
    }
    //update event
    public function update($id, Request $request){
        $event=Event::FindOrFail($id);
        $title=$request->input('title');
        $description=$request->input('description');
        $date=$request->input('date');
        $time=$request->input('time');
        $location=$request->input('location');
        $status=$request->input('status');
        if($status==null){
            $status='pending';
        }
        else{
            $status='done';
        }
        $event->title=$title;
        $event->description=$description;
        $event->date=$date;
        $event->time=$time;
        $event->location=$location;
        $event->status=$status;
        $event->save();
        return redirect()->route('event');
    }
}
