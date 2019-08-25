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
    return view('welcome', [
        'tasks' => ['Lof of stuff'],
        'foo' => request('title')
    ]);
    
    
    /*OTHER OPTIONS:
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work'
    ];
    
    OPTION 1:   
    $foo = request('title');
    
    return view('welcome')->withTasks($tasks)->withFoo($foo);
    
    OPTION 2:
    return view('welcome')->with([
        'foo' => 'Miguel',
        'tasks' => $tasks
    ]);
*/
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about', function () {
    return view('about');
});