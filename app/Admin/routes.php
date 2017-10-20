<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/movie', 'MovieController@index');
    $router->post('/movie', 'MovieController@index');
    $router->get('/movie/create', 'MovieController@create');
    $router->resource('movie', MovieController::class);
});
