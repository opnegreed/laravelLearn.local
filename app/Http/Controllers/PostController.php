<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function update()
    {

        $post = Post::find(6);

        $post->update([
            'title' => 'new updated',
            'image' => ' new updated',
        ]);
        dd('updated');

    }

    public function store(){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);

        return redirect()->route('post.index');
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
    }
    public function firstOrCreate()
        {
            $anotherPost = [
                'title' => 'some post',
                'image' => ' some image.png',
                'content' => ' some Content For Me',
                'likes' => '12',
                'is_published' => '1'
            ];

            $post = Post::firstOrCreate([
                'title' => 'some title phpstorm'
            ],[
                'title' => 'some title phpstorm',
                'image' => ' some image.png',
                'content' => ' some Content For Me',
                'likes' => '12',
                'is_published' => 1,
            ]);

            dump($post->content);
            dd('finished');
        }
}
