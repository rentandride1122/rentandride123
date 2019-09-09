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
Route::get('/admin/logout','AdminController@logout')->name('admin.logout');
Route::get('/admin/profile','AdminController@profile')->name('admin.profile');
Route::post('/admin/change_password', 'AdminController@change_password')->name('change_password');

Route::get('/admin/view/users','AdminController@view_users')->name('admin.view_users');
Route::delete('/admin/user/delete','AdminController@delete_user')->name('admin.user_delete');

Route::get('/admin/car','CarController@addCar')->name('addcar');
Route::post('/admin/car','CarController@storeCar')->name('storecar');
Route::get('/admin/car/view','CarController@view_car')->name('admin.view_car');
Route::get('/admin/edit/car/{id}','CarController@edit_car')->name('admin.edit_car');
Route::put('/admin/car/update','CarController@update')->name('admin.update');
Route::delete('/admin/car/delete','CarController@delete')->name('admin.delete');
Route::get('/admin/view/private_cars','CarController@view_private_cars')->name('admin.view_private_car');


Route::get('/user/index','UserController@index')->name('user.index');
Route::get('/user/contact','UserController@contact')->name('user.contact');
Route::get('/user/about','UserController@about')->name('user.about');
Route::get('/user/forum','UserController@forum')->name('user.forum');
Route::post('/user/comment','UserController@comment')->name('user.comment');
Route::get('/user/car','UserController@view_car')->name('user.view_car');
Route::get('/user/private/car','UserController@view_private_car')->name('user.view_private_car');
Route::get('/user/rent_your_car','UserController@rent_your_car')->name('user.rent_your_car');
Route::post('/user/rent_your_car','UserController@store_your_car')->name('user.store_your_car');
Route::get('/user/login','UserController@login')->name('user.login');
Route::get('/user/register','UserController@register')->name('user.register');
Route::get('/user/logout','UserController@logout')->name('user.logout');


//Route::get('/', 'HomeController@index')->name('user');
//Route::get('/register','UserController@register')->name('user.register');
//Route::get('/login','UserController@login')->name('user.login');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin/reg', 'AdminController@reg')->name('reg');
// Route::post('/admin/reg', 'AdminController@regPost')->name('regPost');

//Route::get('/admin/log', 'AdminController@log')->name('log');
