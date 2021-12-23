@extends('layouts.default')
 
@section('header')
<header class="header_image">
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top container">
    <a href="/" class="nav-link">トップページ</a>
    <a href="{{ route('posts.index') }}" class="nav-link">夜景一覧</a>
    <a href="{{ route('likes.index') }}" class="nav-link">お気に入りリスト</a>
    <form method="GET"　class="form-inline ml-auto" action="{{route('posts.index')}}">
<label>
    　地名を検索
            <input type="text"　class="form-control form-control-sm mr-2" name="comment" placeholder="例：渋谷・原宿">
          </label>
     <input type="submit" class="btn btn-primary" value="検索する">
     </form>
    <form class="form-inline ml-auto" action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" class="form-control form-control-sm mr-2" value="ログアウト">
            </form>
</nav>
</header>
@endsection