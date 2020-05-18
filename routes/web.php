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

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'PagesController@home');
Route::get('/agriculture', 'PagesController@agriculture');

Route::get('/science', 'PagesController@science');

Route::get('/arts', 'PagesController@arts');

Route::get('/business', 'PagesController@business');

Route::get('/education', 'PagesController@education');
Route::get('/findDepartments', 'DepartmentsController@findDepartments');

Route::resource('posts', 'PostsController');
Route::resource('fuculties', 'FucultiesContoller');
Route::resource('departments', 'DepartmentsController');


// Route::get('/departments', function () {
//     $faculty_id =Input::get('fuculty_id');
// });