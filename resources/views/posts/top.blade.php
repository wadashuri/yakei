@extends('layouts.logged_in')
 
@section('title', $title)

@section('content')
<form method="GET" action="{{route('posts.index')}}">
         <h3>東京夜景</h3>
        <div class="tokyo">
     <input type="submit" name="comment" href="渋谷" class="btn btn-secondary" value="渋谷">
     <input type="submit" name="comment" href="港区" class="btn btn-secondary" value="港区">
    <input type="submit" name="comment" href="新宿" class="btn btn-secondary" value="新宿">
    <input type="submit" name="comment" href="東京駅" class="btn btn-secondary" value="東京駅">
     <input type="submit" name="comment" href="有楽町" class="btn btn-secondary" value="有楽町">
    <input type="submit" name="comment" href="新橋" class="btn btn-secondary" value="新橋">
    <input type="submit" name="comment" href="恵比寿" class="btn btn-secondary" value="恵比寿">
     <input type="submit" name="comment" href="池袋" class="btn btn-secondary" value="池袋">
    <input type="submit" name="comment" href="六本木" class="btn btn-secondary" value="六本木">
    <input type="submit" name="comment" href="赤坂" class="btn btn-secondary" value="赤坂">
     <input type="submit" name="comment" href="秋葉原" class="btn btn-secondary" value="秋葉原">
    <input type="submit" name="comment" href="上野" class="btn btn-secondary" value="上野">
    <input type="submit" name="comment" href="浅草" class="btn btn-secondary" value="浅草">
    <input type="submit" name="comment" href="錦糸町" class="btn btn-secondary" value="錦糸町">
    <input type="submit" name="comment" href="品川" class="btn btn-secondary" value="品川">
     <input type="submit" name="comment" href="吉祥寺" class="btn btn-secondary" value="吉祥寺">
    <input type="submit" name="comment" href="北千住" class="btn btn-secondary" value="北千住">
    <input type="submit" name="comment" href="町田" class="btn btn-secondary" value="町田">
     <input type="submit" name="comment" href="立川" class="btn btn-secondary" value="立川">
    <input type="submit" name="comment" href="八王子" class="btn btn-secondary" value="八王子">
    </div>
  <h3>東京近辺のエリアから探す</h3>
   <input type="submit" name="comment" href="神奈川" class="btn btn-secondary" value="神奈川">
    <input type="submit" name="comment" href="千葉" class="btn btn-secondary" value="千葉">
    <input type="submit" name="comment" href="埼玉" class="btn btn-secondary" value="埼玉">
    <h3>ジャンルから探す</h3>
    <input type="submit" name="comment" href="工場夜景" class="btn btn-info" value="工場夜景">
    <input type="submit" name="comment" href="イルミネーション" class="btn btn-info" value="イルミネーション">
    <input type="submit" name="comment" href="展望台" class="btn btn-info" value="展望台">
    <input type="submit" name="comment" href="展望台" class="btn btn-info" value="展望台">
     </form>
</div>
@endsection