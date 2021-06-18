<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <a href='{{url("token_confirm" , [$tt=$token ]) }}'>{{$token }} </a> -->
    <h2>This is Your Password Reset Link </h2>
    <a href='{{url("reset-password" , [$tt=$token ]) }}'>Click here</a>
</body>
</html>