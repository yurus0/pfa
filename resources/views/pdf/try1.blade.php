<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
    <p>{{ $date }}</p>
    <h1>{{ $title }}</h1>
    <div class="card">
    <div class="card-body">
    <p>Last Name<br>{{$first_name}}</p>
    <p>First Name<br>{{$last_name}}</p>
    <p>Email<br>{{$email}}</p>
    <p>Task Productivity<br>{{$task_productivity}}</p>
    <p>Habit Productivity<br>{{$habit_productivity}}</p>
    <p>Event Productivity<br>{{$event_productivity}}</p>
    <p>Productivity<br>{{$productivity}}</p>
    </div>
    </div>
    </div>
</body>
</html>