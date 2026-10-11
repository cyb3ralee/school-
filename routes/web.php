<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin/dashboard', function () {
    return view('dashboards.admin');
})->name('admin.dashboard');

Route::get('/teacher/dashboard', function () {
    return view('dashboards.teacher');
})->name('teacher.dashboard');

Route::get('/student/dashboard', function () {
    return view('dashboards.student');
})->name('student.dashboard');

Route::get('/parent/dashboard', function () {
    return view('dashboards.parent');
})->name('parent.dashboard');