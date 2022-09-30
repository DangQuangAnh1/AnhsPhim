<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show_login(){
        return view('login');
    }

    public function show_regist(){
        return view('regist');
    }

    public function regist(Request $request){
        $validatedData = $request->validate([
            'uname' => 'required',
            'psw' => 'required',
            'email' => 'required'
    
        ]);
        $user_name = $request->uname;
        $password = $request->psw;
        $email = $request->email;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script type = "text/javascript">';
            echo 'alert("Invalid email format.");';
            echo 'window.location.href = "regist" ';
            echo '</script>';
        }else {
            $checked = DB::table('users')->where('email', $email)->first();
            if($checked){
                echo '<script type = "text/javascript">';
                echo 'alert("Email đã được sử dụng.");';
                echo 'window.location.href = "regist" ';
                echo '</script>';
            }
            else{
                DB::select("INSERT INTO `users`(`user_name`, `email`, `password`) VALUES ('$user_name','$email','$password')");
            }
        }
        echo '<script type = "text/javascript">';
        echo 'alert("Đăng ký thành công.");';
        echo '</script>';
        return view('login');
    
    }
    
    public function login(Request $request){
        $validatedData = $request->validate([
            'uname' => 'required',
            'psw' => 'required'
    
        ]);
        $user_name = $request->uname;
        $password = $request->psw;
        $checked = DB::table('users')->where('user_name', $user_name)->first();
        if($checked){
            if($checked->password==$password){
                session()->put('user_id', $checked->user_id);
                session()->put('user_name', $checked->user_name);
                $offer_movies = DB::select("SELECT * FROM `movies` WHERE 1 ORDER BY RAND() LIMIT 10");
                $new_movies = DB::select("SELECT * FROM `movies` WHERE 1 LIMIT 12");
                $movie_theaters = DB::select("SELECT * FROM `movies` WHERE `category` LIKE '%chiếu rạp%'");
                if($user_name=="admin"){
                    $totals_movie=DB::select("SELECT COUNT('movie_id') as `total` FROM `movies` WHERE 1");
                    $totals_user=DB::select("SELECT COUNT('user_id') as `total` FROM `users` WHERE 1");
                    $totals_feed=DB::select("SELECT COUNT('feed_id') as `total` FROM `feeds` WHERE 1");
                    return view('admin',['totals_movie'=>$totals_movie,'totals_user'=>$totals_user,'totals_feed'=>$totals_feed]);
                }
                return view('welcome', ['offer_movies' => $offer_movies,'new_movies'=>$new_movies,'movie_theaters'=>$movie_theaters]);
            }
            else{
                echo '<script type = "text/javascript">';
                echo 'alert("Sai mật khẩu.");';
                echo 'window.location.href = "login" ';
                echo '</script>';
            }
        }
        else{
            echo '<script type = "text/javascript">';
            echo 'alert("Tài khoản không tồn tại.");';
            echo 'window.location.href = "login" ';
            echo '</script>';
        }
    } 
}