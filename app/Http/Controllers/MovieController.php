<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    public function show($movie_id){
        $sql=" SELECT * FROM `movies` WHERE `movie_id`= ".$movie_id;
        $movie_result = DB::select($sql);
        $feeds=DB::select("SELECT * FROM `feeds` WHERE `feeds`.`movie_id` = $movie_id ORDER BY 'id' ASC");
        $nation = DB::table('movies')->where('movie_id', $movie_id)->first()->nation;
        $offer_movies = DB::select("SELECT * FROM `movies` WHERE `movies`.`nation` LIKE \"%".$nation."%\" ORDER BY RAND() LIMIT 10");
        return view('watch', ['movie_result' => $movie_result,'feeds'=>$feeds,'offer_movies'=>$offer_movies]);
    }
    public function watch($movie_id){
        $sql=" SELECT * FROM `movies` WHERE `movie_id`= ".$movie_id;
        $movie_result = DB::select($sql);
        $feeds=DB::select("SELECT * FROM `feeds` WHERE `feeds`.`movie_id` = $movie_id ORDER BY 'id' ASC");
        $nation = DB::table('movies')->where('movie_id', $movie_id)->first()->nation;
        $offer_movies = DB::select("SELECT * FROM `movies` WHERE `movies`.`nation` LIKE \"%".$nation."%\" ORDER BY RAND() LIMIT 10");
        return view('watch_movie', ['movie_result' => $movie_result,'feeds'=>$feeds,'offer_movies'=>$offer_movies]);
    }

    public function trailer($movie_id){
        $sql=" SELECT * FROM `movies` WHERE `movie_id`= ".$movie_id;
        $movie_result = DB::select($sql);
        $feeds=DB::select("SELECT * FROM `feeds` WHERE `feeds`.`movie_id` = $movie_id ORDER BY 'id' ASC");
        $nation = DB::table('movies')->where('movie_id', $movie_id)->first()->nation;
        $offer_movies = DB::select("SELECT * FROM `movies` WHERE `movies`.`nation` LIKE \"%".$nation."%\" ORDER BY RAND() LIMIT 10");
        return view('watch_trailer', ['movie_result' => $movie_result,'feeds'=>$feeds,'offer_movies'=>$offer_movies]);
    }
    public function add(Request $request,$movie_id){
        if(isset($_POST['add_feed'])){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            date_default_timezone_get();
            $current_time = date('Y-m-d H:i:s');
            $create_at = $current_time;
            $update_at = $current_time;
            $user_id = $request->input('user_id');
            $message = $request->input('message');
            DB::select("INSERT INTO `feeds`(`user_id`, `movie_id`, `message`, `create_at`, `update_at`, `image_file_name`) VALUES ('$user_id','$movie_id', '$message','$create_at', '$update_at','')");
        }
        if(isset($_POST['delete_feed'])){
            $feed_id = $request->input('feed_id');
            DB::select("DELETE FROM `feeds` WHERE `feeds`.`feed_id` = $feed_id");
        }
        $sql=" SELECT * FROM `movies` WHERE `movie_id`= ".$movie_id;
        $movie_result = DB::select($sql);
        $feeds=DB::select("SELECT * FROM `feeds` WHERE `feeds`.`movie_id` = $movie_id ORDER BY 'id' ASC");
        $nation = DB::table('movies')->where('movie_id', $movie_id)->first()->nation;
        $offer_movies = DB::select("SELECT * FROM `movies` WHERE `movies`.`nation` LIKE \"%".$nation."%\" ORDER BY RAND() LIMIT 10");
        return view('watch', ['movie_result' => $movie_result,'feeds'=>$feeds,'offer_movies'=>$offer_movies]);
    }
}