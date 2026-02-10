<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', function () {
    return view('admin-login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.admin-dashboard');
});

Route::get('/admin/students', function () {
    return view('admin.student-management');
});

Route::get('/admin/categories', function () {
    return view('admin.category-management');
});

Route::get('/admin/aspirations', function () {
    return view('admin.aspiration-management');
});

Route::get('/student/login', function () {
    return view('student-login');
});
