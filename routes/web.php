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

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->get('/admin', ['as' => 'admin', 'uses' => 'AdminController@show']);
$app->get('/admin/add', ['as' => 'admin.add', 'uses' => 'AdminController@add']);
$app->get('/admin/sales', ['as' => 'admin.sales', 'uses' => 'SalesController@list']);
$app->post('/products/add', ['as' => 'products.create', 'uses' => 'ProductController@create']);

$app->get('/products', ['uses' => 'ProductController@list']);
$app->post('/pay', ['uses' => 'SalesController@pay']);