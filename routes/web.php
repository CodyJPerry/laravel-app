<?php 

//site routes
Route::get('/', 'SiteController@showHome');

// authentication routes 
Route::auth();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// subscription routes 
Route::get('/subscribe', 'SubscribeController@showSubscribe');
Route::post('/subscribe', 'SubscribeController@processSubscribe');

Route::group(['middleware' => 'auth'], function () {
  // welcome page
  Route::get('welcome', 'SubscribeController@showWelcome');

// Account route 
});


// slug route for showing a post should get loaded last
Route::get('{slug}', 'SiteController@showPost');


