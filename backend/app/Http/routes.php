<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Routing\Router;

// Routes for payment page and payment gateway
Route::get('/payment', 'PaymentController@page');
Route::post('/payment/process', 'PaymentController@process');
Route::post('/payment/gateway', 'PaymentController@gateway');

// Routes for JSON data from frontend
Route::group(['middleware' => 'cors'], function(Router $router){
    $router->get('/data/{project_name}/{id}', 'JSONController@returnJSON');
});

// Routes for admin interface
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/admin', 'FlatController@home');
Route::get('/admin/edit', 'FlatController@returnJSON');
Route::post('/admin/form', 'FlatController@formData');
Route::post('/admin/save', 'FlatController@save');

Route::get('/admin/home', 'FlatController@home');
Route::get('/admin/tower', 'FlatController@tower');
Route::post('/admin/tower', 'FlatController@updateTower');

Route::get('/admin/flat/{id}', 'FlatController@editFlat');

