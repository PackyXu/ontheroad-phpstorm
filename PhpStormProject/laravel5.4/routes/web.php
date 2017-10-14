<?php

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

Route::get('/', function () {
    return view('welcome');
});
    /*Route::get('/',['as'=>'tasks.index','uses'=>'TasksController@index']);*/
   /* Route::get('/',function (){
        return view('home');
    });
    Route::get('/about',function (){
       return view('about');
    });
    Route::get('/contact',function (){
        return view('contact');
    });
    Route::get('/help',function (){
        return view('help');
    });*/
    Route::post('/contact/submit','ContactController@index');
    Route::any('/messages','ContactController@show');

    //Route::get('/', 'HomeController@index');
    Route::get('/about', 'HomeController@getAbout');
    Route::get('/contact', 'HomeController@getContact');
    Route::get('/help', 'HomeController@getHelp');
//Route::get('/home', 'HomeController@index')->name('home');

    Auth::routes();
    /**
     * Home User
     */
    Route::get('/home', 'HomeController@index');
    Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
    /*
     * Admin
     **/
    Route::prefix('admin')->group(function (){
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

        /**
         * reset password routes
         */
        Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
        Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    });

