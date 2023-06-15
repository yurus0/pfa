@extends('layouts.app')

@section('content')
<head>
    <title>home</title>

    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="container-dark">
    <p style="color: #ffffffaf; text-transform: uppercase;">{{Carbon\Carbon::now()->format('l, d M')}}</p>
    <h1 style="color: #ffffff;">Summary</h1>
    <div class="card">
    <div class="card-header">
    <p>Tasks <br> {{ $doneTasks }}/{{ $allTasks }} TOTAL</p>
    <p>Habits <br> {{ $doneHabits }}/{{ $allHabits }} TOTAL</p>
    <p>Events <br> {{ $doneEvents }}/{{ $allEvents }} TOLAL</p>
    <p> Overall progress <br> {{ $doneTasks + $doneHabits + $doneEvents }}/{{ $allTasks + $allHabits + $allEvents }} TOTAL</p>
    <p>
    Streak <br>
        {{ $streaks }}
    </p>
    <div class="card">
    <div class="card-header">
        <h2>Tasks for today</h2>
    </div>
    <div class="card-body">
    @foreach($categories as $category)
    <li><a href="{{ url('/tasksbycateg',$category->id ) }}">{{ $category->name }}</a></li>
    @endforeach
</div>
</div>
<br>
<div class="card">
    <div class="card-header">
    <h2>Habits for today</h2>
    </div>
    <div class="card-body">
    @foreach($categories as $category)
    <li><a href="{{ url('/habitsbycateg',$category->id ) }}">{{ $category->name }}</a></li>
    @endforeach
</div>
</div>
<br>
<div class="card">
    <div class="card-header">
    <h2>Awards</h2>
    </div>
    <div class="card-body">
    @foreach($awards as $award)
    <li><a href="{{ url('/awards',$category->id ) }}"> <img src="{{ asset('images/', $award->image) }}" alt="award-icon"><br>{{ $award->name }}</a></li>
    @endforeach
</div>
</div>
</div>
</div>
</div>

</body>
@endsection