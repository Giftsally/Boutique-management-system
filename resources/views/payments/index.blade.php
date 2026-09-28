@extends('layouts.app')

@section('title', 'Payments')

@section('page-title', 'Payments')

@section('content')

<div class="admin-layout">

    @include('components.sidebar')

    <div class="main-wrapper">

        @include('components.navbar')

        <main class="main-content">

            @include('components.alert')

            <div class="container-fluid">


                <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">

                    <div>

                        <h2 class="fw-bold mb-1">
                            Payments
                        </h2>

                        <p class="text-muted mb-0">
                            Track customer installment payments.
                        </p>

                    </div>


                    <button
                        class="btn btn-dark"
                        data-bs-toggle="modal"
                        data-bs-target="#addPaymentModal"
                    >
                        <i class="fa-solid fa-plus me-2"></i>
                        Record Payment
                    </button>

                </div>


                {{-- Payment Summary --}}
                <div class="row g-4 mb-4">

                    <div class="col-md-4">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-money-bill-wave"></i>
                            </div>

                            <div>
                                <span>Total Collected</span>
                                <h3>₦0</h3>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>

                            <div>
                                <span>Outstanding</span>
                                <h3>₦0</h3>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="dashboard-card">

                            <div class="card-icon">
                                <i class="fa-solid fa-check-circle"></i>
                            </div>

                            <div>
                                <span>Fully Paid</span>
                                <h3>0</h3>
                            </div>

                        </div>

                    </div>

                </div>


                {{-- Payments Table --}}
                <div class="dashboard-panel">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <h5 class="fw-bold mb-0">
                            Payment History
                        </h5>

                        <div class="input-group" style="max-width:300px;">

                            <span class="input-group-text bg-white">
                                <i class="fa-solid fa-search"></i>
                            </span>

                            <input
                                type="search"
                                class="form-control"
                                placeholder="Search payment..."
                            >

                        </div>

                    </div>


                    <div class="table-responsive">

                        <table class="table align-middle">

                            <thead>

                                <tr>

                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Date</th>
                                    <th>Reference</th>
                                    <th>Status</th>

                                </tr>

                            </thead>


                            <tbody>

                                <tr>

                                    <td colspan="6" class="text-center py-5">

                                        <i class="fa-solid fa-receipt fs-1 text-muted mb-3"></i>

                                        <p class="text-muted mb-0">
                                            No payment records yet.
                                        </p>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>


{{-- ADD PAYMENT MODAL --}}

<div
    class="modal fade"
    id="addPaymentModal"
    tabindex="-1"
    aria-hidden="true"
>

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content border-0 shadow">

            <div class="modal-header">

                <h5 class="modal-title fw-bold">
                    <i class="fa-solid fa-money-bill-transfer me-2"></i>
                    Record Payment
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                ></button>

            </div>


            <form method="POST" action="#">

                @csrf

                <div class="modal-body">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="form-label">
                                Customer
                            </label>

                            <select
                                name="customer_id"
                                class="form-select"
                                required
                            >

                                <option value="">
                                    Select customer
                                </option>

                            </select>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Sale / Debt
                            </label>

                            <select
                                name="sale_id"
                                class="form-select"
                                required
                            >

                                <option value="">
                                    Select sale
                                </option>

                            </select>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Payment Amount
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    ₦
                                </span>

                                <input
                                    type="number"
                                    name="amount"
                                    class="form-control"
                                    min="1"
                                    step="0.01"
                                    placeholder="0.00"
                                    required
                                >

                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Payment Method
                            </label>

                            <select
                                name="payment_method"
                                class="form-select"
                                required
                            >

                                <option value="cash">
                                    Cash
                                </option>

                                <option value="transfer">
                                    Bank Transfer
                                </option>

                                <option value="pos">
                                    POS
                                </option>

                                <option value="other">
                                    Other
                                </option>

                            </select>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Payment Date
                            </label>

                            <input
                                type="date"
                                name="payment_date"
                                class="form-control"
                                value="{{ date('Y-m-d') }}"
                                required
                            >

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Reference
                            </label>

                            <input
                                type="text"
                                name="reference"
                                class="form-control"
                                placeholder="Optional reference"
                            >

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Notes
                            </label>

                            <textarea
                                name="notes"
                                class="form-control"
                                rows="3"
                                placeholder="Payment notes..."
                            ></textarea>

                        </div>

                    </div>

                </div>


                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-light"
                        data-bs-dismiss="modal"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="btn btn-dark"
                    >
                        <i class="fa-solid fa-save me-2"></i>
                        Save Payment
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection