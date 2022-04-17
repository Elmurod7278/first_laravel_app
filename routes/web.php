<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BananController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HumanController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::get('/ali/{id}', [UserController::class, 'showa']);


//Route::resource('elmurods',UserController::class);
//
//Route::get('/get-current-date-time-to-string-elmurod-qalaysan', function () {
//    echo date('Y-m-d');
//})->name('get-date');
//Route::post('/get-current-date-time-to-string-elmurod-qalaysan', function () {
//    echo 'Bu post';
//});
//Route::delete('/get-current-date-time-to-string-elmurod-qalaysan', function () {
//    echo 'Bu delete';
//});
//
//
//Route::get('/user/{id}', [UserController::class,'show']);
//
//Route::get('/say-hello/{name?}',[HelloController::class,'index']);
//Route::get('/say-hello/create/file',[HelloController::class,'create'])->name('hello.create');
//
//Route::get('/elm',function(){
//    $users=DB::table('users')->get();
//    return view('show',compact('users'));
//});
//Route::resource('humana',HumanController::class);
//Route::get('/fruits',[HelloController::class,'fruits'])->name('fruits');
//Route::get('/humans',[HumanController::class,'humans'])->name('humans');
Route::get('/banan/{banan}', [BananController::class, 'index']);

//Route::get('/news/{news}',[NewsController::class,'index']);

//Route::get('/news/create',[NewsController::class,'create'])->name('news.create');
//Route::post('/news/create',[NewsController::class,'store'])->name('news.store');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'storeRegister']);


Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'storeLogin']);
Route::get('/asosiy', [AuthController::class, 'asosiy'])->name('asosiy');


Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
//Route::get('/channels',[ChannelController::class,'index']);
//Route::get('post/create',[PostController::class,'create']);

Route::resource('company', CompanyController::class);







