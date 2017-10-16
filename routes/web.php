<?php

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
    return view('home.home');
});

//Route::get('/file', function () {
//    return view('home.pdf');
//});

Route::get('/phpinfo', function () {
    echo phpinfo();
});

//Route::get('home/{name?}', function($name = null)
//{
//    return $name;
//})
//    ->where('name', '[A-Za-z]+');

//Route::get('/home', 'Home\HomeController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/web', 'Home\HomeController@home')->name('web');
Route::get('/tool', 'Home\HomeController@home')->name('tool');
Route::get('/concept', 'Home\HomeController@home')->name('concept');
Route::get('/math', 'Home\HomeController@home')->name('math');
Route::get('/communicate', 'Home\HomeController@home')->name('communicate');
Route::get('/lab', 'Home\HomeController@home')->name('lab');
Route::get('/discuss', 'Home\HomeController@home')->name('discuss');

Route::get('/ebay', 'Home\HomeController@ebay');
