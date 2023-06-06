@extends('layouts.app')

@section('content')
<head>
    <title>{{ $first_name }}'s Profile</title>
</head>
<body>
    <div class="container">
        <div class="card">
        <div class="card-body">
        <p>Last Name<br>{{$first_name}}</p>
        <p>First Name<br>{{$last_name}}</p>
        <p>Email<br>{{$email}}</p>
        </div>
        </div>
        <br>
        <div class="card">
        <div class="card-body">
        <p><a href="{{route('task')}}">See All Tasks</a></p>
        </div>
        </div>
        <br>
        <div class="card">
        <div class="card-body">
        <p><a href="{{route('habit')}}">See All Habits</a></p>
        </div>
        </div>
        <br>
        <div class="card">
        <div class="card-body">
        <p><a href="{{route('event')}}">See All Events</a></p>
        </div>
        </div>
        <br>
        <div class="card">
        <div class="card-body">
        <p><a href="{{route('generatePDF')}}">Download Summary</a></p>
        </div>
        </div>
    </div>
</body>
@endsection