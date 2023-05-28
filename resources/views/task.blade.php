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
                <div class="card-header"><b>Task Title</b></div>
                <div class="card-body">
                    <table>
                        <?php foreach ($tasks as $task): ?>
                            <tr>
                            <td><?= $task->title ?></td></tr>
                        <?php endforeach; ?>
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
