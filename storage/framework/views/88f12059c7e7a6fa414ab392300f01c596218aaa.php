

<?php if(session('success')): ?>
    <div class="alert alert-success text-center">
        <button class="close" data-close="alert"></button>
        <?php echo session('success'); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger text-center">
        <button class="close" data-close="alert"></button>
        <?php echo session('error'); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/inc/message.blade.php ENDPATH**/ ?>