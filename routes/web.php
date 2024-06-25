<?php

use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Admin atau backend
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
//     Route::get('/', function(){
//         return view('admin.index');
//     });
//     // Route selanjutnya...
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('shop', [FrontController::class, 'shop']);
Route::get('pages', [FrontController::class, 'pages']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('blog', [FrontController::class, 'blog']);
Route::get('privacy', [FrontController::class, 'privacy']);
Route::get('terms', [FrontController::class, 'terms']);
Route::get('faq', [FrontController::class, 'faq']);
Route::get('user', [FrontController::class, 'user']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    //untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UsersController::class);
});
