@extends('layouts.dashboard')

@section('title', 'Parent Dashboard')
@section('role', 'Parent')
@section('page-title', 'Welcome, Mr. Alee')
@section('page-subtitle', 'Monitoring 2 children')

@section('sidebar')
    <li><a class="nav-link active" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-people"></i> My Children</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-bar-chart"></i> Results</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-clipboard-check"></i> Attendance</a></li>
    <li><a class="nav-link" href="#"><i class="bi bi-cash-coin"></i> Fees</a></li>
@endsection

@section('dashboard-content')

    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;">
                            <i class="bi bi-person-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Samuel Alee</h5>
                            <small class="text-muted">Grade 10-A</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;">
                            <i class="bi bi-person-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Aisha Alee</h5>
                            <small class="text-muted">Grade 8-C</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3"><h5 class="mb-0">Recent Notices</h5></div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Mid-term exams start November 3rd, 2026.</li>
            <li class="list-group-item">Fee payment deadline: October 31st, 2026.</li>
            <li class="list-group-item">Parent-teacher meeting: October 25th, 2026.</li>
        </ul>
    </div>

@endsection