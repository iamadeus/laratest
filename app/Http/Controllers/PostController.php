<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            dump($post->title);
            dd('end');
        }

    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'sometext araflsgdgldg',
                'some_text' => 'some content fsdgjsdgldshgdsl',
                'image' => 'blatrash.jpg',
                'likes' => 22,
                'is_published' => 2,
            ],
            [
                'title' => 'ansometext araflsgdgldg',
                'some_text' => 'ansome content fsdgjsdgldshgdsl',
                'image' => 'anblatrash.jpg',
                'likes' => 222,
                'is_published' => 2,
            ]
        ];
        foreach ($postsArr as $item) {
            Post::create($item);
        }
        dd('created');
    }
    public function update()
    {
        $post = Post::find(6);
        $post->update([
            'title'=>'updated',
            'some_text'=>'updated',
            'image'=>'updated',
            'likes'=>1000,
            'is_published'=>0,
        ]);
        dd('updated');
    }
    public function delete()
    {
        $post = Post::find(6);
        $post->delete();
        dd('deleted');
    }
}
