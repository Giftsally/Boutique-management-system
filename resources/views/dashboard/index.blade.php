@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

<div class="admin-layout">

    {{-- Sidebar --}}
    @include('components.sidebar')


    {{-- Main Area --}}
    <div class="main-wrapper">

        {{-- Navbar --}}
        @include('components.navbar')


        <main class="main-content">

            {{-- Alerts --}}
            @include('components.alert')


            <div class="container-fluid">

                <div class="mb-4">

                    <h2 class="fw-bold mb-1">
                        Welcome back, Administrator
                    </h2>

                    <p class="text-muted mb-0">
                        Here's what's happening in your boutique today.
                    </p>

                </div>


                {{-- Temporary test cards --}}
                <div class="row g-4">

                    <div class="col-xl-3 col-md-6">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>

                            <div>
                                <span>Total Customers</span>
                                <h3>0</h3>
                            </div>

                        </div>

                    </div>


                    <div class="col-xl-3 col-md-6">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-receipt"></i>
                            </div>

                            <div>
                                <span>Total Sales</span>
                                <h3>0</h3>
                            </div>

                        </div>

                    </div>


                    <div class="col-xl-3 col-md-6">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-money-bill-wave"></i>
                            </div>

                            <div>
                                <span>Total Payments</span>
                                <h3>₦0</h3>
                            </div>

                        </div>

                    </div>


                    <div class="col-xl-3 col-md-6">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-wallet"></i>
                            </div>

                            <div>
                                <span>Outstanding Balance</span>
                                <h3>₦0</h3>
                            </div>

                        </div>

                    </div>

                </div>


                {{-- Welcome section --}}
                <div class="dashboard-panel mt-4">

                    <div class="panel-header">

                        <div>
                            <h5 class="mb-1">
                                Boutique Overview
                            </h5>

                            <p class="text-muted mb-0">
                                Your sales and payment information will appear here.
                            </p>
                        </div>

                    </div>


                    <div class="empty-state">

                        <i class="fa-solid fa-chart-column"></i>

                        <h5>
                            No data available yet
                        </h5>

                        <p>
                            Start by adding customers and recording sales.
                        </p>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>

@endsection

@push('scripts')

<script>

    document
        .getElementById('sidebarToggle')
        ?.addEventListener('click', function () {

            document
                .getElementById('sidebar')
                ?.classList.toggle('show');

        });

</script>

@endpush