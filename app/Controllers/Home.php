<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        $data = ["meta_title" => 'HomePage  ', "title" => 'Welcome to Our Website HomePage'];

		return view('welcome_message', $data);
	}
}
