@extends('layouts.logged_in')
 
@section('content')
  <h1>{{ $title }}</h1>
  <a href="{{route('posts.create')}}">新規投稿</a>
  <ul class="posts">
      @forelse($posts as $post)
          <li class="post">
              <div class="post_body">
                <div class="post_body_heading">
                  <div class="post_body_main_comment">
                    <h2>{{ $post->comment }}</h2>
                  </div>
                  更新日
                  ({{ $post->created_at }})
                </div>
                <div class="post_body_main">
                 <div class="post_body_main_img">
                    @if($post->image !== '')
                        <img src="{{ \Storage::url($post->image) }}">
                    @else
                        <img src="{{ asset('images/no_image.png') }}">
                    @endif
                  </div>
                </div>
                <a href="{{ route('posts.edit_image', $post) }}">画像を変更</a>
                <div class="post_body_footer">
                  お気に入りリストに保存
                  <a class="like_button">{{ $post->isLikedBy(Auth::user()) ? '★' : '☆' }}</a>
                  <form method="post" class="like" action="{{ route('posts.toggle_like', $post) }}">
                    @csrf
                    @method('patch')
                  </form>
                  [<a href="{{ route('posts.edit', $post) }}">編集</a>]
                  <form class="delete" method="post" action="{{ route('posts.destroy', $post) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除">
                  </form>
                </div>
            </div>
            {{ $post->explanation }}
          </li>
      @empty
          夜景はありません。
      @endforelse
  </ul>
  <script>
    /* global $ */
    $('.like_button').on('click', (event) => {
        $(event.currentTarget).next().submit();
    })
  </script>
@endsection