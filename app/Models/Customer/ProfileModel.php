<?php

namespace App\Models\Customer;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname', 'username', 'email', 'phone_number', 'image'];

    public function getCustomerByUsername($username)
    {
        $username = ltrim($username, '@');
        return $this->where(['username' => $username])->first();
    }
}
