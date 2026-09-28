<?php if(session('success')): ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">

        <i class="fa-solid fa-circle-check me-2"></i>

        <?php echo e(session('success')); ?>


        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
        ></button>

    </div>

<?php endif; ?>


<?php if(session('error')): ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        <i class="fa-solid fa-circle-exclamation me-2"></i>

        <?php echo e(session('error')); ?>


        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
        ></button>

    </div>

<?php endif; ?><?php /**PATH C:\xammp\htdocs\boutique-management\resources\views/components/alert.blade.php ENDPATH**/ ?>