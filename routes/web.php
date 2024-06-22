<?php

use App\Http\Controllers\FrontController;
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
