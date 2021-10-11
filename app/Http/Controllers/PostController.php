<?php

namespace App\Http\Controllers;

use App\Models\Post;
use TCG\Voyager\Models\Category;


class PostController extends Controller
{
    public function index()
    {
        $pagination = 6;
        $categories = Category::all();
        if (\request()->category) {
            if (\request()->category === 'uncategorized') {
                $posts = Post::doesntHave('categories')->paginate($pagination);
                $categoryName = 'Uncategorized';
            } else {
                $posts = Post::with('categories')->whereHas('categories', function ($query) {
                    $query->where('slug', \request()->category);
                })->paginate($pagination);
                $categoryName = optional($categories->where('slug', \request()->category)->first())->name;
            }
        } else {
            $posts = Post::where('featured', true)->where('status', 'PUBLISHED')->inRandomOrder()->paginate($pagination);
            $categoryName = 'Feature';
        }

        return view('blog.blog', compact('posts', 'categories', 'categoryName'));

    }
    public function show(Post $post)
    {
        return view('blog.blog-details', compact('post'));
    }

    public function search()
    {
        request()->validate([
            'search' => 'required',
        ]);

        $posts = Post::search(request()->search)->paginate(8);
        $categories = Category::all();
        $categoryName = '';
        return view('blog.blog')->with(['posts' => $posts,
            'search' => request()->search,
            'categories' => $categories,
            'categoryName' => $categoryName,
        ]);
    }
}
