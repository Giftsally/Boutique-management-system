@extends('layouts.app')

@section('title', 'Reports')

@section('page-title', 'Reports')

@section('content')

<div class="admin-layout">

    @include('components.sidebar')

    <div class="main-wrapper">

        @include('components.navbar')

        <main class="main-content">

            <div class="container-fluid">

                <div class="mb-4">

                    <h2 class="fw-bold mb-1">
                        Reports
                    </h2>

                    <p class="text-muted">
                        Generate and review boutique records.
                    </p>

                </div>


                <div class="row g-4">

                    <div class="col-md-6 col-lg-4">

                        <div class="dashboard-panel h-100">

                            <div class="card-icon mb-3">
                                <i class="fa-solid fa-users"></i>
                            </div>

                            <h5 class="fw-bold">
                                Customer Report
                            </h5>

                            <p class="text-muted">
                                View customer records and customer activity.
                            </p>

                            <button class="btn btn-outline-dark">
                                Generate Report
                            </button>

                        </div>

                    </div>


                    <div class="col-md-6 col-lg-4">

                        <div class="dashboard-panel h-100">

                            <div class="card-icon mb-3">
                                <i class="fa-solid fa-money-bill"></i>
                            </div>

                            <h5 class="fw-bold">
                                Payment Report
                            </h5>

                            <p class="text-muted">
                                Review payments collected over a selected period.
                            </p>

                            <button class="btn btn-outline-dark">
                                Generate Report
                            </button>

                        </div>

                    </div>


                    <div class="col-md-6 col-lg-4">

                        <div class="dashboard-panel h-100">

                            <div class="card-icon mb-3">
                                <i class="fa-solid fa-file-invoice-dollar"></i>
                            </div>

                            <h5 class="fw-bold">
                                Outstanding Debts
                            </h5>

                            <p class="text-muted">
                                Identify customers with outstanding balances.
                            </p>

                            <button class="btn btn-outline-dark">
                                View Outstanding
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>

@endsection