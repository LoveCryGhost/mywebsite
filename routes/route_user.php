<?php

//User
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::prefix("")->namespace('App\Http\Controllers\User')->name("user.")->group(function() {
        Route::prefix('')->middleware('auth:web')->group(function () {
            Route::resource('dashboard', 'UserDashboardController');

//            Route::resource('users', 'UserUsersController');
//            Route::get('/users/{user}/followings', 'UserUsersController@followings')->name('users.followings');
//            Route::get('/users/{user}/followers', 'UserUsersController@followers')->name('users.followers');
//            Route::get('/users/{user}/change_password', 'UserUsersController@changePassword')->name('users@change_password');
//            Route::post('/users/{user}/save_password', 'UserUsersController@savePassword')->name('users@save_password');
//
//            Route::post('/users/followers/{user}', 'UserFollowersController@store')->name('followers.store');
//            Route::delete('/users/followers/{user}', 'UserFollowersController@destroy')->name('followers.destroy');
//
//            Route::resource('articles', 'UserArticlesController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
//            Route::get('articles@show_user_articles_or_replies/{user}', 'UserArticlesController@showUserArticlesOrReplies')->name('articles@show_user_articles_or_replies');
//
//            Route::get('articles/{article}/{slug?}', 'UserArticlesController@show')->name('articles.show');
//            Route::post('articles@upload_image', 'UserArticlesController@uploadImage')->name('articles@upload_image');
//            Route::resource('article_categories', 'UserArticleCategoriesController', ['only' => ['show']]);
//
//            Route::resource('article_replies', 'UserArticleRepliesController')->only(["store","destroy"]);
//
//            Route::resource('notifications', 'UserNotificationsController', ['only' => ['index']]);
        });

        // auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
        Route::group(['middleware' => ['auth', 'verified']], function() {
//            Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
//            Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
//            Route::post('user_addresses/store', 'UserAddressesController@store')->name('user_addresses.store');
//            Route::get('user_addresses/{user_address}/edit', 'UserAddressesController@edit')->name('user_addresses.edit');
//            Route::put('user_addresses/{user_address}/update', 'UserAddressesController@update')->name('user_addresses.update');
//            Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
        });
    });
});

