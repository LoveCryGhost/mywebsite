<?php
//MultiAuth 用戶分份驗證相關路由
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Guard
Route::group(['middleware' => ['web']], function () {
    Route::prefix('')->namespace('App\Http\Controllers\Auth\User')->group(function () {
        Route::get('login', 'LoginController@showLoginForm')->name('user.login');
        Route::post('login', 'LoginController@login')->name("user.login.submit");
        Route::post('logout', 'LoginController@logout')->name('user.logout');

        //新增註冊
        Route::get('register', 'RegisterController@showRegistrationForm')->name('user.register');
        Route::post('register', 'RegisterController@register');
        Route::get('register@confirm_email/{token}', 'RegisterController@confirmEmail')->name('user.confirmEmail');

        Route::get('confirm_email/{token}', 'RegisterController@confirmEmail')->name('user.confirm_email');

//        //重置密碼, 此為自定義的Controller，與系統不同
//        //填寫Email表單
//        Route::get('password/reset',  'PasswordController@showLinkRequestForm')->name('password.request');
//        //處理表單提交，成功的話就發送郵件，附帶Token 的鏈接
//        Route::post('password/email',  'PasswordController@sendResetLinkEmail')->name('password.email');
//        //顯示更新密碼的表單，包含token
//        Route::get('password/reset/{token}',  'PasswordController@showResetForm')->name('password.reset');
//        //對提交過來的token 和email 數據進行配對，正確的話更新密碼
//        Route::post('password/reset',  'PasswordController@reset')->name('password.update');

    });

    Route::get('auth_switcher/{guard}/{id}',  function (Request $request, $guard, $id){
        Auth::guard($guard)->loginUsingId($id, true);
        return back();
    })->name('auth_switcher');



    Route::prefix('admin')->namespace('App\Http\Controllers\Auth\Admin')->group(function() {
        Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
        Route::post('/logout', 'AdminLoginController@logout')->name('admin.logout');
    });


});


