<?php

use App\User;

Route::group(['prefix'=>"dashboard/{locale?}/"], static function() {

    Route::get('', 'DashboardController@index')->name('dashboard.index');

    // Settings
    Route::get('configuracion', 'DashboardController@settings')->name('dashboard.settings');

    // Profile
    Route::get('perfil', 'DashboardController@profile')->name('dashboard.profile');


    Route::get('timetable', 'DashboardController@timetable')->name('dashboard.timetable');

    Route::get('team', 'DashboardController@team')->name('dashboard.team');

    // User
    Route::prefix("empleado/")->group(function() {
        // https://dominbio.com/admin/user/create-user
        Route::get('create-user', 'UsersController@create')->name('admin.user.create');
    });
});

// Public
Route::get('/', 'UsersController@list')->name('web.home');
