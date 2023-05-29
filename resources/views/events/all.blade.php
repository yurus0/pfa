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
                <table>
                <tr class="card-header"><td></td><td>Event Title</td><td>Description</td><td></td>
                </tr>
                <div class="card-body">
                        @foreach ($events as $event)
                            <tr><td></td>
                            <td>{{ $event->title }}</td><td>{{ $event->description }}</td>
                            <td> <form action="{{ route('event.destroy', $event->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form></td>
                        </tr>
                        @endforeach
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