<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::post('/store', function () {
    $name = request('name');
    return view('about', compact('name'));
});
//عرض مصفوفة احادية
Route::get('tasks', function () {
    $tasks = [
        'Task 1',
        'Task 2',
        'Task 3'
    ];
    return view('tasks', compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $tasks = [
        'Task 1',
        'Task 2',
        'Task 3'
    ];
    $task = $tasks[$id];
    return view('show', compact('task'));
});

//عرض مصفوفة ثنائية
Route::get('tasks', function () {
    $tasks = [
        'First task' => 'Task 1',
        'Second task' => 'Task 2',
        'Third task' => 'Task 3'
    ];
    return view('tasks', compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $tasks = [
        'First task' => 'Task 1',
        'Second task' => 'Task 2',
        'Third task' => 'Task 3'
    ];
    $task = $tasks[$id];
    return view('show', compact('task'));
});
