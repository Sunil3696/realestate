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

Route::get('/','FrontendController@index')->name('landing');
Route::get('/property_for_rent','FrontendController@property_for_rent')->name('property_for_rent');
Route::get('/property_for_sell','FrontendController@property_for_sell')->name('property_for_sell');
Route::post('/search','FrontendController@search')->name('search');
Route::get('view_detail/product{id}','FrontendController@view_detail')->name('view_detail');
Route::post('/feedback-submit','FeedbackController@feedback_submit')->name('feedback-submit');
Route::get('/about_us','FrontendController@IndexAbout')->name('about-us');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/verify', 'Auth\RegisterController@verifyUser')->name('verify_user');
Route::get('/test',function(){
    return view('layouts.admin-dashboard');
});


Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/','HomeController@admin')->name('admin');


    Route::get('/file-manager',function(){
        return view('admin.file-manager');
    })->name('file-manager');

    Route::get('/product-list','ProductController@list')->name('product-list');
    Route::get('/product-add',function(){
        return view('admin.product-add');
    })->name('product-add');

    Route::post('/product_submit','ProductController@submit')->name('product_submit');

    Route::get('ads_list','AdvertisementController@index')->name('ads_list');
    Route::get('ads-add',function(){
        return view('admin.ads-add');
    })->name('ads-add');
    Route::post('/ads_submit','AdvertisementController@ads_submit')->name('ads_submit');
    Route::get('destroy/del{id}','ProductController@destroy')->name('destroy');
    Route::get('/pedit/edit{id}','ProductController@pedit')->name('pedit');
    Route::post('/edit_update/update{id}','ProductController@Update')->name('edit_update');

    Route::get('/feed_back','FeedbackController@index')->name('Feed_back');
    Route::get('destroy_feeds/del{id}','FeedbackController@destroy_feeds')->name('destroy_feeds');
    Route::get('/about','aboutusController@index')->name('about');
    Route::post('/update_about','aboutusController@update')->name('update_about');

    Route::get('/edit_ads/edit{id}','AdvertisementController@edit_ads')->name('edit_ads');
    Route::post('/ads_update_submit/update{id}','AdvertisementController@update_ads')->name('ads_update_submit');
    Route::get('ads_delete/del{id}','AdvertisementController@destroy')->name('ads_delete');
});



Route::group(['prefix'=>'vendor','middleware'=>['auth','vendor']],function (){
    Route::get('/vendor','HomeController@vendor')->name('vendor');

    Route::post('/client_ads_submit','FrontendController@client_ads_submit')->name('client_ads_submit');
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


