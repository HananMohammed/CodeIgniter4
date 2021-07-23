<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'blogs';
	protected $primaryKey           = 'id';
//	protected $useAutoIncrement     = true;
//	protected $insertID             = 0;
//	protected $returnType           = 'array';
//	protected $useSoftDeletes       = false;
//	protected $protectFields        = true;
	protected $allowedFields        = ['title', 'content'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
//	protected $validationRules      = [];
//	protected $validationMessages   = [];
//	protected $skipValidation       = false;
//	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = ['checkTitle', 'hashPassword'];
//	protected $afterInsert          = [];
//	protected $beforeUpdate         = [];
//	protected $afterUpdate          = [];
//	protected $beforeFind           = [];
//	protected $afterFind            = [];
//	protected $beforeDelete         = [];
//	protected $afterDelete          = [];

    /** check Title
     * @param array $data
     * @return array
     */
    public function checkTitle(array $data){
	    $newTitle = $data['data']['title'].'Extra data here ..........';
        $data['data']['title'] = $newTitle;
        return $data ;
    }

    /** hash Password
     * @param array $data
     * @return array
     */
    public function hashPassword(array $data){
        $data['data']['password'] = password_hash( $data['data']['password'] , PASSWORD_DEFAULT);
        return $data ;
    }
}
