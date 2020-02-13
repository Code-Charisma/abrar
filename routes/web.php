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
    return view('welcome');
});
Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'BackendController@index')->name('home');

    //About us
    Route::get('/about/backend/page/view','AboutController@aboutPageView');
    Route::post('/add/about/details','AboutController@addAboutDetails');

    //Product Category
    Route::get('category/backend/page/view','CategoryController@categoryPageView');
    Route::post('/add/new/category','CategoryController@addNewCategory');
    Route::get('/get/category/name/{id}/edit','CategoryController@getCategoryName');
    Route::post('edit/category/name','CategoryController@editCategoryName');
    Route::get('/delete/category/{id}','CategoryController@deleteCategory');

    //Banner Poster
    Route::get('/banner/poster/page/view','BannerController@homePageView');
    Route::get('/add/banner/page','BannerController@addBannerPage');
    Route::post('/add/new/banner','BannerController@addNewBanner');
    Route::get('/edit/banner/page/{id}','BannerController@editBannerPage');
    Route::post('/edit/banner','BannerController@editBanner');
    Route::get('/delete/banner/{id}','BannerController@deleteBanner');

    //Poster
    Route::post('/add/new/poster','BannerController@addNewPoster');
    Route::get('/delete/poster/{id}','BannerController@deletePoster');
    Route::get('get/poster/link/for/modal/{id}/edit','BannerController@getPosterLinkForModal');
    Route::post('edit/poster/link/by/modal','BannerController@editPosterLink');
});

//Frontend Routes
Route::get('/','FrontendController@index');
Route::get('/about/page/frontend/view','FrontendController@aboutPageView');
