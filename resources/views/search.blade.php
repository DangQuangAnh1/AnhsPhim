<?php
    $search_type=substr($value, 0, 3);
    $search_type= rtrim($search_type,":");
    $search_value=substr($value, 3);
    $search_value= ltrim($search_value,":");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Search| Anhsphim</title>
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
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:hành động']) }}">
                                        Phim hành động
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:võ thuật']) }}">
                                        Phim võ thuật
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:tình cảm']) }}">
                                        Phim tình cảm
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:hoạt hình']) }}">
                                        Phim hoạt hình
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:hài hước']) }}">
                                        Phim hài hước
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:viễn tưởng']) }}">
                                        Phim viễn tưởng
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:cổ trang']) }}">
                                        Phim cổ trang
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:phiêu lưu']) }}">
                                        Phim phiêu lưu
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:tâm lý']) }}">
                                        Phim tâm lý
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:khoa học']) }}">
                                        Phim khoa học
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:hình sự']) }}">
                                        Phim hình sự
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:kinh dị']) }}">
                                        Phim kinh dị
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:chiến tranh']) }}">
                                        Phim chiến tranh
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:âm nhạc']) }}">
                                        Phim âm nhạc
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:thể thao']) }}">
                                        Phim thể thao
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:thần thoại']) }}">
                                        Phim thần thoại
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:game show']) }}">
                                        Game show
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:truyền hình']) }}">
                                        Phim truyền hình
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:chiếu rạp']) }}">
                                        Phim chiếu rạp
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'tl:anime']) }}">
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
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:trung quốc']) }}">
                                        Phim Trung Quốc
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:hàn quốc']) }}">
                                        Phim Hàn Quốc
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:nhật bản']) }}">
                                        Phim Nhật Bản
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:âu mỹ']) }}">
                                        Phim Âu Mỹ
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:thái lan']) }}">
                                        Phim Thái Lan
                                    </a>
                                </li>
                                <li>
                                    <a class="qg_item" href="{{ route('show', ['value' => 'qg:đài loan']) }}">
                                        Phim Đài Loan
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'qg:hồng kông']) }}">
                                        Phim Hồng Kông
                                    </a>
                                </li>
                                <li>
                                    <a class="tl_item" href="{{ route('show', ['value' => 'qg:ấn độ']) }}">
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
                    <a class="tl" href="{{ route('show', ['value' => 'trailler']) }}">TRAILER</a>
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
        <div class="container90per">
        <div>
            <h2 class="caption">
                <?php 
                if($search_type!='tk'){
                    echo "PHIM: ".ucwords($search_value);
                }
                else{
                    echo ucwords($search_value);
                }
                ?>
            </h2>
        </div>
        <div class='search_item'>
            <?php
            foreach($movie_results as $movie){
                echo"
                <form action='http://127.0.0.1:8000/watch/$movie->movie_id' method='get' class='box_movie'>
                <button>
                    <p class='movie_name'>$movie->movie_name</p>
                    <span class='label'>Hoàn Tất ($movie->episode/$movie->total_episodes)</span>
                    <i class='fa-solid fa-circle-play'></i>
                    <img src='/storage/images/$movie->movie_picture' alt=''>
                </button>
                </form>
                ";
            }
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
</html>  
