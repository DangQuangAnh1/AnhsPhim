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
                    <button class="menu_button chosse">
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
                Quản lý Phim
                <div class="header_time">
                    <button class='button_edit add' onclick="showBoxAdd()">Tạo mới</button>
                </div>
            </div>
            <div class="main_container">
                <div class="table">
                <table id="customers">
                    <tr>
                        <th>Movie_id</th>
                        <th>Movie_name</th>
                        <th>Movie_picture</th>
                        <th>Release_year</th>
                        <th>Nation</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    use Illuminate\Support\Facades\DB;
                    $sql=" SELECT * FROM `movies` WHERE 1";
                    $movies = DB::select($sql);
                    $rou=route('edit_movie');
                    $csrf=csrf_token();
                    foreach($movies as $movie){
                        echo"
                        <tr class='ptmyitem'>
                            <td>$movie->movie_id</td>
                            <td>$movie->movie_name</td>
                            <td><img src='/storage/images/$movie->movie_picture' alt=''></td>
                            <td>$movie->release_year</td>
                            <td>$movie->nation</td>
                            <td>$movie->category</td>
                            <td style='display: flex'>
                            <input type='submit' value='Sửa' name='edit' class='button_edit ed' onClick='showBoxEdit($movie->movie_id)'>
                            <form action='$rou' method='POST'>
                                <input type='hidden' name='_token' value='$csrf'>
                                <input type='hidden' value='$movie->movie_id' name='id'>
                                <input type='submit' value='Xóa' name='delete' class='button_edit dlt'>
                            </form>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
                </table>
                </div>
                <div id="page"></div>
            </div>
            <div class="box_add">
                <center>
                    <h3>
                        Thêm mới Movie
                        <input type='submit' value='Exit' class='button_edit ex' onclick="closeBoxAdd()">
                    </h3>
                </center>
                <form action="{{route('edit_movie')}}" method ="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <label for="movie_name"><b>Movie name</b></label>
                    <input class= "login_input" type="text" placeholder="Enter movie name" name="movie_name" required> 

                    <label for="movie_picture"><b>Movie picture</b></label>
                    <input type="file" name="movie_picture" required>

                    <label for="source_trailer"><b>Source trailer</b></label>
                    <input type="file" name="source_trailer" required>

                    <label for="source_movie"><b>Source movie</b></label>
                    <input type="file" name="source_movie" required>

                    <label for="release_year"><b>Release year</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Release year" name="release_year" required>

                    <label for="nation"><b>Nation</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Nation" name="nation" required>

                    <label for="category"><b>Category</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Category" name="category" required>

                    <label for="brief"><b>Brief</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Brief" name="brief" required>

                    <button class = "login_button" type="submit" name="add">Create</button>
                </form>
            </div>
            <div class="box_edit">
                <center>
                    <h3>
                        Sửa thông tin Movie
                        <input type='submit' value='Exit' class='button_edit ex' onclick="closeBoxEdit()">
                    </h3>
                </center>
                <form action="{{route('edit_movie')}}" method ="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input class= "login_input" type="hidden" id ="id" name="id" value="" required> 

                    <label for="movie_name"><b>Movie name</b></label>
                    <input class= "login_input" type="text" placeholder="Enter movie name" name="movie_name" required> 

                    <label for="movie_picture"><b>Movie picture</b></label>
                    <input type="file" name="movie_picture" required>

                    <label for="source_trailer"><b>Source trailer</b></label>
                    <input type="file" name="source_trailer" required>

                    <label for="source_movie"><b>Source movie</b></label>
                    <input type="file" name="source_movie" required>

                    <label for="release_year"><b>Release year</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Release year" name="release_year" required>

                    <label for="nation"><b>Nation</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Nation" name="nation" required>

                    <label for="category"><b>Category</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Category" name="category" required>

                    <label for="brief"><b>Brief</b></label>
                    <input class= "login_input" type="text" placeholder="Enter Brief" name="brief" required>

                    <button class = "login_button" type="submit" name="edit">Edit</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/babel" src="{{ asset('/frontend/js/main.js') }}"></script>
</body>
</html>