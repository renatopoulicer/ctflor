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



// ===================== HOME ====================
Route::get('/', [
    'uses' => '\CTFlor\Http\Controllers\HomeController@index',
    'as' => 'home',
]);

Route::post('/', [
    'uses' => '\CTFlor\Http\Controllers\HomeController@post',
]);

// +++++++++++++++++++++++++++++++++++++++++++++++

// ==================== ALERTS ===================
Route::get('/alerts', function(){
	return redirect()->route('home')->with('info', 'You have signed up!');
});
// +++++++++++++++++++++++++++++++++++++++++++++++


// ==================== TESTES ===================
Route::get('about', 'PagesController@about' );

Route::get('marcos', 'PagesController@teste_marcos');
// +++++++++++++++++++++++++++++++++++++++++++++++



// =============== Events CRUD ===================
Route::resource('event', 'EventController');
// +++++++++++++++++++++++++++++++++++++++++++++++

// ================= ACTIVITY ====================
Route::get('/activity', [
	'uses' 	=> 'ActivityController@activityIndex',
	'as' 	=> 'activity',
]);

Route::post('/activity', [
	'uses' 	=> 'ActivityController@store',
]);
// +++++++++++++++++++++++++++++++++++++++++++++++

// ================ PARTICIPANT ==================
Route::get('/participant', [
	'uses' 	=> 'ParticipantController@participantIndex',
	'as' 	=> 'participant',
]);
// +++++++++++++++++++++++++++++++++++++++++++++++
