@extends('layouts.logged_in')
 
@section('content')
  <h1>{{ $title }}</h1>
  <a href="{{route('posts.create')}}">新規投稿</a>
  <ul>
      @forelse($posts as $post)
          <li>
            {{ $post->user->name }}:
            {{ $post->comment }}
            ({{ $post->created_at }})
            [<a href="{{ route('posts.edit', $post) }}">編集</a>]
            <form method="post" class="delete" action="{{ route('posts.destroy', $post) }}">
              @csrf
              @method('delete')
              <input type="submit" value="削除">
            </form>
          </li>
      @empty
          <li>投稿がありません。</li>
      @endforelse
  </ul>
@endsection