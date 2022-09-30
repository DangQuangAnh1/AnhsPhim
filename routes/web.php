<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login',[UserController::class, 'show_login']);

Route::get('/regist',[UserController::class, 'show_regist']);

Route::post('/', [UserController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'regist'])->name('regist');

Route::get('/',[WelcomeController::class, 'index']);

Route::get('/search', [SearchController::class, 'index']);

Route::get('/search/{value}', [SearchController::class, 'show'])->name('show');

Route::post('/search', [SearchController::class, 'search'])->name('search');

Route::get('/admin', [AdminController::class, 'index']);

Route::post('/admin', [AdminController::class, 'upload'])->name('upload');

Route::get('/watch', [MovieController::class, 'index']);

Route::get('/watch/{movie_id}', [MovieController::class, 'show']);

Route::post('/watch/{movie_id}', [MovieController::class, 'add'])->name('add');

Route::get('/watch_movie/{movie_id}', [MovieController::class, 'watch']);

Route::get('/watch_trailer/{movie_id}', [MovieController::class, 'trailer']);

Route::get('/ql_user', [AdminController::class, 'show_users']);

Route::post('/ql_user', [AdminController::class, 'user'])->name('edit_user');

Route::get('/ql_movie', [AdminController::class, 'show_movies']);

Route::post('/ql_movie', [AdminController::class, 'movie'])->name('edit_movie');

Route::get('/ql_feed', [AdminController::class, 'show_feeds']);

Route::post('/ql_feed', [AdminController::class, 'feed'])->name('edit_feed');