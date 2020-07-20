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

Route::get('/', 'HomeController@index')->name('home');//urlに何もないとき（/だけの時）に表示

Route::group(['prefix' => 'admin'], function () { //urlがadmin/から始まるもの
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});    
    
    
  


?>