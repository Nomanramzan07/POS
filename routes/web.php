<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function () {
    return view('admin.home');
});

// Route::get('/chat',function () {
//     return view('chat');
// });

Route::get('/redirect',[HomeController::class,'index']);

Route::get('/register',[HomeController::class,'reg_view']);
Route::post('/register',[HomeController::class,'register']);
Route::get('/login',[HomeController::class,'log_view']);
Route::post('/login',[HomeController::class,'login']);

Route::get('/item',[HomeController::class,'view_item']);
Route::post('/add_item',[HomeController::class,'add_item']);
Route::get('/sale',[HomeController::class,'view_sale']);
Route::post('/add_sale',[HomeController::class,'add_sale']);
// Route::post('/add_sale',[HomeController::class,'add_sale']);
Route::get('/add_product',[AdminController::class,'add_product']);
Route::get('/show_product',[AdminController::class,'show_product']);

Route::get('/test2',[AdminController::class,'test2']);
