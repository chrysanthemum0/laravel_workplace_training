<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kaede アプリ</title>
</head>
    <body>
        <h1>書籍情報の編集</h1>
        <form action="<?php echo e(route('books.update', $book->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title"
                    value="<?php echo e($book->title); ?>"></dd>
                <dt>著者</dt>
                <dd><input type="text" name="author"
                    value="<?php echo e($book->author); ?>"></dd>
                <dt>出版日</dt>
             <dd><input type="date" name="published_on"
                value="<?php echo e($book->published_on); ?>"></dd>
            </dl>
            <button type="submit">更新する</button>
        </form>
        <hr>
        <a href="/">戻る</a>
    </body>
</html>
<?php /**PATH C:\Users\student\Desktop\laravel\kaede\resources\views/edit.blade.php ENDPATH**/ ?>