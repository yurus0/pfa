@extends('layouts.app')

@section('content')
<head>
    <title>Welcome</title>
</head>
<body>
<div class="container">
    <center>
    <h1>Welcome</h1>
    <p><a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a> ?</p>
    </center>
</div>
</body>
@endsection