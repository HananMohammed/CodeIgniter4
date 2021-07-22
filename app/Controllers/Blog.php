<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blog extends BaseController
{
	public function index()
	{
	    $data = ["meta_title" => 'Blog ', "title" => 'this is Blog page'];
		return view('blog', $data);
    }

	public function post()
    {
        $posts = ["title1", "title2", "title3"];
        $data = ["meta_title" => 'Single Blog ', "title" => 'this is Posts page', "posts" => $posts];
        return view('single_post', $data);
    }
}
