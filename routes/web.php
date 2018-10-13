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


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('clients', 'clientsController');

Route::resource('clients', 'clientsController');

Route::resource('quotes', 'quotesController');

Route::resource('clients', 'clientsController');

Route::resource('customers', 'customersController');

Route::resource('jobs', 'jobsController');

Route::resource('vehicleTypes', 'vehicleTypeController');

Route::resource('vehicleCoverages', 'vehicleCoverageController');

Route::resource('coverages', 'coveragesController');

Route::resource('requests', 'requestsController');

Route::resource('advertisers', 'advertisersController');

Route::resource('cjobs', 'cjobsController');

Route::resource('statuses', 'statusesController');