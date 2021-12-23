<?php

namespace App\Http\Controllers;
use App\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
   public function index()
    {
        $follow_users = \Auth::user()->follow_users;
        return view('follows.index', [
          'title' => 'フォロー一覧',
          'follow_users' => $follow_users,
        ]);
    }
    
    public function store(Request $request)
    {
        $user = \Auth::user();
        Follow::create([
           'user_id' => $user->id,
           'follow_id' => $request->follow_id,
        ]);
        \Session::flash('success', 'フォローしました');
        return redirect()->route('posts.index');
    }
 
    // フォロー削除処理
    public function destroy($id)
    {
        $follow = \Auth::user()->follows->where('follow_id', $id)->first();
        $follow->delete();
        \Session::flash('success', 'フォロー解除しました');
        return redirect()->route('posts.index');
    }
    
    public function followerIndex()
    {
        $followers = \Auth::user()->followers;
        return view('follows.follower_index', [
          'title' => 'フォロワー一覧',
          'followers' => $followers,
        ]);
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}
