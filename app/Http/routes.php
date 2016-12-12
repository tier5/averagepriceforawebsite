<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/marketing-pages', ['uses' => 'MainController@getMarketingPages', 'as' => 'getMarketingPages']);
Route::post('/marketing-pages', ['uses' => 'MainController@postMarketingPages', 'as' => 'postMarketingPages']);
Route::get('/people-login', ['uses' => 'MainController@getPeopleLogin', 'as' => 'getPeopleLogin']);
Route::post('/people-login', ['uses' => 'MainController@postPeopleLogin', 'as' => 'postPeopleLogin']);
Route::get('/personal-profiles', ['uses' => 'MainController@getPersonalProfiles' , 'as' => 'personalProfiles']);
Route::post('/personal-profiles', ['uses' => 'MainController@postPersonalProfiles', 'as' => 'postPersonalProfiles']);
Route::get('/accept-payment', ['uses' => 'MainController@getAcceptPayment', 'as' => 'acceptPayment']);
Route::post('/accept-payment', ['uses' => 'MainController@postAcceptPayment', 'as' => 'postAcceptPayment']);
Route::get('/rate-review', ['uses' => 'MainController@getRateReviews', 'as' => 'rateReviews']);
Route::post('/rate-review', ['uses' => 'MainController@postRateReviews', 'as' => 'postRateReviews']);
Route::get('/sharing-functions', ['uses' => 'MainController@getSharingFunctions', 'as' => 'sharingFunctions']);
Route::post('/sharing-functions', ['uses' => 'MainController@postSharingFunctions', 'as' => 'postSharingFunctions']);
Route::get('/connect-to-app', ['uses' => 'MainController@getConnectToApp', 'as' => 'connectTo']);
Route::post('/connect-to-app', ['uses' => 'MainController@postConnectToApp', 'as' => 'postConnectTo']);
Route::get('/cms', ['uses' => 'MainController@getCms', 'as' => 'cms']);
Route::post('/cms', ['uses' => 'MainController@postCms', 'as' => 'postCms']);
Route::get('/search', ['uses' => 'MainController@getSearch', 'as' => 'search']);
Route::post('/search', ['uses' => 'MainController@postSearch', 'as' => 'postSearch']);
Route::get('/mobile-view', ['uses' => 'MainController@getMobileView', 'as' => 'mobileView']);
Route::post('/mobile-view', ['uses' => 'MainController@postMobileView', 'as' => 'postMobileView']);
Route::get('/summary', ['uses' => 'MainController@getSummary', 'middleware' => 'Summary', 'as' => 'summary']);

/*change routes */

Route::get('/change-marketing-pages/{step}', ['uses' => 'ChangeController@getMarketingPages', 'as' => 'changeMarketingpages']);
Route::post('/change-marketing-pages', ['uses' => 'ChangeController@postLastPageMarketingPages', 'as' => 'postLastPageMarketingPages']);
Route::get('/change-people-login/{step}', ['uses' => 'ChangeController@changePeopleLogin', 'as' => 'changePeopleLogin']);
Route::post('/change-people-login', ['uses' => 'ChangeController@postLastPagePeopleLogin', 'as' => 'postLastPagePeopleLogin']);
Route::get('/change-personal-profiles/{step}', ['uses' => 'ChangeController@changePersonalProfiles', 'as' => 'changePersonalProfiles']);
Route::post('/change-personal-profiles', ['uses' => 'ChangeController@postLastPagePersonalProfiles' , 'as' => 'postLastPagePersonalProfiles']);
Route::get('/change-rate-reviews/{step}', ['uses' => 'ChangeController@changeRateReview', 'as' => 'changeRateReview']);
Route::post('/change-rate-reviews', ['uses' => 'ChangeController@postLastPageRateReviews' , 'as' => 'postLastPageRateReviews']);
Route::get('/change-payment/{step}', ['uses' => 'ChangeController@changePayment', 'as' => 'changePayment']);
Route::post('/change-payment', ['uses' => 'ChangeController@postLastPagePayment', 'as' => 'postLastPagePayment']);
Route::get('/change-sharing-functions/{step}', ['uses' => 'ChangeController@changeSharing', 'as' => 'changeSharing']);
Route::post('/change-sharing-functions', ['uses' => 'ChangeController@postLastPageSharing', 'as' => 'postLastPageSharing']);
Route::get('/change-connect-to-app/{step}',['uses' => 'ChangeController@changeConnectTo', 'as' => 'changeConnectTo']);
Route::post('/change-connect-to-app', ['uses' => 'ChangeController@postLastPageConnectTo', 'as' => 'postLastPageConnectTo']);
Route::get('/change-cms/{step}', ['uses' => 'ChangeController@changeCms', 'as' => 'changeCms']);
Route::post('change-cms', ['uses' => 'ChangeController@postLastPageCms', 'as' => 'postLastPageCms']);
Route::get('/change-search/{step}', ['uses' => 'ChangeController@changeSearch' , 'as' => 'changeSearch']);
Route::post('/change-search', ['uses' => 'ChangeController@postLastPageSearch', 'as' => 'postLastPageSearch']);
Route::get('/change-mobile-view/{step}', ['uses' => 'ChangeController@changeLook', 'as' => 'changeLook']);
Route::post('/change-mobile-view', ['uses' => 'ChangeController@postLastPageMobileView', 'as' => 'postLastPageMobileView']);