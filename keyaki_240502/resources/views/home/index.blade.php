@extends('layouts.app')

@section('content')
<h2>マイページ</h2>
<form action="{{ route('logout') }}" method="post" >
    @csrf
        <input type="submit" value="ログアウト">
</form>
@endsection
