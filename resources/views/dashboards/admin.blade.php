@extends('layouts.dashboard')

@section('title', 'Admin Dashboard')
@section('role', 'Admin')
@section('page-title', 'Admin Dashboard')
@section('page-subtitle', 'Overview of the entire school')

@section('sidebar')
    <li><a class="nav-link active" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-people"></i> Users</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-building"></i> Classes</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-book"></i> Subjects</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-clipboard-check"></i> Attendance</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-cash-coin"></i> Fees</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-gear"></i> Settings</a></li>
@endsection

@section('dashboard-content')

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1 small">Total Students</p>
                            <h3 class="mb-0">248</h3>
                        </div>
                        <i class="bi bi-people-fill display-6 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1 small">Teachers</p>
                            <h3 class="mb-0">32</h3>
                        </div>
                        <i class="bi bi-person-badge-fill display-6 text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1 small">Classes</p>
                            <h3 class="mb-0">12</h3>
                        </div>
                        <i class="bi bi-building-fill display-6 text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1 small">Fees Collected</p>
                            <h3 class="mb-0">₦4.2M</h3>
                        </div>
                        <i class="bi bi-cash-stack display-6 text-danger"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0">Recent Enrollments</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr><th>Student</th><th>Class</th><th>Date</th><th>Status</th></tr>
                </thead>
                <tbody>
                    <tr><td>Samuel Alee</td><td>Grade 10-A</td><td>2026-10-10</td><td><span class="badge bg-success">Active</span></td></tr>
                    <tr><td>Fatima Bello</td><td>Grade 9-B</td><td>2026-10-09</td><td><span class="badge bg-success">Active</span></td></tr>
                    <tr><td>John Okoro</td><td>Grade 11-A</td><td>2026-10-08</td><td><span class="badge bg-warning">Pending</span></td></tr>
                    <tr><td>Aisha Musa</td><td>Grade 8-C</td><td>2026-10-08</td><td><span class="badge bg-success">Active</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection