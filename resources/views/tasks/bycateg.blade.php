@extends('layouts.app')

@section('content')
<head>
    <title>tasks</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>All tasks</h1>
            <div class="card">
            <table>
                <div class="card-body">
                    <tr class="card-header"><td></td><td>Task Title</td><td>Description</td><td></td><td></td></tr>
                        @foreach ($tasksbycateg as $task)
                        <tr><td></td> <td>{{$task->title}}</td><td>{{ $task->description }}</td>
                            <td><form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form></td>

                            <td><form action="{{ route('task.updateform', $task->id) }}" method="GET">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form></td>
                        </tr>
                        @endforeach 
                    </table>
                    <div class="row justify-content-center mt-3">
                        
                <div class="col-md-8 offset-md-4">
                    <a href="{{ route('task.createform') }}" class="btn btn-primary">Add Task</a>
                </div>  
</div>
</div>
</div>
</div>
</div>
</body>
@endsection
