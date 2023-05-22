@extends('layouts.app')

@section('content')
<head>
    <title>users</title>
</head>
<body>
    <div class="container">
    <h1>All users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user->name ?></li>
        <?php endforeach; ?>
    </ul>
    </div>
</body>
@endsection