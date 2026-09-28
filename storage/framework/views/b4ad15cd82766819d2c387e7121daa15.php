<nav class="top-navbar">

    <div class="navbar-left">

        <button
            type="button"
            class="sidebar-toggle"
            id="sidebarToggle"
        >
            <i class="fa-solid fa-bars"></i>
        </button>

        <div>
            <h5 class="page-title">
                <?php echo $__env->yieldContent('page-title', 'Dashboard'); ?>
            </h5>

            <small class="text-muted">
                Boutique Management System
            </small>
        </div>

    </div>


    <div class="navbar-right">

        <button
            type="button"
            class="icon-button"
            title="Notifications"
        >
            <i class="fa-regular fa-bell"></i>

            <span class="notification-dot"></span>
        </button>


        <div class="admin-profile">

            <div class="admin-avatar">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="admin-info">
                <strong>Administrator</strong>
                <small>Admin</small>
            </div>

        </div>

    </div>

</nav><?php /**PATH C:\xammp\htdocs\boutique-management\resources\views/components/navbar.blade.php ENDPATH**/ ?>