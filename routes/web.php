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
    return  redirect()->route('profiles.index');
});

Route::resource('profiles', 'ProfileController',[
    'only' => ['store' , 'index' , 'create']
]);

Route::get('export', 'ProfileController@export')->name('export');
