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

Route::get('/file', function () {
    return view('home.pdf');
});

Route::get('/phpinfo', function () {
    echo phpinfo();
});

//Route::get('home/{name?}', function($name = null)
//{
//    return $name;
//})
//    ->where('name', '[A-Za-z]+');

Route::get('/ebay', 'Home\HomeController@ebay');
Route::get('/amazon', 'Home\HomeController@amazon');
Route::get('/wish', 'Home\HomeController@wish');
Route::get('/aliexpress', 'Home\HomeController@aliexpress');
Route::get('/lazada', 'Home\HomeController@lazada');
Route::get('/joom', 'Home\HomeController@joom');
Route::get('/paytm', 'Home\HomeController@paytm');
Route::get('/shopee', 'Home\HomeController@shopee');
Route::get('/yahoo', 'Home\HomeController@yahoo');

Route::get('/php', 'Home\HomeController@php');
Route::get('/linux', 'Home\HomeController@linux');
Route::get('/apache', 'Home\HomeController@apache');
Route::get('/nginx', 'Home\HomeController@nginx');
Route::get('/mysql', 'Home\HomeController@mysql');
Route::get('/redis', 'Home\HomeController@redis');
Route::get('/mongo', 'Home\HomeController@mongo');
Route::get('/memcache', 'Home\HomeController@memcache');
Route::get('/vagrant', 'Home\HomeController@memcache');

Route::get('/csharp', 'Home\HomeController@csharp');
Route::get('/opencv', 'Home\HomeController@opencv');
Route::get('/docker', 'Home\HomeController@docker');
Route::get('/sphinx', 'Home\HomeController@sphinx');
Route::get('/github', 'Home\HomeController@github');
Route::get('/laravel', 'Home\HomeController@laravel');

Route::get('/paypal', 'Home\HomeController@paypal');

Route::get('/wechat', 'Wechat\WechatController@index')->name('wechat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home');
Route::get('/web', 'Web\WebController@index')->name('web');
Route::get('/tool', 'Tool\ToolController@index')->name('tool');
Route::get('/concept', 'Concept\ConceptController@index')->name('concept');
Route::get('/math', 'Math\MathController@index')->name('math');
Route::get('/communicate', 'Communicate\CommunicateController@index')->name('communicate');
Route::get('/lab', 'Lab\LabController@index')->name('lab');
Route::get('/discuss', 'Discuss\DiscussController@index')->name('discuss');
Route::get('/entertainment', 'Entertainment\EntertainmentController@index')->name('entertainment');

