<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kaede アプリ</title>
</head>
<body>
    <h1>書籍一覧</h1>
    <p><a href="<?php echo e(route('books.create')); ?>">+新規作成</a></p>
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
            <a href="<?php echo e(route('books.show', $book->id)); ?>">
                <?php echo e($book->title); ?>

            </a>
        </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel\kaede\resources\views/index.blade.php ENDPATH**/ ?>