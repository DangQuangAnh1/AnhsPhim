<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home| Anhsphim</title>
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
            <ul style="list-style: none; display: flex;">
                <li class="header_text_item">
                    <a class="pm" href="{{ route('show', ['value' => 'fm:Mới']) }}">PHIM MỚI</a>
                </li>
                <li class="header_text_item">
                    <a class="pl" href="{{ route('show', ['value' => 'fm:Lẻ']) }}">PHIM LẺ</a>
                </li>
                <li class="header_text_item">
                    <a class="pb" href="{{ route('show', ['value' => 'fm:Bộ']) }}">PHIM BỘ</a>
                </li>
                <li class="header_text_item tl">
                    <div>
                        THỂ LOẠI
                        <div class="tl_list_item_box">
                            <ul class="tl_list_item">
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Hành Động']) }}">
                                        Phim hành động
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Võ Thuật']) }}">
                                        Phim võ thuật
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Tình Cảm']) }}">
                                        Phim tình cảm
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Hoạt Hình']) }}">
                                        Phim hoạt hình
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Hài Hước']) }}">
                                        Phim hài hước
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Viễn Tưởng']) }}">
                                        Phim viễn tưởng
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Cổ Trang']) }}">
                                        Phim cổ trang
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Phiêu Lưu']) }}">
                                        Phim phiêu lưu
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Tâm Lý']) }}">
                                        Phim tâm lý
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Khoa Học']) }}">
                                        Phim khoa học
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Hình Sự']) }}">
                                        Phim hình sự
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Kinh Dị']) }}">
                                        Phim kinh dị
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Chiến Tranh']) }}">
                                        Phim chiến tranh
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Âm Nhạc']) }}">
                                        Phim âm nhạc
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Thể Thao']) }}">
                                        Phim thể thao
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Thần Thoại']) }}">
                                        Phim thần thoại
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Game Show']) }}">
                                        Game show
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Truyền Hình']) }}">
                                        Phim truyền hình
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Chiếu Rạp']) }}">
                                        Phim chiếu rạp
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:Anime']) }}">
                                        Phim anime
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header_text_item qg">
                    <div>
                        QUỐC GIA
                        <div class="qg_list_item_box">
                            <ul class="qg_list_item">
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:Trung Quốc']) }}">
                                        Phim Trung Quốc
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:Hàn Quốc']) }}">
                                        Phim Hàn Quốc
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:Nhật Bản']) }}">
                                        Phim Nhật Bản
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:Âu Mỹ']) }}">
                                        Phim Âu Mỹ
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:Thái Lan']) }}">
                                        Phim Thái Lan
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:Đài Loan']) }}">
                                        Phim Đài Loan
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'qg:Hồng Kông']) }}">
                                        Phim Hồng Kông
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'qg:Ấn Độ']) }}">
                                        Phim Ấn Độ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header_text_item nph">
                    <div>
                        NĂM PHÁT HÀNH
                        <div class="nph_list_item_box">
                            <ul class="nph_list_item">
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2022']) }}">
                                        Phim 2022
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2021']) }}">
                                        Phim 2021
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2020']) }}">
                                        Phim 2020
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2019']) }}">
                                        Phim 2019
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2018']) }}">
                                        Phim 2018
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2017']) }}">
                                        Phim 2017
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2016']) }}">
                                        Phim 2016
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2015']) }}">
                                        Phim 2015
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2014']) }}">
                                        Phim 2014
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2013']) }}">
                                        Phim 2013
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2012']) }}">
                                        Phim 2012
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2011']) }}">
                                        Phim 2011
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2010']) }}">
                                        Phim 2010
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2009']) }}">
                                        Phim 2009
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:2008']) }}">
                                        Phim 2008
                                    </a>
                                </li>
                                <li>
                                    <a class="nph_item" href="{{ route('show', ['value' => 'nph:<2008']) }}">
                                        Phim trước 2008
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header_text_item">
                    <a class="pcr" href="{{ route('show', ['value' => 'tl:chiếu rạp']) }}">PHIM CHIẾU RẠP</a>
                </li>
                <li class="header_text_item">
                    <a class="tl" href="{{ route('show', ['value' => 'trailer']) }}">TRAILER</a>
                </li>
                <li class="header_text_item tp">
                    TOP PHIM
                    <div class="tp_list_item_box">
                        <ul class="tp_list_item">
                            <li>
                                <a class="tp_item" href="{{ route('show', ['value' => 'tp:imdb']) }}">
                                    Top IMDB
                                </a>
                            </li>
                            <li>
                                <a class="tp_item" href="{{ route('show', ['value' => 'tp:hot']) }}">
                                    Phim Hot
                                </a>
                            </li>
                            <li>
                                <a class="tp_item" href="{{ route('show', ['value' => 'tp:netflix']) }}">
                                    Phim Netflix
                                </a>
                            </li>
                            <li>
                                <a class="tp_item" href="{{ route('show', ['value' => 'tp:dc comic']) }}">
                                    Phim DC Comic
                                </a>
                            </li>
                            <li>
                                <a class="tp_item" href="{{ route('show', ['value' => 'tp:marvel']) }}">
                                    Phim Marvel
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-box hb3">
            <form action="{{ route('search') }}" method="POST" class="search_form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" placeholder="  Tìm tên phim, diễn viên..." class="search_type" name="search_type">
                <button name="search_button" class="search_button">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="user_form">
            <div class="left_user_form">
                <?php
                    $user_name = session()->get('user_name', '');
                    $user_id = session()->get('user_id', '');
                    echo "<div class='welcome'>Xin chào: $user_name</div>";
                ?>
                <img src="/storage/images/avatar.jpg" alt="" class="avatar_header">
            </div>
            <div class="left_user_form luf_right">
                <i class="fa-solid fa-angle-down"></i>
                <div class="logout">
                    <a href="login">Đăng xuất</a>
                </div>
            </div>
        </div>
        <div class="slide_show">
            <div>
                <h2 class="caption">PHIM ĐỀ CỬ</h2>
            </div>
            <div class="slide">
                <a class="back_slide" onclick="plusSlide(-1)">
                    <i class="fas fa-caret-left"></i>
                </a>
                <a class="next_slide" onclick="plusSlide(1)">
                    <i class="fas fa-caret-right"></i>
                </a>
                <?php
                    $index=1;
                    foreach($offer_movies as $movie){
                        if (($index-1)%5==0) {
                            echo"
                            <div class='myitem'>
                            ";
                        }
                        echo "
                        <form action='watch/$movie->movie_id' method='get' class='box_movie'>
                        <button>
                            <p class='movie_name'>$movie->movie_name</p>
                            <span class='label'>Hoàn Tất ($movie->episode/$movie->total_episodes)</span>
                            <i class='fa-solid fa-circle-play'></i>
                            <img src='/storage/images/$movie->movie_picture' alt=''>
                        </button>
                        </form>
                        ";
                        $index+=1;
                        if (($index-1)%5==0) {
                            echo"
                            </div>
                            ";
                        }
                    };
                ?>
            </div>
        </div>
        <div class="slide_show">
            <div>
                <h2 class="caption">PHIM MỚI CẬP NHẬP</h2>
            </div>
            <div class="new_movies"> 
            <?php
                $index=1;
                foreach($new_movies as $movie){
                if ($index==1) {
                    echo"
                    <div class='first_item'>
                        <form action='watch/$movie->movie_id' method='get' class='box_movie'>
                        <button>
                            <p class='movie_name'>$movie->movie_name</p>
                            <span class='label'>Hoàn Tất ($movie->episode/$movie->total_episodes)</span>
                            <i class='fa-solid fa-circle-play'></i>
                            <img src='/storage/images/$movie->movie_picture' alt=''>
                        </button>
                        </form>
                    </div>
                    <div class='my_item'>
                    ";
                }
                else if ($index<=7){
                    echo"
                    <form action='watch/$movie->movie_id' method='get' class='box_movie'>
                    <button>
                        <p class='movie_name'>$movie->movie_name</p>
                        <span class='label'>Hoàn Tất ($movie->episode/$movie->total_episodes)</span>
                        <i class='fa-solid fa-circle-play'></i>
                        <img src='/storage/images/$movie->movie_picture' alt=''>
                    </button>
                    </form>
                    ";
                    if ($index==7){
                        echo "</div>";
                        echo "<div class='my_item_bottom'>";
                    }
                }
                else{
                    echo"
                    <form action='watch/$movie->movie_id' method='get' class='box_movie'>
                    <button>
                        <p class='movie_name'>$movie->movie_name</p>
                        <span class='label'>Hoàn Tất ($movie->episode/$movie->total_episodes)</span>
                        <i class='fa-solid fa-circle-play'></i>
                        <img src='/storage/images/$movie->movie_picture' alt=''>
                    </button>
                    </form>
                    ";
                }
                $index+=1;
                };
                echo "</div>";
                ?>
            </div>
        </div>
        <div class="slide_show">
            <div>
                <h2 class="caption">PHIM CHIẾU RẠP</h2>
            </div>
            <div class="new_movies">
            <?php
                $index=1;
                foreach($movie_theaters as $movie){
                if ($index==1) {
                    echo"
                    <div class='first_item'>
                        <form action='watch/$movie->movie_id' method='get' class='box_movie'>
                        <button>
                            <p class='movie_name'>$movie->movie_name</p>
                            <span class='label'>Hoàn Tất ($movie->episode/$movie->total_episodes)</span>
                            <i class='fa-solid fa-circle-play'></i>
                            <img src='/storage/images/$movie->movie_picture' alt=''>
                        </button>
                        </form>
                    </div>
                    <div class='my_item'>
                    ";
                }
                else if ($index<=7){
                    echo"
                    <form action='watch/$movie->movie_id' method='get' class='box_movie'>
                    <button>
                        <p class='movie_name'>$movie->movie_name</p>
                        <span class='label'>Hoàn Tất ($movie->episode/$movie->total_episodes)</span>
                        <i class='fa-solid fa-circle-play'></i>
                        <img src='/storage/images/$movie->movie_picture' alt=''>
                    </button>
                    </form>
                    ";
                    if ($index==7){
                        echo "</div>";
                        echo "<div class='my_item_bottom'>";
                    }
                }
                else {
                    echo"
                    <form action='watch/$movie->movie_id' method='get' class='box_movie'>
                    <button>
                        <p class='movie_name'>$movie->movie_name</p>
                        <span class='label'>Hoàn Tất($movie->episode/$movie->total_episodes)</span>
                        <i class='fa-solid fa-circle-play'></i>
                        <img src='/storage/images/$movie->movie_picture' alt=''>
                    </button>
                    </form>
                    ";
                }
                $index+=1;
                };
                echo "</div>";
                ?>
            </div>
        </div>
    </div>
