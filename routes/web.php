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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::any('{slug}', function(){

    return view('welcome');
});


    // Route::post('app/create_tag', 'AdminController@addTag');
    // Route::get('app/get_tags', 'AdminController@getTag');
    // Route::post('app/edit_tag', 'AdminController@editTag');
    // Route::post('app/delete_tag', 'AdminController@deleteTag');
    // Route::post('app/upload', 'AdminController@upload');


    Route::prefix('app')->group(function(){
        Route::post('/create_tag', 'AdminController@addTag');
        Route::get('/get_tags', 'AdminController@getTag');
        Route::post('/edit_tag', 'AdminController@editTag');
        Route::post('/delete_tag', 'AdminController@deleteTag');
        Route::post('/upload', 'AdminController@upload');
        Route::post('/delete_image', 'AdminController@deleteImage');
        Route::post('/create_category', 'AdminController@addCategory');
        Route::get('/get_category', 'AdminController@getCategory');
        Route::post('/edit_category', 'AdminController@editCategory');
        Route::post('/delete_category', 'AdminController@deleteCategory');

    });