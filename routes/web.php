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

//Insurance Company
//Route::get('show_vehicle_Insurance', 'VehicleController_Insurance@show_vehicle')->name('insurance.show');
//Route::get('edit_vehicle_Insurance', 'VehicleController_Insurance@edit_vehicle')->name('insurance.edit');
//Route::post('update_vehicle_Insurance', 'VehicleController_Insurance@update_vehicle')->name('insurance.update');
//Service Center
//Route::get('show_vehicle_Service', 'VehicleController_Service@show_vehicle')->name('service.show');
//Route::get('edit_vehicle_Service', 'VehicleController_Service@edit_vehicle')->name('service.edit');
//Route::post('update_vehicle_Service', 'VehicleController_Service@update_vehicle')->name('service.update');
//Traffic Police
//Route::get('show_vehicle_Traffic', 'VehicleController_Traffic@show_vehicle')->name('traffic.show');
//Route::get('edit_vehicle_Traffic', 'VehicleController_Traffic@edit_vehicle')->name('traffic.edit');
//Route::post('update_vehicle_Traffic', 'VehicleController_Traffic@update_vehicle')->name('traffic.update');
//RTO
// Route::get('create_vehicle_RTO', 'VehicleController_RTO@create')->name('rto.create');
// Route::get('store_vehicle_RTO', 'VehicleController_RTO@store')->name('rto.store');
// Route::post('show_index_RTO', 'VehicleController_RTO@show_index')->name('rto.show_index');
// Route::post('show_vehicle_RTO', 'VehicleController_RTO@show_vehicle')->name('rto.show_vehicle');
// Route::post('edit_vehicle_RTO', 'VehicleController_RTO@edit_vehicle')->name('rto.edit');
//Vehicle Owner
//Route::post('show_index_Owner', 'VehicleController_Owner@show_index')->name('owner.show_index');
//Route::post('show_vehicle_Owner', 'VehicleController_Owner@show_vehicle')->name('owner.show_vehicle');
Route::resource('RTO_vehicle', 'VehicleController_RTO');

Route::resource('Insurance_vehicle', 'VehicleController_Insurance');

Route::resource('Service_vehicle', 'VehicleController_Service');

Route::resource('Traffic_vehicle', 'VehicleController_Traffic');

Route::resource('Owner_vehicle', 'VehicleController_Owner');




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
		Route::get('showall', 'HomeController@index1')->name('insurancecompany.all');
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
		Route::get('showall', 'HomeController@index1')->name('servicecenter.all');
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