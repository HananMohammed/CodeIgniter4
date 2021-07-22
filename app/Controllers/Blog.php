<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blog extends BaseController
{
	public function index()
	{
	    $data = ["meta_title" => 'Blog ', "title" => 'this is Blog page'];
	    echo view('layouts/header', $data);
	    echo view('layouts/menu');
		echo view('blog');
        echo view('layouts/footer');

    }

	public function post()
    {
        $posts = ["title1", "title2", "title3"];
        $data = ["meta_title" => 'Single Blog ', "title" => 'this is Posts page', "posts" => $posts];
        echo view('layouts/header', $data);
        echo view('layouts/menu');
        echo view('single_post');
        echo view('layouts/footer');
    }
}
