@extends('layouts.app')

@section('content')
<head>
    <title>habit</title>
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
                        <?php foreach ($habits as $habit): ?>
                            <tr>
                            <td><?= $habit->title ?></td></tr>
                        <?php endforeach; ?>
                    </table>  
</div>
</div>
</div>
</div>
</div>
</body>
@endsection