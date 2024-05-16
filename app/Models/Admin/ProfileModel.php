<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'admins';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['fullname', 'username', 'email', 'password', 'phone_number', 'address'];

    public function getAdminByUsername($username)
    {
        $username = ltrim($username, '@');
        dd($username);
        return $this->where(['username' => $username])->first();
    }
}
