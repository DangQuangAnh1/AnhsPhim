<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class WelcomeController extends Controller
{
    public function index()
    {
        $offer_movies = DB::select("SELECT * FROM `movies` WHERE 1 ORDER BY RAND() LIMIT 10");
        $new_movies = DB::select("SELECT * FROM `movies` WHERE 1 LIMIT 12");
        $movie_theaters = DB::select("SELECT * FROM `movies` WHERE `category` LIKE '%chiếu rạp%'");
        return view('welcome', ['offer_movies' => $offer_movies,'new_movies'=>$new_movies,'movie_theaters'=>$movie_theaters]);
    }
}