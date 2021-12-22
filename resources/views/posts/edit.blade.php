@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  <form method="POST" action="{{ route('posts.update', $post) }}">
      @csrf
      @method('patch')
      <div>
          <label>
            コメント:
            <input type="text" name="comment" value="{{ $post->comment }}">
          </label>
      </div>
     <div>
          <label>
            説明：
            <input type="text" name="explanation" value="{{ $post->explanation }}">
          </label>
      </div>
      <input type="submit" value="投稿">
  </form>
@endsection