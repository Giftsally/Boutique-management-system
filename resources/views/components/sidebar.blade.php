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
            href="{{ route('dashboard') }}"
            class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
        >
            <i class="fa-solid fa-chart-line"></i>
            <span>Dashboard</span>
        </a>


        <a
            href="{{ route('customers.index') }}"
            class="sidebar-link {{ request()->routeIs('customers.*') ? 'active' : '' }}"
        >
            <i class="fa-solid fa-users"></i>
            <span>Customers</span>
        </a>


        <a
            href="{{ route('payments.index') }}"
            class="sidebar-link {{ request()->routeIs('payments.*') ? 'active' : '' }}"
        >
            <i class="fa-solid fa-money-bill-transfer"></i>
            <span>Payments</span>
        </a>


        <div class="menu-heading">
            MANAGEMENT
        </div>


        <a
            href="{{ route('reports.index') }}"
            class="sidebar-link {{ request()->routeIs('reports.index') ? 'active' : '' }}"
        >
            <i class="fa-solid fa-file-invoice"></i>
            <span>Reports</span>
        </a>


        <a
            href="{{ route('reports.analytics') }}"
            class="sidebar-link {{ request()->routeIs('reports.analytics') ? 'active' : '' }}"
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

</aside>