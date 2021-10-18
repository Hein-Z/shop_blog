<?php

namespace TCG\Voyager\Http\Controllers;

use App\Models\Post;
use TCG\Voyager\Facades\Voyager;

class VoyagerController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return Voyager::view('voyager::index',compact('post'));
    }
}
