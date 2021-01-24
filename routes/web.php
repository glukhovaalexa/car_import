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

Route::get('/', 'MainController@index')->name('index');
Route::get('/product/{id}', 'MainController@product')->name('product');
Route::get('/bookmark-add/{id}', 'BookmarkController@add')->name('bookmark.add');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/logout', 'ProfileController@logout')->name('logout');

Route::get('/profile/propositions', 'PropositionController@show')->name('proposition.show');
Route::get('/profile/bookmarks', 'BookmarkController@show')->name('bookmark.show');


Route::get('/admin', 'Admin\AdminController@index')->name('admin');

