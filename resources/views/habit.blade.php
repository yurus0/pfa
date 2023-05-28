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
                        <div class="card-header"><b>Habit Title</b></div>
                        <div class="card-body">
                            <table>
                                @foreach ($habits as $habit)
                                    <tr>
                                        <td>{{ $habit->title }}</td>
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
