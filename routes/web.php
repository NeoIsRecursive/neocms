<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Post\AllPostsController;
use App\Http\Controllers\Post\NewPostController;
use App\Http\Controllers\Post\SinglePostController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index');
Route::get('/posts', AllPostsController::class);
Route::get('/post/{post:slug}', SinglePostController::class);

Route::group(['middleware' => ['guest']], function () {
    Route::view('/login', 'auth.login');
    Route::post('/login', LoginController::class);
    Route::view('/register', 'auth.register');
    Route::post('/register', RegisterController::class);
    Route::get('/logout', LogoutController::class);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', AdminController::class);
    Route::view('/new_post', 'admin.post.new');
    Route::post('/new_post', NewPostController::class);
});
