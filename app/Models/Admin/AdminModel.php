<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['first_name', 'last_name', 'username', 'email', 'password', 'phone_number'];

    public function getAdmins()
    {
        return $this->findAll();
    }

    public function getAdminById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getAdminByUsername($username)
    {
        $username = ltrim($username, '@');
        return $this->where(['username' => $username])->first();
    }

    public function getAdminBySearch($keyword)
    {
        return $this->where("CONCAT(first_name, ' ', last_name, ' ', username, ' ', email, ' ', phone_number) LIKE '%$keyword%'", null, true)
            ->findAll();
    }
}
