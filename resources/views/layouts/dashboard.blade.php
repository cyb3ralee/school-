@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        {{-- Sidebar --}}
        <div class="col-md-3 col-lg-2 bg-white border-end min-vh-100 p-3">
            <h6 class="text-muted text-uppercase small mb-3">@yield('role', 'Dashboard')</h6>
            <ul class="nav flex-column">
                @yield('sidebar')
            </ul>
        </div>

        {{-- Main content --}}
        <div class="col-md-9 col-lg-10 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="mb-0">@yield('page-title', 'Dashboard')</h3>
                    <small class="text-muted">@yield('page-subtitle', '')</small>
                </div>
                <div class="text-end">
                    <div class="fw-bold">{{ auth()->user()->name ?? 'Guest User' }}</div>
                    <small class="text-muted">{{ ucfirst(auth()->user()->role ?? 'guest') }}</small>
                </div>
            </div>

            @yield('dashboard-content')
        </div>

    </div>
</div>
@endsection