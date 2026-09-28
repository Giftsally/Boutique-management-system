

<?php $__env->startSection('title', 'Customers'); ?>

<?php $__env->startSection('page-title', 'Customers'); ?>

<?php $__env->startSection('content'); ?>

<div class="admin-layout">

    <?php echo $__env->make('components.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="main-wrapper">

        <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <main class="main-content">

            <?php echo $__env->make('components.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div class="container-fluid">


                
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">

                    <div>

                        <h2 class="fw-bold mb-1">
                            Customers
                        </h2>

                        <p class="text-muted mb-0">
                            Manage your boutique customers.
                        </p>

                    </div>


                    <button
                        class="btn btn-dark"
                        data-bs-toggle="modal"
                        data-bs-target="#addCustomerModal"
                    >
                        <i class="fa-solid fa-plus me-2"></i>
                        Add Customer
                    </button>

                </div>


                
                <div class="dashboard-panel mb-4">

                    <div class="row g-3">

                        <div class="col-md-8">

                            <div class="input-group">

                                <span class="input-group-text bg-white">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>

                                <input
                                    type="search"
                                    class="form-control"
                                    placeholder="Search customers..."
                                >

                            </div>

                        </div>


                        <div class="col-md-4">

                            <select class="form-select">

                                <option selected>
                                    All Customers
                                </option>

                                <option>
                                    Active
                                </option>

                                <option>
                                    Inactive
                                </option>

                                <option>
                                    Fully Paid
                                </option>

                                <option>
                                    Outstanding
                                </option>

                            </select>

                        </div>

                    </div>

                </div>


                
                <div class="dashboard-panel">

                    <div class="table-responsive">

                        <table class="table align-middle mb-0">

                            <thead>

                                <tr>

                                    <th>Customer</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Balance</th>
                                    <th>Joined</th>
                                    <th class="text-end">Actions</th>

                                </tr>

                            </thead>


                            <tbody>

                                
                                <tr>

                                    <td>

                                        <div class="d-flex align-items-center">

                                            <div class="admin-avatar me-2">
                                                <i class="fa-solid fa-user"></i>
                                            </div>

                                            <div>

                                                <strong>
                                                    No customers yet
                                                </strong>

                                                <small class="d-block text-muted">
                                                    Add your first customer
                                                </small>

                                            </div>

                                        </div>

                                    </td>

                                    <td>—</td>

                                    <td>
                                        <span class="badge bg-secondary">
                                            No Data
                                        </span>
                                    </td>

                                    <td>₦0</td>

                                    <td>—</td>

                                    <td class="text-end">

                                        <button
                                            class="btn btn-sm btn-outline-secondary"
                                            disabled
                                        >
                                            <i class="fa-solid fa-eye"></i>
                                        </button>

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




<div
    class="modal fade"
    id="addCustomerModal"
    tabindex="-1"
    aria-hidden="true"
>

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content border-0 shadow">

            <div class="modal-header">

                <h5 class="modal-title fw-bold">
                    <i class="fa-solid fa-user-plus me-2"></i>
                    Add Customer
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                ></button>

            </div>


           <form method="POST" action="<?php echo e(route('customers.store')); ?>">

                <?php echo csrf_field(); ?>

                <div class="modal-body">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Customer full name"
                                required
                            >

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Phone Number
                            </label>

                            <input
                                type="text"
                                name="phone"
                                class="form-control"
                                placeholder="080..."
                            >

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="customer@example.com"
                            >

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Gender
                            </label>

                            <select
                                name="gender"
                                class="form-select"
                            >

                                <option value="">
                                    Select gender
                                </option>

                                <option value="male">
                                    Male
                                </option>

                                <option value="female">
                                    Female
                                </option>

                            </select>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Date of Birth
                            </label>

                            <input
                                type="date"
                                name="date_of_birth"
                                class="form-control"
                            >

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Status
                            </label>

                            <select
                                name="status"
                                class="form-select"
                            >

                                <option value="active">
                                    Active
                                </option>

                                <option value="inactive">
                                    Inactive
                                </option>

                            </select>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Address
                            </label>

                            <textarea
                                name="address"
                                class="form-control"
                                rows="2"
                                placeholder="Customer address"
                            ></textarea>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Notes
                            </label>

                            <textarea
                                name="notes"
                                class="form-control"
                                rows="2"
                                placeholder="Additional notes..."
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
                        Save Customer
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xammp\htdocs\boutique-management\resources\views/customers/index.blade.php ENDPATH**/ ?>