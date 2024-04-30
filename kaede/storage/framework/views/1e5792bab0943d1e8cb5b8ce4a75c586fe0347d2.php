<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kaedeアプリ</title>
</head>
<body>
    <h1>書籍詳細</h1>
    <h2><?php echo e($book->title); ?></h2>
    <p>著者 : <?php echo e($book->author); ?></p>
    <p>出版日 : <?php echo e($book->published_on); ?></p>
    <a href="/">戻る</a>
</body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel\kaede\resources\views/show.blade.php ENDPATH**/ ?>