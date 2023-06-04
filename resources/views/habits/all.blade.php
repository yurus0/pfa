@extends('layouts.app')

@section('content')
    <head>
        <title>Habit</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1>All habits</h1>
                    <div class="card">
                        <table><tr class="card-header"><td></td><td>Habit Title</td><td>Description</td><td></td><td></td></tr>
                        <div class="card-body">
                                
                                @foreach ($habits as $habit)
                                    <tr> <td></td>
                                        <td>{{ $habit->title }}</td> <td>{{ $habit->description }}</td>
                                        <td> <form action="{{ route('habit.destroy', $habit->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form></td>
                            <td>
                                @csrf
                                @method('GET')
                                <form action="{{ route('habit.updateform', $habit->id) }}" method="GET">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form></td>
                                    </tr>
                                @endforeach
                            </table>  
                        
                <div class="col-md-8 offset-md-4">
                    <a href="{{ route('habit.createform') }}" class="btn btn-primary">Add Habit</a>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </body>
@endsection
