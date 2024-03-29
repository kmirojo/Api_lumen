<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$app->group(['prefix'=>'api/v1'], function() use($app){
    $app->get('/products', 'ProductController@index');
    $app->post('/product', 'ProductController@create');
    $app->get('/product/{id}', 'ProductController@show');
    $app->put('/product/{id}', 'ProductController@update');
    $app->delete('/product/{id}', 'ProductController@destroy');
});
