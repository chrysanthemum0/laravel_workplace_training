<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kaede アプリ</title>
</head>
    <body>
        <h1>書籍詳細</h1>
        <h2>{{ $book->title }}</h2>
        <p>著者 : {{ $book->author }}</p>
        <p>出版日 : {{$book->published_on}}</p>
        <a href="{{ route('books.edit', $book->id) }}">編集する</a>
        <a href="/">戻る</a>
        <form action="{{ route('books.destroy', ($book->id)) }}" method="post">
            @csrf
            @method('delete')
            <hr>
            <button type="submit">削除する</button>
        </form>
    </body>
</html>
