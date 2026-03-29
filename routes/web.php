<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    });

    Route::get('/student/create-report', function () {
        return view('student.create-report');
    });

    Route::get('/student/report/{id}', function ($id) {
        return view('student.report-detail');
    });
});

Route::middleware(['auth', 'role:admin,staff'])->group(function () {
    Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard']);

    Route::get('/admin/students', [\App\Http\Controllers\AdminController::class, 'students']);

    Route::get('/admin/categories', [\App\Http\Controllers\AdminController::class, 'categories']);

    Route::get('/admin/aspirations', [\App\Http\Controllers\AdminController::class, 'aspirations']);
});

Route::get('/hello', function () {
    return 'Hello World! Environment Ready';
});
