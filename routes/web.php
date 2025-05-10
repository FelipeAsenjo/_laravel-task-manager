<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return 'Redirect to login';
});

Route::get('/login', function () {
    return 'Login Page';
});

Route::get('/register', function () {
    return 'Register Page';
});

Route::get('/recover-password', function () {
    return 'Recover Password Page';
});

Route::get('/dashboard', function () {
    return 'Dashboard Page';
});

Route::get('/projects/{project_id}', function (string $project_id) {
    return 'Show single project information '.$project_id;
});

Route::get('/projects/{project_id}/tasks/{task_id}', function (string $project_id, string $task_id) {
    return "Show single task information " . $project_id . " task_id " . $task_id;
});