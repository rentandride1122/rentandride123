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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin/login','AdminController@login')->name('admin.login');
Route::post('/admin/login', 'AdminController@loginProcess')->name('loginPost');
Route::get('/admin/index','AdminController@index')->name('admin.index');
Route::get('/admin/logout','AdminController@logout')->name('user.logout');
Route::get('/admin/profile','AdminController@profile')->name('admin.profile');
Route::post('/admin/change_password', 'AdminController@change_password')->name('change_password');


Route::get('/admin/car','CarController@addCar')->name('addcar');
Route::post('/admin/car','CarController@storeCar')->name('storecar');
Route::get('/admin/car/view','CarController@view_car')->name('admin.view_car');
Route::get('/admin/edit/car/{id}','CarController@edit_car')->name('admin.edit_car');
Route::put('/admin/car/update','CarController@update')->name('admin.update');
Route::delete('/admin/car/delete','CarController@delete')->name('admin.delete');


Route::get('/', 'HomeController@index')->name('user');
Route::get('/register','UserController@register')->name('user.register');
Route::get('/login','UserController@login')->name('user.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin/reg', 'AdminController@reg')->name('reg');
// Route::post('/admin/reg', 'AdminController@regPost')->name('regPost');

//Route::get('/admin/log', 'AdminController@log')->name('log');
