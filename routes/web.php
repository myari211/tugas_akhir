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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function (){
    return view('guest.index');
});



Route::middleware('role:Admin')->group(function () {
    Route::get('/admin/{id}', 'Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/member_list/{id}', 'Admin\AdminController@member_list')->name('admin.member_list');
});

Route::middleware('role:User')->group(function () {
    Route::get('/user/{id}', 'User\UserController@dashboard')->name('user.dashboard');
    Route::get('/user/first_profile/personal_information/{id}', 'User\UserController@first_profile_personal_information')->name('talent.first_personal');
});

Route::get('/chain-city/{id}', 'Ajax\AjaxController@province');