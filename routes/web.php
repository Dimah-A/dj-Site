<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

//HOME
Route::get('/tabHome','HomeController@index')->name('tabHome');
Route::post('/saveH','HomeController@store')->name('saveH');
Route::get('/deleteH/{id}', 'HomeController@destroy')->name('deleteH');

// Route::get('/pageModifA','AlbumController@index' )->name('modifA');
// Route::get('/addAlbum','AlbumController@create' )->name('addAlbum');
// Route::post('/save','AlbumController@store')->name('save');
// Route::get('/delete/{id}', 'AlbumController@destroy')->name('delete');
// Route::get('/editAlbum/{id}','AlbumController@edit')->name('edit');
// Route::post('/updatealbum/{id}','AlbumController@update' )->name('update');
// Route::get('/show_album/{id}', 'AlbumController@show')->name('show_album');