</body>
<footer>
    <div class="foot_logo">
        <a href="/" class="logo">
            <img src="{{ asset('/frontend/img/Logo.png') }}" alt="Logo Anhsphim" height="60px">
        </a>
    </div>
    <div>
        <div>
            <h4>
                Phim mới
            </h4>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'tl:Chiếu rạp']) }}">
            Phim Chiếu rạp
            </a>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'tl:Chiếu rạp']) }}">
            Phim Hành động
            </a>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'tl:Chiếu rạp']) }}">
            Phim Viễn tưởng
            </a>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'tl:Chiếu rạp']) }}">
            Phim Tâm lý
            </a>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'tl:Chiếu rạp']) }}">
            Phim Hài hước
            </a>
        </div>
    </div>
    <div>
        <div>
            <h4>
                Phim hay
            </h4>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'qg:Âu Mỹ']) }}">
            Phim Âu Mỹ
            </a>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'qg:Hàn Quốc']) }}">
            Phim Hàn Quốc
            </a>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'qg:Trung Quốc']) }}">
            Phim Trung Quốc
            </a>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'qg:Thái Lan']) }}">
            Phim Thái Lan
            </a>
        </div>
        <div>
            <a class="tl_item" href="{{ route('show', ['value' => 'qg:Việt Nam']) }}">
            Phim Việt Nam
            </a>
        </div>
    </div>
    <div>
        <div>
            <h4>
                Phim hot
            </h4>
        </div>
    </div>
    <div>
        <div>
            <h4>
                Trợ giúp
            </h4>
        </div>
        <div>
            <a class="tl_item" href="">
            Hỏi đáp
            </a>
        </div>
        <div>
            <a class="tl_item" href="">
            Liên hệ
            </a>
        </div>
        <div>
            <a class="tl_item" href="">
            Tin tức
            </a>
        </div>
    </div>
    <div>
        <div>
            <h4>
                Thông tin
            </h4>
        </div>
        <div>
            <a class="tl_item" href="">
            Điều khoản sử dụng
            </a>
        </div>
        <div>
            <a class="tl_item" href="">
            Chính sách riêng tư
            </a>
        </div>
        <div>
            <a class="tl_item" href="">
            Khiếu nạp bản quyền
            </a>
        </div>
        <div>
            <a class="tl_item" href="">
            2022 Anhphim.net
            </a>
        </div>
    </div>
</footer>
<script type="text/babel" src="{{ asset('/frontend/js/main.js') }}"></script>
</html>