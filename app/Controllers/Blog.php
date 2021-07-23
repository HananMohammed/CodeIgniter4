<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use CodeIgniter\Model;

class Blog extends BaseController
{
	public function index()
	{
        $posts = ["title1", "title2", "title3"];
        $data = ["meta_title" => 'Single Blog ', "title" => 'this is Blogs page', "posts" => $posts];
        return view('blog', $data);
    }

	public function post($id)
    {
        $model = new BlogModel();
        $post = $model->find($id);
        if ($post)
            $data = ["meta_title" =>  $post["title"], "title" =>  $post["title"], "post" => $post];
        else
            $data = ["meta_title" => 'post not found', "title" => 'post not found'];

        return view('single_post', $data);
    }

    public function newPost()
    {
        $data = ["meta_title" => 'new post ', "title" => 'create new post'];
        if ($this->request->withMethod('post')){
            $model = new BlogModel();
            $model->save($_POST);
        }
        return view('new_post', $data);
    }
    public function edit($id)
    {
        $model = new BlogModel();
        $post = $model->find($id);
        $data = ["meta_title" => $post["title"], "title" => $post["title"], "posts" => $post];
        if ($this->request->withMethod('post')){
            $_POST['id'] = $id;
            $model->save($_POST);
            $post = $model->find($id);
        }
        $data['post']= $post;

        return view('single_post', $data);
    }

    public function delete($id){
        $model = new BlogModel();
        $post = $model->find($id);
        if ($post){
            $model->delete($id);
            return redirect()->to('/blog');
        }
    }
}
