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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/students',[
		'uses'=> 'StudentController@index',
		'as'=>'students'
	]);
Route::get('/student/create',[
		'uses'=> 'StudentController@create',
		'as'=>'students.create'
	]);
Route::post('/student/store',[
		'uses'=> 'StudentController@store',
		'as'=>'students.store'
	]);


Route::get('/agents',[
		'uses'=> 'AgentController@index',
		'as'=>'agents'
	]);
Route::get('/agent/create',[
		'uses'=> 'AgentController@create',
		'as'=>'agent.create'
	]);
Route::post('/agent/store',[
		'uses'=> 'AgentController@store',
		'as'=>'agent.store'
	]);

Route::get('/agent/business/{id}',[
        'uses' => 'AgentController@business',
        'as' => 'agent.business'
	]);

Route::get('/agent/studentList/{id}',[
        'uses' => 'AgentController@studentList',
        'as' => 'studentList'
	]);

Route::get('/agent/contracts/{id}',[
        'uses' => 'AgentController@contracts',
        'as' => 'agent.contracts'
	]);