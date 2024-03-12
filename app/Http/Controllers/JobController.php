<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(20);
        return view('job.index', [
            'title' => 'Jobs',
            'active' => 'jobs',
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::where('id' ,$id)
            ->first();
        return view('job.show',[
            'title' => 'Show',
            'active' => 'jobs',
            'post'=> $post
        ]);
    }
}
