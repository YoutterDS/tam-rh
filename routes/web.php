<?php

use App\User;

Route::group(['prefix'=>"dashboard/{locale?}/"], static function() {

    Route::get('', 'DashboardController@index')->name('dashboard.index');

    // Settings
    Route::get('configuracion', 'DashboardController@settings')->name('dashboard.settings');

    // Profile
    Route::get('perfil', 'DashboardController@profile')->name('dashboard.profile');


    Route::get('timetable', 'DashboardController@timetable')->name('dashboard.timetable');
    Route::get('documents', 'DashboardController@documents')->name('dashboard.documents');

    /* TEAM */
    Route::get('team/new', 'TeamController@new')->name('team.new');
    Route::get('team/new-dpt', 'TeamController@departamentosNew')->name('team.new-dpt');
    Route::get('team/listado', 'TeamController@listado')->name('team.listado');
    Route::get('team/detalle', 'TeamController@detalle')->name('team.detalle');
    Route::get('team/detalle-dpt', 'TeamController@departamentosDetalle')->name('team.detalle-dpt');
    Route::get('team/departamentos', 'TeamController@departamentos')->name('team.departamentos');
    Route::get('team/organigrama', 'TeamController@organigrama')->name('team.organigrama');

    // User
    Route::prefix("empleado/")->group(function() {
        // https://dominbio.com/admin/user/create-user
        Route::get('create-user', 'UsersController@create')->name('admin.user.create');
    });
});

// Public
Route::get('/', 'UsersController@list')->name('web.home');
