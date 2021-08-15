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

// // Route::namespace('frontEnd')->prefix('d')->group(function ()
// // {
// //    Route::get('users','usersCtrl@index'); 
// //    Route::get('moms','momsCtrl@index');
// // });

// Route::group(['prefix'=>'d','namespace'=>'frontEnd'],function ()
// {
//     Route::get('users','usersCtrl@index'); 
//    Route::get('moms','momsCtrl@index')->name('moms');
// });

// Route::resource('news','newsCtrl');

Route::group(['namespace'=>'frontEnd'],function ()
{
   Route::get('landing','landingController@getIndex'); 
});


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
