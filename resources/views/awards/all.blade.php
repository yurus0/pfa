@extends('layouts.app')

@section('content')
<head>
    <title>awards</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>All awards</h1>
            <div class="card">
            <table>
                <div class="card-body">
                    <tr class="card-header">
                    @for($i=0;$i<6;$i++)
                        @foreach ($awards as $award)
                        <tr> <td></td> <td>{{$award->image}}<br>{{$award->name}} <br>{{ $award->description}}</td>
                            
                        @endforeach 
                        </tr>
                        @endfor
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
