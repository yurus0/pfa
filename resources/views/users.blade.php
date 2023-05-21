<!DOCTYPE html>
<html>
<head>
    <title>users</title>
</head>
<body>
    <h1>All users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user->name ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>