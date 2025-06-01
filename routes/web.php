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
    return view('welcome');
});

// get list of orders - only admins
Route::get('/pizzas', 'PizzaController@index')->middleware('auth');
// create new orders - customers
Route::get('/pizzas/create', 'PizzaController@create');
// get an order - only admins
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth');
// sumbit order
Route::post('/pizzas', 'PizzaController@store');
// update an order - only admins
Route::patch('/pizzas/{id}', 'PizzaController@update')->middleware('auth');
// complete an order - only admins
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->middleware('auth');
Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
