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

Route::get('ID/{id}/{g?}',function($id, $g = 'dude'){
   echo 'ID: '.$id;
});

Route::get('example/{id}/{g?}',function($id, $g = 'dude'){
    return view('example', ['name' => 'Matt Lao']);
});

Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);

Route::get('/reg/path', function(){
  return view('register', ['name' => 'Matt Lao']);
});

Route::post('/reg/path', function($data){
  echo "data:".$data;
});

// Route::bind('tasks', function($value, $route) {
//   return App\Task::whereSlug($value)->first();
// });
// Route::bind('projects', function($value, $route) {
//   return App\Project::whereSlug($value)->first();
// });

Route::resource('users','UserController');
Route::resource('projects','ProjectsController');
Route::resource('tasks','TasksController');

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
