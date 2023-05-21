<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}
        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            Password
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="checkbox" name="remember"> Remember Me
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>