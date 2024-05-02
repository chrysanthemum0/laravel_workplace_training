<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?></title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <a class="brand" href="/"><?php echo e(config('app.name')); ?></a>
        </div>
    </header>
    <main>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
</body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel\keyaki\resources\views/layouts/app.blade.php ENDPATH**/ ?>