<!DOCTYPE html>
<html>
<head>
    <title>tasks</title>
</head>
<body>
    <h1>All task</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= $task->title ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>