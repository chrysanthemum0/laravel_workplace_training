<?php $__env->startSection('content'); ?>
<h2>マイページ</h2>
<form action="<?php echo e(route('logout')); ?>" method="post" >
    <?php echo csrf_field(); ?>
        <input type="submit" value="ログアウト">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\laravel\keyaki\resources\views/home/index.blade.php ENDPATH**/ ?>