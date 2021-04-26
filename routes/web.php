<?php

use App\office;
use illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'officeController');

route::get('/search','searchcontroller@index');

route::get('/',function(){
    return view('home_bage');
});
route::get('index',function(){
    return view('index');
});
route::get('home_bage',function(){
    return view('home_bage');
});


route::get('register',function(){
    return view('register');
});














