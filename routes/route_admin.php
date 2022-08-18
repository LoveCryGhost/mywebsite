<?php
//Member
use Illuminate\Support\Facades\Route;

// 生成 Dashboard
//使用Session必須寫在 ['middleware' => ['web']內部
Route::group(['middleware' => ['web']], function () {
    Route::prefix('')->middleware('auth:admin')->namespace('App\Http\Controllers\Admin')->group( function() {
        Route::prefix('admin')->name("admin.")->group(function () {
            Route::resource('dashboard', 'AdminDashboardController');


            Route::resource('settings', 'AdminSettingsController');
            Route::post('settings@initialize_all_db_to_google_to_db', 'AdminSettingsController@initialize_all_db_to_google_to_db')->name('settings.initialize_all_db_to_google_to_db');
            Route::post('settings@initialize_all_google_to_db', 'AdminSettingsController@initialize_all_google_to_db')->name('settings.initialize_all_google_to_db');

            Route::get('tutorial_tabs@index', 'AdminTutorialTabsController@index')->name('tutorial_tabs@index');
            Route::post('tutorial_tabs@tutorial_post', 'AdminTutorialTabsController@TutorialPost')->name('tutorial_tabs@tutorial_post');

//            Route::resource('google_sheets', 'AdminGoogleSheetsController');
//            Route::resource('google_balance_sheets', 'AdminGoogleBalanceSheetsController');
//            Route::get('google_balance_sheets@export', 'AdminGoogleBalanceSheetsController@export')->name("google_balance_sheets@export");

            Route::crudResource('admin', 'AdminAdminsController');

        });
    });
});

