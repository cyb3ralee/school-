@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    {{-- Hero --}}
    <section class="bg-primary text-white py-5">
        <div class="container text-center py-5">
            <h1 class="display-4 fw-bold">Welcome to School MS</h1>
            <p class="lead mb-4">A modern school management system for students, teachers, and administrators.</p>
            <a href="/login" class="btn btn-light btn-lg me-2">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
            <a href="/register" class="btn btn-outline-light btn-lg">
                <i class="bi bi-person-plus"></i> Register
            </a>
        </div>
    </section>

    {{-- Features --}}
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">What you can do</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-people-fill display-4 text-primary"></i>
                            <h5 class="card-title mt-3">Student Portal</h5>
                            <p class="card-text text-muted">View your subjects, attendance, grades, and timetable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-journal-bookmark-fill display-4 text-success"></i>
                            <h5 class="card-title mt-3">Teacher Tools</h5>
                            <p class="card-text text-muted">Manage attendance, enter marks, and view your class schedule.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-shield-lock-fill display-4 text-warning"></i>
                            <h5 class="card-title mt-3">Admin Control</h5>
                            <p class="card-text text-muted">Manage classes, sections, subjects, fees, and users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to action --}}
    <section class="bg-light py-5">
        <div class="container text-center">
            <h3>Ready to get started?</h3>
            <p class="text-muted mb-3">Sign in to access your dashboard.</p>
            <a href="/login" class="btn btn-primary btn-lg">
                <i class="bi bi-box-arrow-in-right"></i> Login Now
            </a>
        </div>
    </section>

@endsection
