<aside class="sidebar" id="sidebar">

    <div class="sidebar-brand">

        <div class="brand-icon">
            <i class="fa-solid fa-store"></i>
        </div>

        <div class="brand-text">
            <span class="brand-title">Boutique</span>
            <small>Management System</small>
        </div>

    </div>


    <div class="sidebar-menu">

        <div class="menu-heading">
            MAIN MENU
        </div>

        <a
            href="<?php echo e(route('dashboard')); ?>"
            class="sidebar-link <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>"
        >
            <i class="fa-solid fa-chart-line"></i>
            <span>Dashboard</span>
        </a>


        <a
            href="<?php echo e(route('customers.index')); ?>"
            class="sidebar-link <?php echo e(request()->routeIs('customers.*') ? 'active' : ''); ?>"
        >
            <i class="fa-solid fa-users"></i>
            <span>Customers</span>
        </a>


        <a
            href="<?php echo e(route('payments.index')); ?>"
            class="sidebar-link <?php echo e(request()->routeIs('payments.*') ? 'active' : ''); ?>"
        >
            <i class="fa-solid fa-money-bill-transfer"></i>
            <span>Payments</span>
        </a>


        <div class="menu-heading">
            MANAGEMENT
        </div>


        <a
            href="<?php echo e(route('reports.index')); ?>"
            class="sidebar-link <?php echo e(request()->routeIs('reports.index') ? 'active' : ''); ?>"
        >
            <i class="fa-solid fa-file-invoice"></i>
            <span>Reports</span>
        </a>


        <a
            href="<?php echo e(route('reports.analytics')); ?>"
            class="sidebar-link <?php echo e(request()->routeIs('reports.analytics') ? 'active' : ''); ?>"
        >
            <i class="fa-solid fa-chart-pie"></i>
            <span>Analytics</span>
        </a>

    </div>


    <div class="sidebar-footer">

        <a href="#" class="sidebar-link logout-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>

    </div>

</aside><?php /**PATH C:\xammp\htdocs\boutique-management\resources\views/components/sidebar.blade.php ENDPATH**/ ?>