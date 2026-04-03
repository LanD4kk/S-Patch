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

    Route::get('/admin/students', [\App\Http\Controllers\AdminController::class, 'students'])->name('admin.students.index');
    Route::post('/admin/students', [\App\Http\Controllers\AdminController::class, 'storeStudent'])->name('admin.students.store');
    Route::put('/admin/students/{id}', [\App\Http\Controllers\AdminController::class, 'updateStudent'])->name('admin.students.update');
    Route::delete('/admin/students/{id}', [\App\Http\Controllers\AdminController::class, 'destroyStudent'])->name('admin.students.destroy');

    Route::get('/admin/categories', [\App\Http\Controllers\AdminController::class, 'categories'])->name('admin.categories.index');
    Route::post('/admin/categories', [\App\Http\Controllers\AdminController::class, 'storeCategory'])->name('admin.categories.store');
    Route::put('/admin/categories/{id}', [\App\Http\Controllers\AdminController::class, 'updateCategory'])->name('admin.categories.update');
    Route::delete('/admin/categories/{id}', [\App\Http\Controllers\AdminController::class, 'destroyCategory'])->name('admin.categories.destroy');

    Route::get('/admin/aspirations', [\App\Http\Controllers\AdminController::class, 'aspirations']);
    Route::get('/admin/aspirations/{id}', [\App\Http\Controllers\AdminController::class, 'showAspiration'])->name('admin.aspirations.show');
    Route::put('/admin/aspirations/{id}', [\App\Http\Controllers\AdminController::class, 'updateAspiration'])->name('admin.aspirations.update');
});

Route::get('/hello', function () {
    return 'Hello World! Environment Ready';
});
