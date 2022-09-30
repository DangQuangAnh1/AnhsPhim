<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Psy\debug;

class AdminController extends Controller
{
    public function index(){
        $totals_movie=DB::select("SELECT COUNT('movie_id') as `total` FROM `movies` WHERE 1");
        $totals_user=DB::select("SELECT COUNT('user_id') as `total` FROM `users` WHERE 1");
        $totals_feed=DB::select("SELECT COUNT('feed_id') as `total` FROM `feeds` WHERE 1");
        return view('admin',['totals_movie'=>$totals_movie,'totals_user'=>$totals_user,'totals_feed'=>$totals_feed]);
    }
    public function upload(Request $request){
        $validatedData = $request->validate([
            'images' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',
    
        ]);
    
        $name = $request->file('images')->getClientOriginalName();
    
        $path = $request->file('images')->storeAs('public/images',$name);

        return view('admin',['name'=>$name,'path'=>$path]);
    
    } 
    public function show_users(){
        return view('ql_user');
    }
    public function show_movies(){
        return view('ql_movie');
    }
    public function show_feeds(){
        return view('ql_feed');
    }
    public function user(Request $request){
        $user_id = $request->input('id');
        $user_name = $request->input('uname');
        $password = $request->input('psw');
        $email = $request->input('email');
        if(isset($_POST['delete'])){
            DB::select("DELETE FROM `users` WHERE `users`.`user_id` = '$user_id'");
            return view('ql_user');
        }
        if(isset($_POST['add'])){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo '<script type = "text/javascript">';
                echo 'alert("Invalid email format.");';
                echo 'window.location.href = "ql_user" ';
                echo '</script>';
            }else {
                $checked = DB::table('users')->where('email', $email)->first();
                if($checked){
                    echo '<script type = "text/javascript">';
                    echo 'alert("Email đã được sử dụng.");';
                    echo 'window.location.href = "ql_user" ';
                    echo '</script>';
                }
                else{
                    DB::select("INSERT INTO `users`(`user_name`, `email`, `password`) VALUES ('$user_name','$email','$password')");
                    return view('ql_user');
                }
            }
        }
        if(isset($_POST['edit'])){
            DB::select("UPDATE `users` SET `user_name`='$user_name',`email`='$email',`password`='$password' WHERE `users`.`user_id`='$user_id'");
            return view('ql_user');
        }
    }
    public function feed(Request $request){
        $feed_id = $request->input('feed_id');
        if(isset($_POST['delete'])){
            DB::select("DELETE FROM `feeds` WHERE `feeds`.`feed_id` = '$feed_id'");
            return view('ql_feed');
        }
    }
    public function movie(Request $request){

        $movie_id = $request->input('id');

        if(isset($_POST['delete'])){
            DB::select("DELETE FROM `movies` WHERE `movies`.`movie_id` = '$movie_id'");
            return view('ql_movie');
        }
        else{
            $movie_name=$request->input('movie_name');
    
            $image_file_name = $request->file('movie_picture')->getClientOriginalName();
            $image_file_path = $request->file('movie_picture')->storeAs('public/images',$image_file_name);

            $movie_file_name = $request->file('source_movie')->getClientOriginalName();
            $movie_file_path = $request->file('source_movie')->storeAs('public/videos',$movie_file_name);

            $trailer_name = $request->file('source_trailer')->getClientOriginalName();
            $trailer_path = $request->file('source_trailer')->storeAs('public/videos',$trailer_name);

            $release_year=$request->input('release_year');

            $nation=$request->input('nation');

            $category=$request->input('category');

            $brief=$request->input('brief');
        }
        if(isset($_POST['add'])){
            DB::select("INSERT INTO `movies`(`movie_name`, `movie_picture`, `episode`, `total_episodes`, `source_trailler`, `source_movie`, `release_year`, `nation`, `category`, `brief`) VALUES ('$movie_name','$image_file_name',1,1,'$movie_file_name','$trailer_name','$release_year','$nation','$category','$brief')");
            return view('ql_movie');
        }
        if(isset($_POST['edit'])){
            DB::select("UPDATE `movies` SET `movie_name`='$movie_name',`movie_picture`='$image_file_name',`episode`='1',`total_episodes`='1',`source_trailler`='$trailer_name',`source_movie`='$movie_file_name',`release_year`='$release_year',`nation`='$nation',`category`='$category',`brief`='$brief' WHERE `movies`.`movie_id`='$movie_id'");
            return view('ql_movie');
        }
    }
}