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
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

/**
 * Delete Task
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});
