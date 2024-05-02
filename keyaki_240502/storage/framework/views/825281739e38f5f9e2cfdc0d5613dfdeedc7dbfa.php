<?php $__env->startSection('content'); ?>
            <h1>ログイン</h1>
            <?php echo $__env->make('commons.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(route('login')); ?>" method="post" >
                <?php echo csrf_field(); ?>
                <p>
                    <label>メールアドレス</label><br>
                    <input type="email" name="email" value="<?php echo e(old('email')); ?>">
                </p>
                <p>
                    <label>パスワード</label><br>
                    <input type="password" name="password" value="">
                </p>
                <p>
                    <button type="submit">ログイン</button>
                </p>
                <p>または</p>
                <p>
                    <a href="<?php echo e(route('register')); ?>">会員登録</a>
                </p>
            </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\laravel\keyaki\resources\views/auth/login.blade.php ENDPATH**/ ?>