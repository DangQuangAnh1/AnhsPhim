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
                    <button class="menu_button chosse">
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
                Báo cáo chi tiết
                <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    date_default_timezone_get();
                    $current_time = date('Y-m-d H:i:s');
                ?>
                <div class="header_time">
                    <span><i class="fa-regular fa-calendar"></i></span>
                    {{$current_time}}
                </div>
            </div>
            <div class="main_container">
                <div class="sum_box">
                    <div class="sum_item purple" >
                        <div>
                        <?php
                        foreach($totals_user as $totals_user){
                            echo $totals_user->total;
                        }
                        ?>
                        </div>
                        Người dùng
                    </div>
                    <div class="sum_item green" >
                        <div>
                        <?php
                        foreach($totals_movie as $totals_movie){
                            echo $totals_movie->total;
                        }
                        ?>
                        </div>
                        Movie
                    </div>
                    <div class="sum_item blue">
                        <div>
                        <?php
                        foreach($totals_feed as $totals_feed){
                            echo $totals_feed->total;
                        }
                        ?>
                        </div>
                        Feed
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/babel" src="{{ asset('/frontend/js/main.js') }}"></script>