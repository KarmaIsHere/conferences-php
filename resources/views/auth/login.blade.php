<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ef958cf3d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/nature-css@0.1.0/dist/nature.min.css">
    <title>Login Form</title>
</head>

            <h1 class="text-center mb-3"><i class="fas fa-sign-in-alt"></i>  Login</h1>
<form action="{{route('login')}}" method="POST">
    @csrf
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{old('username')}}">
        @error('username')
        <p>{{$message}}</p>
        @enderror

        <label for="password-input">Password</label>
        <input type="password" id="password-input" name="password" value="{{old('password')}}">
        @error('password')
        <p>{{$message}}</p>
        @enderror
        <label for="remember-input">Remember me</label>
        <input type="checkbox" id="remember-input" name="remember" value="1" {{old('remember') ? 'checked' : ''}}>
        <input type="submit" value="login" class="btn btn-primary">
</form>
</html>


