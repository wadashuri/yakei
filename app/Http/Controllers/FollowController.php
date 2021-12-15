<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowController extends Controller
{
      public function index()
    {
         return view('follows.index', [
          'title' => 'フォロー一覧',
        ]);
    }
    
     public function store()
    {
        
    }
    
     public function destroy()
    {
        
    }
    
    public function followerIndex()
    {
         return view('follows.follower_index', [
          'title' => 'フォロワー一覧',
        ]);
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}
