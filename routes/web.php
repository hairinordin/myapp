<?php

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

//default root route
Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-view', function () {
    return view('test.welcome');
});

Route::get('/hello',function(){
    return "Hai, Saya Farid";
});

Route::get('/hello-hai',function(){
    return "Hai, Hello World!!";
});

Route::get('/user/{id}/{name}',function($id,$name){
    return "User ".$id."| name:".$name;
})->name('user-get');

Route::get('/user-test/{title}',function($title = null){
    return "title:  ".$title;
});

Route::prefix('admin')->group(function(){
    Route::get('test-admin',function(){
        return "Hai, Ini page admin";
    });
});

Route::prefix('user')->group(function(){
    Route::get('test-admin',function(){
        return "Hai, Ini page user";
    });
});
