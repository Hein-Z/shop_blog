<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use TCG\Voyager\Models\Post as ModelsPost;

class Post extends ModelsPost
{
    use HasFactory;

    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'title'=>11,
            'meta_description' => 9,
            'body' => 10,
            'meta_keywords' => 5,
            'seo_title' => 2,
        ],
    ];
}
