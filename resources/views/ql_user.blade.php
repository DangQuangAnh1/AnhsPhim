<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin| Anhsphim</title>
    <link rel="stylesheet" href="{{ asset('/frontend/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
    <div class="admin_container">
        <div class="menu" id="menu">
            <div class="menu_header">
                <button class="menu_button" onclick="show()">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="menu_box">
            <form action="admin" method="get">
                <div class="menu_item mi1">
                    <button class="menu_button">
                        <i class="fa-solid fa-house"></i>
                    </button>
                </div>
            </form>
            <form action="admin" method="get">
                <div class="menu_item mi2">
                    <button class="menu_button">
                        Home
                    </button>
                </div>
            </form>
            </div>
            <div class="menu_box">
            <form action="ql_user" method="get">
                <div class="menu_item mi1">
                    <button class="menu_button chosse">
                        <i class="fa-solid fa-user"></i>
                    </button>
                </div>
            </form>
            <form action="ql_user" method="get">
                <div class="menu_item mi2">
                    <button class="menu_button">
                        User
                    </button>
                </div>
            </form>
            </div>
            
            <div class="menu_box">
            <form action="ql_movie" method="get">
                <div class="menu_item mi1">
                    <button class="menu_button">
                        <i class="fa-solid fa-video"></i>
                    </button>
                </div>
            </form>
            <form action="ql_movie" method="get">
                <div class="menu_item mi2">
                    <button class="menu_button">
                        Movies
                    </button>
                </div>
            </form>
            </div>
            <div class="menu_box">
            <form action="ql_feed" method="get">
                <div class="menu_item mi1">
                    <button class="menu_button">
                        <i class="fa-solid fa-message"></i>
                    </button>
                </div>
            </form>
            <form action="ql_feed" method="get">
                <div class="menu_item mi2">
                    <button class="menu_button">
                        Feeds
                    </button>
                </div>
            </form>
            </div>
            <div class="menu_box">
            <form action="login" method="get">
                <div class="menu_item mi1">
                    <button class="menu_button">
                        <i class="fa-regular fa-hand-point-left"></i>
                    </button>
                </div>
            </form>
            <form action="login" method="get">
                <div class="menu_item mi2">
                    <button class="menu_button">
                        Đăng xuất
                    </button>
                </div>
            </form>
            </div>
        </div>
        <div class="main">
            <div class="main_header">
                Quản lý người dùng
                <div class="header_time">
                    <button class='button_edit add' onclick="showBoxAdd()">Tạo mới</button>
                </div>
            </div>
            <div class="main_container">
                <div class="table">
                <table id="customers">
                    <tr>
                        <th>User_id</th>
                        <th>Avatar</th>
                        <th>User_name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    use Illuminate\Support\Facades\DB;
                    $sql=" SELECT * FROM `users` WHERE `users`.`user_name` NOT LIKE '%admin%' ";
                    $users = DB::select($sql);
                    $rou=route('edit_user');
                    $csrf=csrf_token();
                    foreach($users as $user){
                        echo"
                        <tr>
                            <td>$user->user_id</td>
                            <td><img src='/storage/images/avatar.jpg' alt=''></td>
                            <td>$user->user_name</td>
                            <td>$user->email</td>
                            <td>$user->password</td>
                            <td style='display: flex'>
                            <input type='submit' value='Sửa' name='edit' class='button_edit ed' onClick='showBoxEdit($user->user_id)'>
                            <form action='$rou' method='POST'>
                                <input type='hidden' name='_token' value='$csrf'>
                                <input type='hidden' value='$user->user_id' name='id'>
                                <input type='submit' value='Xóa' name='delete' class='button_edit dlt'>
                            </form>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
                </table>
                </div>
            </div>
            <div class="box_add">
                <center>
                    <h3>
                        Thêm mới user
                        <input type='submit' value='Exit' class='button_edit ex' onclick="closeBoxAdd()">
                    </h3>
                </center>
                <form action="{{route('edit_user')}}" method ="POST" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label for="uname"><b>Username</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Username" name="uname" required> 

                    <label for="psw"><b>Password</b></label>
                    <input class= "login_input" type="password" placeholder="Enter Password" name="psw" required>

                    <label for="email"><b>Email</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Email" name="email" required>

                    <button class = "login_button" type="submit" name="add">Create</button>
                </form>
            </div>
            <div class="box_edit">
                <center>
                    <h3>
                        Sửa thông tin user
                        <input type='submit' value='Exit' class='button_edit ex' onclick="closeBoxEdit()">
                    </h3>
                </center>
                <form action="{{route('edit_user')}}" method ="POST" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input class= "login_input" type="hidden" id ="id" name="id" value="" required> 

                    <label for="uname"><b>Username</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Username" name="uname" required> 

                    <label for="psw"><b>Password</b></label>
                    <input class= "login_input" type="password" placeholder="Enter Password" name="psw" required>

                    <label for="email"><b>Email</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Email" name="email" required>

                    <button class = "login_button" type="submit" name="edit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/babel" src="{{ asset('/frontend/js/main.js') }}"></script>