<!DOCTYPE html>
<html>
<head>
    <title>register</title>
</head>
<body>
    <h1>register</h1>
    <form method="POST" action="{{ url('/register') }}">
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="password confirmation">
        <input type="submit" value="register">
</body>