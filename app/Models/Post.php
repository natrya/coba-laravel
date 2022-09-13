<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul tulisan pertama",
            "author"=>"Ryan Fabella",
            "slug" => "judul-tulisan-pertama",
            "body" => "bla blab la pertama"
        ],
        [
            "title" => "Judul tulisan kedua",
            "author"=>"Millardi mahardika",
            "slug" => "judul-tulisan-kedua",
            "body" => "bla blab la kedua"
        ]
    ];
    public static function all()
	{
		return collect(self::$blog_posts);
	}
	Public static function find($slug)
	{
		$posts = static::all();
		return $posts->firstWhere('slug',$slug);
	}

}
