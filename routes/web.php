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
    return view('pages.index');
});

//Vehicle Owner Routes
Route::get('/index','PagesController@index')->name('index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/editProfile','ProfileController@editProfile')->name('editProfile');
Route::post('/updateProfile','ProfileController@updateProfile')->name('updateProfile');
Route::get('/showProfile','ProfileController@showProfile')->name('showProfile');


//Vehicle Routes


//Traffic Police Routes
Route::group(['namespace' => 'TrafficPolice'], function(){

	    Route::prefix('trafficpolice')->group(function(){
        Route::get('/', 'HomeController@index')->name('trafficpolice.home');
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('trafficpolice.login');
		Route::post('login', 'Auth\LoginController@login');
		Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('trafficpolice.register');
		Route::post('register', 'Auth\RegisterController@register');
		Route::post('logout', 'Auth\LoginController@logout')->name('trafficpolice.logout');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('trafficpolice.password.email');
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('trafficpolice.password.request');
		Route::post('password/reset', 'Auth\ResetPasswordController@reset');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('trafficpolice.password.reset');
    });
});

//Insurance Company Routes
Route::group(['namespace' => 'InsuranceCompany'], function(){

    Route::prefix('insurancecompany')->group(function(){
        Route::get('/', 'HomeController@index')->name('insurancecompany.home');
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('insurancecompany.login');
		Route::post('login', 'Auth\LoginController@login');
		Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('insurancecompany.register');
		Route::post('register', 'Auth\RegisterController@register');
		Route::post('logout', 'Auth\LoginController@logout')->name('insurancecompany.logout');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('insurancecompany.password.email');
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('insurancecompany.password.request');
		Route::post('password/reset', 'Auth\ResetPasswordController@reset');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('insurancecompany.password.reset');

    });
});


//Service Centers Routes
Route::group(['namespace' => 'ServiceCenter'], function(){

	Route::prefix('servicecenter')->group(function(){			
		Route::get('/', 'HomeController@index')->name('servicecenter.home');
		Route::get('login', 'Auth\LoginController@showLoginForm')->name('servicecenter.login');
		Route::post('login', 'Auth\LoginController@login');
		Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('servicecenter.register');
		Route::post('register', 'Auth\RegisterController@register');
		Route::post('logout', 'Auth\LoginController@logout')->name('servicecenter.logout');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('servicecenter.password.email');
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('servicecenter.password.request');
		Route::post('password/reset', 'Auth\ResetPasswordController@reset');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('servicecenter.password.reset');
	});
});


//RTO Routes
Route::group(['namespace' => 'RTO'], function(){

	Route::prefix('rto')->group(function(){
		Route::get('/', 'HomeController@index')->name('rto.home');
		Route::get('login', 'Auth\LoginController@showLoginForm')->name('rto.login');
		Route::post('login', 'Auth\LoginController@login');
		Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('rto.register');
		Route::post('register', 'Auth\RegisterController@register');
		Route::post('logout', 'Auth\LoginController@logout')->name('rto.logout');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('rto.password.email');
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('rto.password.request');
		Route::post('password/reset', 'Auth\ResetPasswordController@reset');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('rto.password.reset');
	});
});