<!DOCTYPE html>
<html>
<head>
    <title>habit</title>
</head>
<body>
    <h1>All habits</h1>
    <ul>
        <?php foreach ($habits as $habit): ?>
            <li><?= $habit->title ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>