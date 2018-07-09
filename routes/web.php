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
Route::middleware(['auth'])->group(function () {

Route::get('/', ['middleware'=>'role:superadmin,admin', function () { 
	return view('index'); 
}])->name('index');
Route::get('/charts', ['middleware'=>'role:superadmin,admin', function () { 
	return view('charts'); 
}])->name('charts');
Route::get('/tables', ['middleware'=>'role:superadmin,manager', function () { 
	return view('tables'); 
}])->name('table');
Route::get('/navbar', function () { 
	return view('navbar'); 
})->name('navbar');
Route::get('/cards', function () { 
	return view('cards'); 
})->name('cards');
Route::get('/map','MapController@index')->name('map')->middleware('role:superadmin,admin');
Route::post('/map','MapController@addMarker')->name('map')->middleware('role:superadmin,admin');
Route::get('/home',function(){
	return view('home');
});



});


Auth::routes();


