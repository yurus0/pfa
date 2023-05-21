<!DOCTYPE html>
<html>
<head>
    <title>event</title>
</head>
<body>
    <h1>All events</h1> 
    <ul>
        <?php foreach ($events as $event): ?>
            <li><?= $event->title ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>