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
                    <button class="menu_button">
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
                    <button class="menu_button chosse">
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
                Quản lý bình luận
            </div>
            <div class="main_container">
                <div class="table">
                <table id="customers">
                    <tr>
                        <th>Feed_id</th>
                        <th>User_id</th>
                        <th>Movie_id</th>
                        <th>Message</th>
                        <th>Create_at</th>
                        <th>Update_at</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    use Illuminate\Support\Facades\DB;
                    $sql=" SELECT * FROM `feeds` WHERE 1 ";
                    $feeds = DB::select($sql);
                    $rou=route('edit_feed');
                    $csrf=csrf_token();
                    foreach($feeds as $feed){
                        echo"
                        <tr>
                            <td>$feed->feed_id</td>
                            <td>$feed->user_id</td>
                            <td>$feed->movie_id</td>
                            <td>$feed->message</td>
                            <td>$feed->create_at</td>
                            <td>$feed->update_at</td>
                            <td style='display: flex'>
                            <form action='$rou' method='POST'>
                                <input type='hidden' name='_token' value='$csrf'>
                                <input type='hidden' value='$feed->feed_id' name='feed_id'>
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
        </div>
    </div>
</body>
<script type="text/babel" src="{{ asset('/frontend/js/main.js') }}"></script>