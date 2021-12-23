@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >
      @csrf
      <ul>
        <li>
      <div>
          <label>
            場所:
            <input type="text" name="comment" placeholder="例：東京/渋谷/SHIBUYA SKY/展望台">
          </label>
      </div>
      </li>
      <li>
      <div>
          <label>
            説明：
            <input type="text" name="explanation">
          </label>
      </div>
      </li>
      <li>
      <div>
          <label>
            画像:
            <input type="file" name="image">
          </label>
      </div>
      <input type="submit" value="投稿">
      </li>
      </ul>
  </form>
@endsection