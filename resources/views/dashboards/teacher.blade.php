@extends('layouts.dashboard')

@section('title', 'Teacher Dashboard')
@section('role', 'Teacher')
@section('page-title', 'Welcome back, Mr. Alee')
@section('page-subtitle', 'Here is your day at a glance')

@section('sidebar')
    <li><a class="nav-link active" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-journal-bookmark"></i> My Subjects</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-clipboard-check"></i> Attendance</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-pencil-square"></i> Enter Marks</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-calendar-week"></i> Timetable</a></li>
@endsection

@section('dashboard-content')

    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1 small">Subjects Assigned</p>
                    <h3 class="mb-0">4</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1 small">Students</p>
                    <h3 class="mb-0">128</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1 small">Today's Classes</p>
                    <h3 class="mb-0">3</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white py-3"><h5 class="mb-0">Today's Schedule</h5></div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span><strong>08:00</strong> — Mathematics (10-A)</span>
                        <span class="badge bg-primary">Now</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><strong>10:00</strong> — Physics (11-B)</span>
                        <span class="badge bg-secondary">Upcoming</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><strong>13:00</strong> — Mathematics (9-C)</span>
                        <span class="badge bg-secondary">Upcoming</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white py-3"><h5 class="mb-0">Quick Actions</h5></div>
                <div class="card-body d-grid gap-2">
                    <a href="#" class="btn btn-outline-primary"><i class="bi bi-clipboard-check"></i> Mark Attendance</a>
                    <a href="#" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i> Enter Marks</a>
                    <a href="#" class="btn btn-outline-secondary"><i class="bi bi-calendar-week"></i> View Timetable</a>
                </div>
            </div>
        </div>
    </div>

@endsection