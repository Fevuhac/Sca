<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['namespace' => 'Frontend'], function()
{	
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('/diem-nhan.html', ['as' => 'diem-nhan', 'uses' => 'HomeController@diemNhan']);
    Route::get('/su-kien-iphone-xs-max.html', ['as' => 'iphone', 'uses' => 'HomeController@iphone']);
    Route::get('/tranh-tai-150-trieu.html', ['as' => 'tranh-tai', 'uses' => 'HomeController@tranhTai']);
    Route::get('/ban-ca-cuc-vui.html', ['as' => 'ban-ca', 'uses' => 'HomeController@banCa']);
    Route::get('/su-kien-hot.html', ['as' => 'su-kien-hot', 'uses' => 'HomeController@suKienHot']);
    Route::get('/thuong-game-khung.html', ['as' => 'thuong-game-khung', 'uses' => 'HomeController@thuongGameKhung']);
    Route::get('/co-cau-giai.html', ['as' => 'co-cau-giai', 'uses' => 'HomeController@coCauGiai']);
    Route::get('/the-le.html', ['as' => 'the-le', 'uses' => 'HomeController@theLe']);
    Route::get('/huong-dan.html', ['as' => 'huong-dan', 'uses' => 'HomeController@huongDan']);
    Route::get('/lien-he.html', ['as' => 'contact', 'uses' => 'HomeController@contact']);
    Route::get('/get-content', ['as' => 'get-content', 'uses' => 'HomeController@getContent']);
    Route::get('/check-no', ['as' => 'check-no', 'uses' => 'HomeController@checkNo']);
	Route::get('/dang-ky-nhan-so.html', ['as' => 'dang-ky', 'uses' => 'HomeController@dangKy']);
    Route::post('/send-contact', ['as' => 'send-contact', 'uses' => 'HomeController@sendContact']);
	Route::post('/send-contact-2', ['as' => 'send-contact-2', 'uses' => 'HomeController@sendContact2']);
    Route::post('/send-contact-3', ['as' => 'send-contact-3', 'uses' => 'HomeController@sendContact3']);
});

