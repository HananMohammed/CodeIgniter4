<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel
{
	protected $db;

	public function __construct(ConnectionInterface $connection)
    {
        $this->db = $connection;
    }

    public function all(){
	    return $this->db->table('blogs')->get()->getResult();
    }

    public function where(){
        return $this->db->table('blogs')
                        ->where( ['id > ' => 5] )
                        ->where( ['id < ' => 9] )
                        ->where( ['id != ' => 7] )
                        ->orderBy('id', 'DESC')
                        ->get()
                        ->getResult();
    }

    public function join(){
        return $this->db->table('blogs')
                        ->select('blogs.title, blogs.content, blogs.id as post_id, blogs.post_author , users.id as user_id, users.name, users.email')
                        ->where( ['blogs.id > ' => 5] )
                        ->where( ['blogs.id < ' => 9] )
                        ->join('users', 'blogs.post_author = users.id')
                        ->get()
                        ->getResult();
    }

    public function like(){
        return $this->db->table('blogs')
            ->select('blogs.title, blogs.content, blogs.id as post_id, blogs.post_author , users.id as user_id, users.name, users.email')
            ->like( 'blogs.title', 'ostora' )
            ->join('users', 'blogs.post_author = users.id')
            ->get()
            ->getResult();
    }

    public function grouping(){
        return $this->db->table('blogs')
            ->select('blogs.title, blogs.content, blogs.id as post_id, blogs.post_author , users.id as user_id, users.name, users.email')
            ->groupStart()
            ->where(['blogs.id' => 5, 'blogs.created_at < ' => '2021-07-23 11:10:57'])
            ->groupEnd()
            ->orWhere('blogs.post_author', 1)
           // ->orWhereIn('email', ['hanan@gmail.com','test@gmail.com'])
            ->join('users', 'blogs.post_author = users.id')
            ->get()
            ->getResult();
    }

    public function getPosts(){

	    $builder = $this->db->table('blogs');
	    $builder->join('users', 'blogs.post_author = users.id');
        $posts = $builder->get()->getResult();

        return $posts;
    }


}
