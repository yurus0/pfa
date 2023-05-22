@extends('layouts.app')

@section('content')
<head>
    <title>home</title>
</head>
<body>
    <div class="container">
    <h1>Home</h1>
    <li><a href="{{ url('/habit') }}">All habits</a></li>
    <li><a href="{{ url('/event') }}">All events</a></li>
    <li><a href="{{ url('/task') }}">All tasks</a></li>
    <li><a href="{{ url('/users') }}">All users</a></li>
    </div>

</body>
@endsection