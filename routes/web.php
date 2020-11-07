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
    return view('body_side');
});

Route::get('/AdminLogin', function () {
    return view('admin.admin_login');
});
Route::get('/AdminHome', function () {
    return view('admin.admin_index');
});

Route::resource('myUserInfo','UserInfoController');
Route::get('/get/all/myAdminUser','UserInfoController@getAllAdminUsers')->name('all.myAdminUser');

Route::resource('OurServices','OurServiceController');
Route::get('/get/all/myOurServices','OurServicesController@getAllOurServices')->name('all.myOurServices');

Route::resource('myMainMenu','MainMenuController');