<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://unpkg.com/nature-css@0.1.0/dist/nature.min.css">
    <style>
        body {
            background-image: url('https://media.giphy.com/media/l2v1YQMVH8rEAstMyK/giphy.gif');
            background-size: cover;
            background-position: center;
            font-family: Trebuchet MS, sans-serif;
            height: 100vh;
            overflow: hidden;
            color: black;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label, input, p {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="{{route('login')}}" method="POST">
        @csrf
        <h1><i class="fas fa-sign-in-alt"></i>  Login</h1>
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

        <input type="submit" value="Login" class="btn btn-primary">
    </form>
</div>
</body>
</html>
