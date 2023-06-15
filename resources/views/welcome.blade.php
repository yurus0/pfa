@extends('layouts.app')

@section('content')
<head>
    <title>Welcome</title>
    
    <link rel="stylesheet" href="app.css">
</head>
<body style="background-color: #000000;">
<div class="container">
    <center>
    <h1 style="color: #ffffff;">Welcome to <img src="{{ asset('images/logo-white.png') }}">!</h1>
    <p style="color: #ffffff;"><a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a> ?</p>
    <p style="color: #ffffff;">Start your Trackify adventure today and elevate your productivity to new heights! </p>
    <button class="hover-button">Start now !</button>
    <h1 style="color: #ffffff;">DISCOVER</h1>
    <p style="color: #ffffff;">With Trackify, you gain full control over your daily routines, ensuring that your habits align with your goals. Our intuitive interface allows you to effortlessly track and analyze your progress, providing valuable insights to enhance your productivity. Whether it’s creating and prioritizing tasks, setting reminders for important events, or establishing and monitoring your habits, Trackify empowers you to stay organized, focused, and on track. Experience the power of seamless habit management, task tracking, and event coordination with Trackify - your ultimate companion for success.</p>
    <h1 style="color: #ffffff;">Tasks</h1>
    <p style="color: #ffffff;">Stay organized and focused by managing your tasks efficiently. Create, track, and prioritize tasks, ensuring nothing falls through the cracks.</p>
    <h1 style="color: #ffffff;">Habits</h1>
    <p style="color: #ffffff;">Build positive habits and improve your daily routines. Set goals, track progress, and receive reminders to help you develop and maintain healthy habits.</p>
    <h1 style="color: #ffffff;">Events</h1>
    <p style="color: #ffffff;">Seamlessly plan and manage your events. Stay on top of important dates, schedule appointments, and receive notifications to ensure you never miss a beat.</p>
    <h1 style="color: #ffffff;">Contact us</h1>


    </center>
</div>
</body>
@endsection