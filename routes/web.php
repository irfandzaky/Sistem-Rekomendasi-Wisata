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

Auth::routes();

// Route::group(['middleware' => ['auth','checkRole:admin,user']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
// });

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
    Route::resource('abouts','AboutController');
    Route::resource('events','EventController');
    Route::resource('genres','GenreController');
    Route::resource('kegiatan','KegiatanController');
});

Route::group(['middleware' => ['auth','checkRole:user']], function(){
    Route::resource('preferences','PreferenceController');
    Route::resource('acara','EventUserController');
    Route::resource('distances','DistanceController');
    Route::resource('kegiatanUser','KegiatanUserController');
    Route::resource('popUpAbout','PopUpAboutController');
    Route::resource('post','PostController');
});

Route::post('/createpost',[
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create'
    ]);

Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete'
    ]);

Route::get('/tentang', function () {
    return view('wisatawan.tentangKami');
});




