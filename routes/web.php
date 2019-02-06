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

Route::get('/', 'MainController@main')->name('main');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/solonews{solo}', 'MainController@solonews')->name('solonews');


Route::post('/footerform', 'MainController@footerform');

// regions
Route::get('/center', 'MainController@p_center')->name('center');
Route::get('/daliniyvostok', 'MainController@dvos')->name('dvos');
Route::get('/privoljsk', 'MainController@privol')->name('privol');
Route::get('/severo-zapad', 'MainController@sever')->name('sever');
Route::get('/severo-kavkaz', 'MainController@sibir')->name('sibir');
Route::get('/sibirkiy', 'MainController@sibirkiy')->name('sibirkiy');
Route::get('/uraliskiy', 'MainController@ural')->name('ural');
Route::get('/yg', 'MainController@yg')->name('yg');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
