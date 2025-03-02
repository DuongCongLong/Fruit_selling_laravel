<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;

class BlogController extends Controller
{
    public function blogs(){
        $list_post = Post::where('status', '=', 1)
        ->orderby('created_at', 'desc')
        ->paginate(6);
        return view('frontend.blog', compact('list_post'));
    }
    public function detail($slug)
    {
        $list_post = Post::where('status', 1)
        ->where('slug', $slug)
        ->first();
        $post_detail = Post::where('status', 1)
        ->where('id', '!=', $list_post->id)
        ->where('topic_id', $list_post->topic_id)
        ->orderby('created_at', 'desc')
        ->limit(4)
        ->get();
        return view('frontend.post_detail', compact('list_post', 'post_detail'));
    }
    // public function topic($slug)
    // {
    //     $topic = Topic::where([['slug', '=', $slug], ['status', '=', 1]])
    //     ->select("id", "name")->first();
    //     if ($topic != null) {
    //         $list_post = Post::where('status', '=', 1)
    //         ->where('topic_id', $topic->id)
    //         ->orderby('created_at', 'desc')
    //         ->paginate(6);
    //         return view('frontend.post_topic', compact('list_post', 'topic'));
    //     } 
    // }
}
