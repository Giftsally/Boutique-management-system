@extends('layouts.app')

@section('title', 'Boutique Management System')

@section('content')

<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <i class="fa-solid fa-store me-2"></i>
            Boutique Management
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#how-it-works">How It Works</a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a href="/login" class="btn btn-dark px-4">
                        <i class="fa-solid fa-right-to-bracket me-2"></i>
                        Admin Login
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>


<section id="home" class="py-5">

    <div class="container py-5">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge bg-dark mb-3 px-3 py-2">
                    Boutique Management System
                </span>

                <h1 class="display-4 fw-bold mb-4">
                    Manage Your Boutique
                    <span style="color: #c89b3c;">
                        Smarter
                    </span>
                </h1>

                <p class="lead text-muted mb-4">
                    A modern management system for keeping track of
                    customers, sales, installment payments and outstanding
                    balances in one place.
                </p>

                <div class="d-flex gap-3 flex-wrap">

                    <a href="/login" class="btn btn-dark btn-lg px-4">
                        Get Started
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>

                    <a href="#features" class="btn btn-outline-dark btn-lg px-4">
                        Explore Features
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="p-4 rounded-4 shadow-sm border bg-light">

                    <div class="bg-dark text-white rounded-4 p-4">

                        <div class="d-flex justify-content-between mb-4">

                            <div>
                                <small class="text-secondary">
                                    Dashboard
                                </small>

                                <h4 class="mb-0">
                                    Overview
                                </h4>
                            </div>

                            <i class="fa-solid fa-chart-line fs-3"></i>

                        </div>


                        <div class="row g-3">

                            <div class="col-6">
                                <div class="bg-white bg-opacity-10 rounded-3 p-3">
                                    <small>Customers</small>
                                    <h3 class="mb-0">0</h3>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="bg-white bg-opacity-10 rounded-3 p-3">
                                    <small>Payments</small>
                                    <h3 class="mb-0">₦0</h3>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="bg-white bg-opacity-10 rounded-3 p-3">
                                    <small>Outstanding Balance</small>
                                    <h3 class="mb-0">₦0</h3>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<section id="about" class="py-5 bg-light">

    <div class="container py-5">

        <div class="row justify-content-center text-center">

            <div class="col-lg-8">

                <span class="text-uppercase small fw-bold">
                    About the System
                </span>

                <h2 class="fw-bold mt-2 mb-3">
                    Everything Your Boutique Needs
                </h2>

                <p class="text-muted">
                    The Boutique Management System provides a centralized
                    platform for managing customer records, sales,
                    installment payments and financial information.
                    It reduces manual record keeping and makes it easier
                    to know which customers have outstanding balances.
                </p>

            </div>

        </div>

    </div>

</section>


<section id="features" class="py-5">

    <div class="container py-5">

        <div class="text-center mb-5">

            <span class="text-uppercase small fw-bold">
                Features
            </span>

            <h2 class="fw-bold mt-2">
                Powerful Management Features
            </h2>

        </div>


        <div class="row g-4">

            @php
                $features = [
                    [
                        'icon' => 'fa-users',
                        'title' => 'Customer Management',
                        'text' => 'Create, update and manage customer records easily.'
                    ],
                    [
                        'icon' => 'fa-cart-shopping',
                        'title' => 'Sales Tracking',
                        'text' => 'Keep records of customer purchases and outstanding debts.'
                    ],
                    [
                        'icon' => 'fa-money-bill-transfer',
                        'title' => 'Installment Payments',
                        'text' => 'Record payments and automatically monitor balances.'
                    ],
                    [
                        'icon' => 'fa-chart-column',
                        'title' => 'Reports & Analytics',
                        'text' => 'Understand your boutique performance through reports.'
                    ],
                    [
                        'icon' => 'fa-file-invoice',
                        'title' => 'Payment History',
                        'text' => 'View previous payments and transaction records.'
                    ],
                    [
                        'icon' => 'fa-mobile-screen',
                        'title' => 'Responsive Design',
                        'text' => 'Access the system comfortably on different devices.'
                    ],
                ];
            @endphp


            @foreach($features as $feature)

                <div class="col-md-6 col-lg-4">

                    <div class="card border-0 shadow-sm h-100 p-3">

                        <div class="card-body">

                            <div
                                class="rounded-3 d-flex align-items-center justify-content-center mb-4"
                                style="
                                    width:55px;
                                    height:55px;
                                    background:#f5ead2;
                                    color:#c89b3c;
                                "
                            >
                                <i class="fa-solid {{ $feature['icon'] }} fs-5"></i>
                            </div>

                            <h5 class="fw-bold">
                                {{ $feature['title'] }}
                            </h5>

                            <p class="text-muted mb-0">
                                {{ $feature['text'] }}
                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


<section id="how-it-works" class="py-5 bg-light">

    <div class="container py-5">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                How It Works
            </h2>

            <p class="text-muted">
                Simple steps for managing your boutique records.
            </p>

        </div>


        <div class="row g-4 text-center">

            <div class="col-md-4">

                <div class="display-5 fw-bold">
                    01
                </div>

                <h5 class="fw-bold mt-3">
                    Add Customer
                </h5>

                <p class="text-muted">
                    Register customer information in the system.
                </p>

            </div>


            <div class="col-md-4">

                <div class="display-5 fw-bold">
                    02
                </div>

                <h5 class="fw-bold mt-3">
                    Record Sale
                </h5>

                <p class="text-muted">
                    Record the customer's purchase and amount owed.
                </p>

            </div>


            <div class="col-md-4">

                <div class="display-5 fw-bold">
                    03
                </div>

                <h5 class="fw-bold mt-3">
                    Track Payments
                </h5>

                <p class="text-muted">
                    Record installments and monitor the remaining balance.
                </p>

            </div>

        </div>

    </div>

</section>


<footer class="bg-dark text-white py-4">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <strong>
                    <i class="fa-solid fa-store me-2"></i>
                    Boutique Management System
                </strong>

            </div>

            <div class="col-md-6 text-md-end mt-3 mt-md-0">

                <small class="text-secondary">
                    &copy; {{ date('Y') }} All Rights Reserved.
                </small>

            </div>

        </div>

    </div>

</footer>

@endsection