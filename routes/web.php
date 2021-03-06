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

// // Route::get('/about', function () {
// // 	$nama = 'Kintil asu';
// // 	return view('index', ['nama' => $nama]);
// // });

Route::get ('/', function (){
	return view('welcome');
});

Route::get ('/user', function (){
	return view('user');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/', "dashboardController@view");

	Route::get('/welcomesiswa', "DosenController@view");

	Route::get('/inputDosbing', 'DosenController@inputdata');

	Route::post('/storeDosbing', 'DosenController@store');

	Route::get('/deleteDosbing/{id}', 'DosenController@delete');

	Route::get('/user','dashboardController@index');

	Route::get('/editdata/{id}','dashboardController@editdata');

	Route::get('/inputdata', 'dashboardController@inputdata');

	Route::get('/delete/{id}', 'dashboardController@delete'); 

	Route::post('/edit/{id}', 'dashboardController@update');

	Route::post('/store', 'dashboardController@store');


Route::get('/siswa/export_excel', 'SiswaController@export_excel');

 });
