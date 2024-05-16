<?php

namespace App\Models\Auth\Admin;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'admins';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['fullname', 'username', 'email', 'password', 'phone_number'];
}