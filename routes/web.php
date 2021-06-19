<?php

use App\Http\Controllers\HomeController;
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
    return view('home');
});

Auth::routes();
Route::prefix('')->middleware('auth')->group(function(){
    Route::get('/profile', 'ProfileController@index')->name('profile');

    Route::get('/diarie', 'DiarieController@index')->name('diarie');
    Route::post('/diarie/store', 'DiarieController@store')->name('diarie');

    Route::get('/posts', 'PostController@index')->name('post');
    Route::post('/post/store', 'PostController@store')->name('post');

    Route::get('/group', 'GroupController@index')->name('group');
    Route::post('/group/store', 'GroupController@store')->name('group');

    Route::get('/lesson', 'LessonController@index')->name('lesson');
    Route::post('/lesson/store', 'LessonController@store')->name('lesson');

});

