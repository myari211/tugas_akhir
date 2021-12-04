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

Route::get('/history', 'Guest\GuestController@history')->name('guest.history');
Route::get('/profile', 'Guest\GuestController@profile')->name('guest.profile');



Route::middleware('role:Admin')->group(function () {
    Route::get('/admin/{id}', 'Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/member_list/{id}', 'Admin\AdminController@member_list')->name('admin.member_list');
    Route::get('/admin/member/{id}', 'Admin\AdminController@member_details')->name('talent-list');
    Route::post('/admin/member_list/{id}', 'Admin\AdminController@create_member')->name('create_member');
    Route::get('/admin/campus/{id}', 'Admin\AdminController@campus')->name('campus');
    Route::post('/admin/campus/{id}', 'Admin\AdminController@campus_post')->name('campus_post');
    Route::post('/admin/campus/delete/{id}', 'Admin\AdminController@campus_delete')->name('campus_delete');
});

Route::middleware('role:User')->group(function () {
    Route::get('/user/{id}', 'User\UserController@dashboard')->name('user.dashboard');
    Route::get('/user/first_profile/personal_information/{id}', 'User\UserController@first_profile_personal_information')->name('talent.first_personal');
    Route::post('/use/first_profile/personal_information/{id}', 'User\UserController@first_profile_personal_post')->name('talent.first.post');
    Route::get('/user/first_profile/class_information/{id}', 'User\UserController@first_profile_class')->name('talent.class_information');


    //avatar
    Route::post('/user/first_profile/avatar/{id}', 'User\UserController@avatar')->name('avatar');
    Route::post('/user/first_profile/class_information/{id}', 'User\UserController@class_information')->name('class_information');
});

Route::get('/chain-city/{id}', 'Ajax\AjaxController@province');