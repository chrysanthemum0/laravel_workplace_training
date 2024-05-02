<?php $__env->startSection('content'); ?>
            <h1>会員登録</h1>
            <?php echo $__env->make('commons.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(route('register')); ?>" method="post" >
                <?php echo csrf_field(); ?>
                <p>
                    <label>名前</label><br>
                    <input type="text" name="name" value="<?php echo e(old('name')); ?>">
                </p>
                <p>
                    <label>メールアドレス</label><br>
                    <input type="email" name="email" value="<?php echo e(old('email')); ?>">
                </p>
                <p>
                    <label>パスワード</label><br>
                    <input type="password" name="password" value="">
                </p>
                <p>
                    <label>パスワード確認</label><br>
                    <input type="password" name="password_confirmation" value="">
                </p>
                <p>
                    <button type="submit">会員登録</button>
                </p>
                <p>または</p>
                <p>
                    <a href="<?php echo e(route('login')); ?>">ログイン</a>
                </p>
            </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\laravel\keyaki\resources\views/auth/register.blade.php ENDPATH**/ ?>