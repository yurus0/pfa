@extends('layouts.app')

@section('content')
<head>
    <title>event</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>All events</h1>
            <div class="card">
                <div class="card-header"><b>Event Title</b></div>
                <div class="card-body">
                    <table>
                        <?php foreach ($events as $event): ?>
                            <tr>
                            <td><?= $event->title ?></td></tr>
                        <?php endforeach; ?>
                    </table> 
                <div class="row justify-content-center mt-3">
                <div class="col-md-8 offset-md-4">
                    <a href="{{ route('event.createform') }}" class="btn btn-primary">Add Event</a>
                </div>
            </div> 
</div>
</div>
</div>
</div>
</div>
</body>
@endsection