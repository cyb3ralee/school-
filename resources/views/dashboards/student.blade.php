@extends('layouts.dashboard')

@section('title', 'Student Dashboard')
@section('role', 'Student')
@section('page-title', 'Hello, Samuel')
@section('page-subtitle', 'Grade 10-A')

@section('sidebar')
    <li><a class="nav-link active" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-journal-text"></i> My Subjects</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-bar-chart"></i> Results</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-clipboard-check"></i> Attendance</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-calendar-week"></i> Timetable</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-cash-coin"></i> Fees</a></li>
@endsection

@section('dashboard-content')

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1 small">Subjects</p>
                    <h3 class="mb-0">8</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1 small">Attendance</p>
                    <h3 class="mb-0">94%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1 small">Average</p>
                    <h3 class="mb-0">B+</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1 small">Fee Balance</p>
                    <h3 class="mb-0">₦12k</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3"><h5 class="mb-0">Recent Results</h5></div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr><th>Subject</th><th>Exam</th><th>Score</th><th>Grade</th></tr>
                </thead>
                <tbody>
                    <tr><td>Mathematics</td><td>Mid-term</td><td>82%</td><td><span class="badge bg-success">A</span></td></tr>
                    <tr><td>Physics</td><td>Mid-term</td><td>74%</td><td><span class="badge bg-primary">B</span></td></tr>
                    <tr><td>English</td><td>Mid-term</td><td>65%</td><td><span class="badge bg-warning">C</span></td></tr>
                    <tr><td>Chemistry</td><td>Mid-term</td><td>88%</td><td><span class="badge bg-success">A</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection