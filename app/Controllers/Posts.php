<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomModel;

class Posts extends BaseController
{
	public function index()
	{
        $connection = db_connect();
        $model = new CustomModel($connection);
        print_r($model->all()); die;
        return view('posts', $data);
	}
    public function where()
    {
        $connection = db_connect();
        $model = new CustomModel($connection);
        echo "<pre>";
        print_r($model->where());
        echo "</pre>";die;
        return view('posts', $data);
    }
    public function join()
    {
        $connection = db_connect();
        $model = new CustomModel($connection);
        echo "<pre>";
        print_r($model->join());
        echo "</pre>";die;
        return view('posts', $data);
    }
    public function like()
    {
        $connection = db_connect();
        $model = new CustomModel($connection);
        echo "<pre>";
        print_r($model->like());
        echo "</pre>";die;
        return view('posts', $data);
    }
    public function grouping()
    {
        $connection = db_connect();
        $model = new CustomModel($connection);
        echo "<pre>";
        print_r($model->grouping());
        echo "</pre>";die;
        return view('posts', $data);
    }
}
