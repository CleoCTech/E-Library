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


Auth::routes();

Route::get('/', 'HomeController@index');
//Route::get('/home', 'PagesController@home');
Route::get('/agriculture', 'PagesController@agriculture');

Route::get('/science', 'PagesController@science');

Route::get('/arts', 'PagesController@arts');

Route::get('/business', 'PagesController@business');
Route::get('/profile', 'PagesController@profile');
Route::get('/search-results/{id}/{name}', 'PagesController@search');

Route::get('/education', 'PagesController@education');
Route::get('/findDepartments', 'DepartmentsController@findDepartments');
Route::get('/login-redirect', 'Auth\LoginController@loginRedirect');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::prefix('admin')->group(function(){
	// Route::get('/login', 'AdminLoginController@showLoginform')->name('admin.login');
	// Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
	 //Route::get('/', 'AdminController@index')->name('admin.dashboard');
	// Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout'); 
	Route::get('/', 'AdminController@index');
	Route::get('/users', 'AdminController@users');
	Route::get('/roles', 'AdminController@roles');
	Route::get('/create', 'AdminController@create');
	 Route::get('/destroy{id}', 'AdminController@destroy1');
});
Route::resource('posts', 'PostsController');
Route::resource('admin', 'AdminController');
Route::resource('fuculties', 'FucultiesContoller');
Route::resource('departments', 'DepartmentsController');


// Route::get('/departments', function () {
//     $faculty_id =Input::get('fuculty_id');
// });