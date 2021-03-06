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
Route::get('/photoall', 'MainController@photoall')->name('photoall');
Route::get('/videoall', 'MainController@videoall')->name('videoall');
Route::get('/solonews{solo}', 'MainController@solonews')->name('solonews');


Route::post('/footerform', 'MainController@footerform');

// regions
Route::get('/center', 'MainController@p_center')->name('center');
Route::get('/daliniyvostok1', 'MainController@dvos1')->name('dvos1');
Route::get('/daliniyvostok2', 'MainController@dvos2')->name('dvos2');
Route::get('/privoljsk', 'MainController@privol')->name('privol');
Route::get('/severo-zapad', 'MainController@sever')->name('sever');
Route::get('/severo-kavkaz', 'MainController@sibir')->name('sibir');
Route::get('/sibirkiy', 'MainController@sibirkiy')->name('sibirkiy');
Route::get('/uraliskiy', 'MainController@ural')->name('ural');
Route::get('/yg', 'MainController@yg')->name('yg');
Route::get('/obninsk', 'MainController@obninsk');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
