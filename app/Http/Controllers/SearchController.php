<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function show($value)
    {
        if($value=='fm:Mới'){
            $sql=' SELECT * FROM `movies` WHERE 1 LIMIT 10 ';
            $movie_results = DB::select($sql);
            return view('search', ['movie_results' => $movie_results, 'value' => $value]);
        }
        if($value=='fm:Lẻ'){
            $sql=' SELECT * FROM `movies` WHERE `total_episodes` = 1 ';
            $movie_results = DB::select($sql);
            return view('search', ['movie_results' => $movie_results, 'value' => $value]);
        }
        if($value=='fm:Bộ'){
            $sql=' SELECT * FROM `movies` WHERE `total_episodes` > 1 ';
            $movie_results = DB::select($sql);
            return view('search', ['movie_results' => $movie_results, 'value' => $value]);
        }
        if($value=='trailer'){
            $sql=' SELECT * FROM `movies` WHERE `source_movie` IS NULL AND `source_trailler` IS NOT NULL ';
            $movie_results = DB::select($sql);
            return view('search', ['movie_results' => $movie_results, 'value' => $value]);
        }
        $search_type=substr($value, 0, 3);
        $search_type= rtrim($search_type,":");
        $search_value=substr($value, 3);
        $search_value= ltrim($search_value,":");
        if($search_type=='tl'){
            $sql=' SELECT * FROM `movies` WHERE `category` LIKE \'%'.$search_value.'%\' ';
            $movie_results = DB::select($sql);
            return view('search', ['movie_results' => $movie_results, 'value' => $value]);
        }
        if($search_type=='qg'){
            $sql=' SELECT * FROM `movies` WHERE `nation` LIKE \'%'.$search_value.'%\' ';
            $movie_results = DB::select($sql);
            return view('search', ['movie_results' => $movie_results, 'value' => $value]);
        }
        if($search_type=='nph'){
            $sql=' SELECT * FROM `movies` WHERE `release_year` LIKE \'%'.$search_value.'%\' ';
            $movie_results = DB::select($sql);
            return view('search', ['movie_results' => $movie_results, 'value' => $value]);
        }

    }

    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'search_type' => 'required'
        ]);
        $value=$request->search_type;
        $sql=' SELECT * FROM `movies` WHERE `movie_name` LIKE \'%'.$value.'%\' ';
        $movie_results = DB::select($sql);
        return view('search', ['movie_results' => $movie_results, 'value' => 'tk:TỪ KHÓA: '.$value]);
    }
}