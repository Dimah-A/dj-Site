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
Route::get('/', 'WelcomeController@index')->name('site');
Route::get('/admin', 'WelcomeController@admin')->name('admin'); 


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

//PROFIL
Route::get('/profil.index', 'ProfilController@index')->name('profil.index');
Route::get('/profil.edit', 'ProfilController@edit')->name('profil.edit');
Route::post('/profil.update/{id}','ProfilController@update' )->name('profil.update');
Route::post('/profil.save','ProfilController@store' )->name('profil.save');

//HOME
Route::get('/tabHome','HomeController@index')->name('tabHome');
Route::post('/saveH','HomeController@store')->name('saveH');
Route::get('/deleteH/{id}', 'HomeController@destroy')->name('deleteH');
Route::get('/editHome/{id}', 'HomeController@edit')->name('editHome');
Route::post('/updateHome/{id}','HomeController@update' )->name('updateHome');

//ABOUT
Route::get('/about.tab','AboutController@index')->name('about.tab');
Route::post('/about.save','AboutController@store')->name('about.save');
Route::get('/about.delete/{id}', 'AboutController@destroy')->name('about.delete');
Route::get('/about.edit/{id}', 'AboutController@edit')->name('about.edit');
Route::post('/updateAbout/{id}','AboutController@update' )->name('updateAbout');


//ALBUM
Route::get('/album.tab','AlbumController@index')->name('album.tab');
Route::post('/album.save','AlbumController@store')->name('album.save');
Route::post('/updateAlbum/{id}','AlbumController@update' )->name('updateAlbum');
Route::get('/album.delete/{id}', 'AlbumController@destroy')->name('album.delete');
Route::get('/album.edit/{id}', 'AlbumController@edit')->name('album.edit');

//PLAYLIST

Route::get('/playlist.tab','PlaylistController@index')->name('playlist.tab');
Route::post('/playlist.save','PlaylistController@store')->name('playlist.save');
Route::post('/updateplaylist/{id}','PlaylistController@update' )->name('updateplaylist');
Route::get('/playlist.delete/{id}', 'PlaylistController@destroy')->name('playlist.delete');
Route::get('/playlist.edit/{id}', 'PlaylistController@edit')->name('playlist.edit');



// Route::get('/pageModifA','AlbumController@index' )->name('modifA');
// Route::get('/addAlbum','AlbumController@create' )->name('addAlbum');
// Route::post('/save','AlbumController@store')->name('save');
// Route::get('/delete/{id}', 'AlbumController@destroy')->name('delete');
// Route::get('/editAlbum/{id}','AlbumController@edit')->name('edit');
// Route::post('/updatealbum/{id}','AlbumController@update' )->name('update');
// Route::get('/show_album/{id}', 'AlbumController@show')->name('show_album');
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
