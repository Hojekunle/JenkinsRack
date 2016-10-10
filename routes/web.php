<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::bind('tasks', function($value, $route) {
	    return App\Task::whereSlug($value)->first();
    });

Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::get('/', [
    'as' => 'tasks',
    'uses' => 'TaskController@index'
]);

Route::get('/', [
    'as' => 'projects',
    'uses' => 'projectsController@index'
]);

//throw 404 for url not matching /projects
//Route::get('/', function()
//{
//    App::abort(404);
//});


Route::resource('projects', 'ProjectsController');
Route::resource('tasks', 'TasksController');
Route::resource('clients', 'ClientsController');
Route::resource('joblists', 'JoblistsController');

Route::get('/api/clients/{id?}', 'Clients@index');
Route::post('/api/clients', 'Clients@store');
Route::post('/api/clients/{id}', 'Clients@update');
Route::delete('/api/clients/{id}', 'Clients@destroy');
