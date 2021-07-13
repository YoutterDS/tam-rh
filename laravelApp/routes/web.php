<?php

use App\Models\Bank;

// Controllers
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\EventsController;
use \App\Http\Controllers\CalendarController;
use \App\Http\Controllers\EmployerController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\PreregisterController;
use \App\Http\Controllers\SubscriptionController;

Auth::routes(['verify' => true]);

Route::get('/', function(){
    return "...";
});

// Email Verification
Route::get('/email/verify/{id}/{hash}', [UserController::class, 'emailVerificationRequest'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/verify', [UserController::class, 'emailVerification'])->middleware('auth')->name('verification.notice');

Route::group(['prefix'=>"dashboard/{locale?}/", 'middleware' => ['auth','verified']], static function() {

    /* HOME */
    Route::get('', [DashboardController::class, 'index'])->name('dashboard.index');

    /* SETTINGS */
    Route::get('configuracion/', [DashboardController::class, 'settings'])->name('dashboard.settings');

    /* PROFILE */
    Route::get('perfil/', [DashboardController::class, 'profile'])->name('dashboard.profile');

    /* TIMETABLE */
    Route::prefix("timetable/")->group(function() {
        Route::get('', [DashboardController::class, 'timetable'])->name('dashboard.timetable');
        // Route::get('detail', [DashboardController::class, 'timetableDetail'])->name('dashboard.timetable.detail');
    });

    /* DOCUMENTS */
    Route::get('documents', [DashboardController::class, 'documents'])->name('dashboard.documents');

    /* EMPLOYEES */
    Route::prefix("employees/")->group(function() {
        Route::get('', [EmployerController::class, 'index'])->name('dashboard.employees.index');
        Route::get('listado', [EmployerController::class, 'listado'])->name('dashboard.employees.list');

        // Antigues rutes.
        // Route::get('new', [EmployerController::class, 'new'])->name('dashboard.employees.new');
        // Route::get('detalle', [EmployerController::class, 'detalle'])->name('dashboard.employees.detalle');
        // Route::get('departamentos', [EmployerController::class, 'departamentos'])->name('dashboard.employees.departments');
        // Route::get('organigrama', [EmployerController::class, 'organigrama'])->name('dashboard.employees.organigrama');
    });

    /* EVENTS */
    Route::prefix("events/")->group(function() {
        Route::get('', [EventsController::class, 'organigindexrama'])->name('dashboard.events.index');
        Route::get('{id}', [EventsController::class, 'show'])->name('dashboard.events.show');
    });

    /* TASKS */
    Route::prefix("tasks/")->group(function() {
        Route::get('', [TaskController::class, 'index'])->name('dashboard.tasks.index');
        Route::get('{id}', [TaskController::class, 'show'])->name('dashboard.tasks.show');
    });

    /* CALENDAR */
    Route::prefix("calendario/")->group(function() {
        Route::get('', [CalendarController::class, 'index'])->name('dashboard.calendar.index');
    });

    /* SUBSCRIPTIONS */
    Route::prefix("subscripcion/")->group(function() {
        Route::get('', [SubscriptionController::class, 'index'])->name('dashboard.subscription.index');
        /*
        Route::get('create', function(){
            $user = Company::find(2);
            $plan = app('rinvex.subscriptions.plan')->find(3);

            $user->newSubscription('main', $plan);
        });
        */
    });
});

Route::group(['prefix'=>"register/{package}/{locale?}/"], static function() {
    Route::get('', [UserController::class, 'register'])->name('user.register');
});

Route::group(['prefix'=>"pre-register/{locale?}/"], static function() {
    Route::get('', [PreregisterController::class, 'index'])->name('preregister.index');
    Route::post('send-form', [PreregisterController::class, 'registerSave'])->name('preregister.send-form');
    Route::get('legal', [PreregisterController::class, 'legal'])->name('preregister.legal');
    Route::get('cookies', [PreregisterController::class, 'cookies'])->name('preregister.cookies');
});
