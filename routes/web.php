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

Route::get('/', "DashboardController@view");

Route::get('/inputdata','dashboardController@inputdata');