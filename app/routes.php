<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});



Route::get('/store', array('as' => 'products.store', 'uses' => 'ProductsController@product_display'));



Route::resource('products', 'ProductsController');

Route::resource('people', 'PeopleController');

Route::resource('product_categories', 'Product_categoriesController');

Route::resource('companies', 'CompaniesController');