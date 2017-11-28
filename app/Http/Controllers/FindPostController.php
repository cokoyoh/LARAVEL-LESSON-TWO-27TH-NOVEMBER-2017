<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class FindPostController extends Controller
{
    public function userPosts() {
        $posts = User::find(Auth::user()->id)->posts;
        return view('posts.user_posts', compact('posts'));
    }
}
