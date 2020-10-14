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
    Route::get('team/listado', 'TeamController@listado')->name('team.listado');
    Route::get('team/detalle', 'TeamController@detalle')->name('team.detalle');
    Route::get('team/departamentos', 'TeamController@departamentos')->name('team.departamentos');
    Route::get('team/organigrama', 'TeamController@organigrama')->name('team.organigrama');

    // User
    Route::prefix("empleado/")->group(function() {
        // https://dominbio.com/admin/user/create-user
        Route::get('create-user', 'UsersController@create')->name('admin.user.create');
    });

    // Events
    Route::prefix("events")->group(function() {
        Route::get('',      'EventsController@index')->name('dashboard.events.index');
        Route::get('/{id}', 'EventsController@show')->name('dashboard.events.show');
    });

    // Tasks
    Route::prefix("tasks")->group(function() {
        Route::get('',      'TasksController@index')->name('dashboard.tasks.index');
        Route::get('/{id}', 'TasksController@show')->name('dashboard.tasks.show');
    });
});

// Public
Route::get('/', 'UsersController@list')->name('web.home');
