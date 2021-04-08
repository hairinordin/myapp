<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\UsermanagementController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\FilmController;

Route::get('/about',function(){
    return "Ini Page about";
});

Route::get('test',[TestController::class,'index']);
Route::get('test/hello/hai/saya',[TestController::class,'hello']);
Route::get('about/index',[AboutController::class,'index'])->name('about-index');
Route::get('management',[UsermanagementController::class,'management']);
Route::get('about/say/{name}/{age?}',[AboutController::class,'say']);
Route::get('welcome',[AboutController::class,'welcome']);
Route::get('test_view/{name}/{age}',[AboutController::class,'test_view']);

Route::resource('car',CarController::class);
Route::get('getcar',[CarController::class,'getCar']);

Route::get('dashboard',[DashboardController::class,'index']);
Route::get('check_db',[TestController::class,'check_db']);

Route::get('get_language',[TestController::class,'get_language']);
Route::get('get_rental',[TestController::class,'get_rental']);

Route::resource('rental',RentalController::class);
Route::resource('film',FilmController::class);
// Route::get('test','TestController@index');
