<?php

use App\User;

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

// Admin
Route::group(['prefix'=>"dashboard/{locale?}/"], function() {

    Route::get('', 'DashboardController@index')->name('dashboard.index');

    // Settings
    Route::get('configuracion', 'DashboardController@settings')->name('dashboard.settings');

    // Profile
    Route::get('perfil', 'DashboardController@profile')->name('dashboard.profile');


    Route::get('timetable', 'DashboardController@timetable')->name('dashboard.timetable');

    // User
    Route::prefix("empleado/")->group(function() {
        // https://dominbio.com/admin/user/create-user
        Route::get('create-user', 'UsersController@create')->name('admin.user.create');
    });

    // Menú


    // Publish

});

// Public
Route::get('/', 'UsersController@list')->name('web.home');
