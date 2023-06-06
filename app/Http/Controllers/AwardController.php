<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index(){
        $awards=auth()->user()->awards;
        return view('awards.all', compact('awards'));
    }
}
