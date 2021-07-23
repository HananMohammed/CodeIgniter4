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

    public function getPosts(){

	    $builder = $this->db->table('blogs');
	    $builder->join('users', 'blogs.post_author = users.id');
        $posts = $builder->get()->getResult();

        return $posts;
    }


}
