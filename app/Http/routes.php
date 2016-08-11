<?php

use App\Task;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * Add New Task
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * Delete Task
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});
