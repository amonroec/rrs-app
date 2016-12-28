<?php

use Illuminate\Http\Request;
use app\Http\Controllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

/*Route::post('/request-user/submit', function (Request $request) {
	return redirect()->action('RequestUsersController@insertRequest', $request->input());
});*/
Route::post('/requestuser/submit', function (Request $request) {
	return redirect()->action('RequestUsersController@insertRequest', $request->input());
});
Route::resource('/requestuser/submit', 'RequestUsersController@insertRequest');
/*
Route::get('/artpack/list', function (Request $request) {
	return redirect()->action()
});*/

Route::post('/request-form/artpack/submit', function (Request $request) {
	return redirect()->action('SubmitForm@artpackSubmit', $request->input());
});
Route::resource('/request-form/artpack/submit', 'SubmitForm@artpackSubmit');

Route::post('/request-form/embroidery/submit', function (Request $request) {
	return redirect()->action('SubmitForm@embroiderySubmit', $request->input());
});
Route::resource('/request-form/embroidery/submit', 'SubmitForm@embroiderySubmit');

Route::get('/tasks/load', function (Request $request) {
	return redirect()->action('TasksController@loadTasks');
});

Route::resource('/tasks/load', 'TasksController@loadTasks');

Route::post('/tasks/singleTask', function (Request $request) {
	return redirect()->action('TasksController@setTask');
});

Route::resource('/tasks/singleTask', 'TasksController@setTask');

Route::post('/tasks/getSingleTask', function (Request $request) {
	return redirect()->action('TasksController@getTask');
});

Route::resource('/tasks/getSingleTask', 'TasksController@getTask');