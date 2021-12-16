@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  <div>
    名前
    <P>{{$user->name}}</P>
    コメント
    <p>{{$user->profile}}</p>
    <div class="post_body_main_img">
  @if($user->image !== '')
      <img src="{{ asset('storage/' . $user->image) }}">
  @else
      <img src="{{ asset('images/no_image.png') }}">
  @endif
</div>
  </div>
@endsection