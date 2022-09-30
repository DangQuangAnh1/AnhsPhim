<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login| Anhsphim</title>
    <link rel="stylesheet" href="{{ asset('/frontend/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="header-box hb1">
            <a href="/" class="logo">
                <img src="{{ asset('/frontend/img/Logo.png') }}" alt="Logo Anhsphim" height="60px">
            </a>
        </div>
        <div class="header-box hb2">
        </div>
    </div>
    <div class="container">
        <div class="login_form">
            <center><h3>Đăng Nhập</h3></center>
            <form action="{{route('login')}}" method ="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label for="uname"><b>Username</b></label>
                <input class= "login_input" type="text" placeholder="Enter Username" name="uname" required> 

                <label for="psw"><b>Password</b></label>
                <input class= "login_input" type="password" placeholder="Enter Password" name="psw" required>

                <button class = "login_button" type="submit">Đăng nhập</button>

            <center>
            Bạn chưa có tài khoản,
            <a href="http://127.0.0.1:8000/regist">Đăng ký</a>
            </center>
            </form>
        </div>

    </div>
</body>
<footer>
</footer>
</html>