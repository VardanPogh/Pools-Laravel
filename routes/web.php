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


Route::group(['prefix' => 'admin'], function () {
    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('facility', FacilityController::class);
    Route::get('facility/delete/{id}', 'FacilityController@delete');

    Route::resource('pool', PoolController::class);
    Route::get('pool/delete/{id}', 'PoolController@delete');

    Route::resource('waterslide', WaterslideController::class);
    Route::get('waterslide/delete/{id}', 'WaterslideController@delete');

    Route::resource('country', CountryController::class);
    Route::get('country/delete/{id}', 'CountryController@delete');

    Route::resource('state', StateController::class);
    Route::get('state/delete/{id}', 'StateController@delete');

    Route::resource('city', CityController::class);
    Route::get('city/delete/{id}', 'CityController@delete');

    Route::resource('blog', BlogController::class);
    Route::get('blog/delete/{id}', 'BlogController@delete');

    Route::get('/', 'FacilityController@index');

    Route::get('/get_state_by_country_id/{id}', 'StateController@getStateByCountryId');
    Route::get('/get_city_by_state_id/{id}', 'CityController@getCityByStateId');

    Route::get('/delete_additional_photo/{id}/', 'FacilityController@deletePhoto');
});

Route::get('/details/{id}', 'FacilityController@showDetails');

Route::get('/', 'MainController@index');
Route::get('/pools', 'MainController@pools');
Route::post('/search', 'MainController@search');
Route::post('/search_nearby', 'MainController@search_nearby');

Route::get('/blog_more/{id}', 'MainController@blog_more');

