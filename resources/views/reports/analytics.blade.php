@extends('layouts.app')

@section('title', 'Analytics')

@section('page-title', 'Analytics')

@section('content')

<div class="admin-layout">

    @include('components.sidebar')

    <div class="main-wrapper">

        @include('components.navbar')

        <main class="main-content">

            <div class="container-fluid">

                <div class="mb-4">

                    <h2 class="fw-bold mb-1">
                        Analytics
                    </h2>

                    <p class="text-muted">
                        View insights about your boutique performance.
                    </p>

                </div>


                <div class="row g-4">

                    <div class="col-md-6 col-xl-3">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>

                            <div>

                                <span>Total Sales</span>

                                <h3>0</h3>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-6 col-xl-3">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-money-bill-wave"></i>
                            </div>

                            <div>

                                <span>Revenue</span>

                                <h3>₦0</h3>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-6 col-xl-3">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>

                            <div>

                                <span>Customers</span>

                                <h3>0</h3>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-6 col-xl-3">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-wallet"></i>
                            </div>

                            <div>

                                <span>Outstanding</span>

                                <h3>₦0</h3>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="dashboard-panel mt-4">

                    <h5 class="fw-bold">
                        Performance Overview
                    </h5>

                    <div class="empty-state">

                        <i class="fa-solid fa-chart-line"></i>

                        <h5>
                            Analytics will appear here
                        </h5>

                        <p>
                            Once sales and payments are recorded,
                            performance data will be displayed here.
                        </p>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>

@endsection