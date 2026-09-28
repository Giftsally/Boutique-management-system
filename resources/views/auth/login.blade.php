@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')

<div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">

                            <div
                                class="mx-auto mb-3 rounded-3 d-flex align-items-center justify-content-center"
                                style="
                                    width:60px;
                                    height:60px;
                                    background:#f5ead2;
                                    color:#c89b3c;
                                "
                            >
                                <i class="fa-solid fa-store fs-4"></i>
                            </div>

                            <h3 class="fw-bold">
                                Welcome Back
                            </h3>

                            <p class="text-muted mb-0">
                                Sign in to your admin account
                            </p>

                        </div>


                        @include('components.alert')


                        <form method="POST" action="#">

                            @csrf

                            <div class="mb-3">

                                <label class="form-label fw-semibold">
                                    Email Address
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-white">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter your email"
                                        required
                                    >

                                </div>

                            </div>


                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Password
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-white">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>

                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="Enter your password"
                                        required
                                    >

                                </div>

                            </div>


                            <button
                                type="submit"
                                class="btn btn-dark w-100 py-2"
                            >
                                <i class="fa-solid fa-right-to-bracket me-2"></i>
                                Sign In
                            </button>

                        </form>


                        <div class="text-center mt-4">

                            <a
                                href="{{ route('home') }}"
                                class="text-decoration-none text-muted"
                            >
                                <i class="fa-solid fa-arrow-left me-1"></i>
                                Back to website
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection