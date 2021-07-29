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
    return view('frontend.index');
});

// Route::get('/dashboard', function () {
//     return view('backend.index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/services/case-study', function () {
// 	return view('frontend.pages.snow-reel');
// });
// Route::get('/services/case-study', 'Frontend\PagesController@case_study')->name('case_study');
Route::get('/services/case-study/{id}', 'Frontend\PagesController@case_study')->name('case_study');
Route::get('/about', 'Frontend\PagesController@about')->name('about');
Route::get('/services', 'Frontend\PagesController@services')->name('services');
Route::get('/portfolio', 'Frontend\PagesController@portfolio')->name('portfolio');
Route::get('/hireus', 'Frontend\PagesController@hireus')->name('hireus');
Route::get('/contact', 'Frontend\PagesController@contact')->name('contact');


// admin routes
Route::group(['prefix' => 'admin'], function () {

	Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

	Route::get('logout', 'Backend\Auth\LoginController@logout')->name('admin.logout');


	Route::get('/password/reset', 'Backend\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/email', 'Backend\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset/{token}', 'Backend\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::post('password/reset', 'Backend\Auth\ResetPasswordController@reset');
	

	// dashboard
	Route::get('/dashboard', 'Backend\PagesController@index')->name('admin.home');
	
	// services
	Route::get('/service', 'Backend\PagesController@services')->name('admin.service');
	Route::get('/service/create', 'Backend\ServiceController@create')->name('service.create');
	Route::get('/service/edit/{id}', 'Backend\ServiceController@edit')->name('service.edit');
	Route::post('/service/update/{id}', 'Backend\ServiceController@update')->name('service.update');
	Route::get('/service/status/{id}', 'Backend\ServiceController@status')->name('service.status');
	Route::delete('/service/delete/{id}', 'Backend\ServiceController@destroy')->name('service.delete');

	// portfolio
	Route::get('/portfolio', 'Backend\PagesController@portfolio')->name('admin.portfolio');
	Route::get('/portfolio/create', 'Backend\PortfolioController@create')->name('portfolio.create');
	Route::get('/portfolio/show/{id}', 'Backend\PortfolioController@show')->name('portfolio.show');
	Route::get('/portfolio/edit/{id}', 'Backend\PortfolioController@edit')->name('portfolio.edit');
	Route::post('/portfolio/update/{id}', 'Backend\PortfolioController@update')->name('portfolio.update');
	Route::get('/portfolio/status/{id}', 'Backend\PortfolioController@status')->name('portfolio.status');
	Route::delete('/portfolio/delete/{id}', 'Backend\PortfolioController@destroy')->name('portfolio.delete');

	// hire us
	Route::get('/hireus', 'Backend\PagesController@hireus')->name('admin.hireus');
	Route::get('/hireus/active_status/{id}', 'Backend\HireUSController@active_status')->name('admin.hireus.active_status');
	Route::get('/hireus/archive_status/{id}', 'Backend\HireUSController@archive_status')->name('admin.hireus.archive_status');
	Route::get('/hireus/{id}', 'Backend\HireUSController@show')->name('admin.hireus.show');

});

Route::post('/save_hireus', 'Frontend\HireUSController@store')->name('hireus.store');
Route::resource('/save_portfolio', 'Backend\PortfolioController');
Route::resource('/save_service', 'Backend\ServiceController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
