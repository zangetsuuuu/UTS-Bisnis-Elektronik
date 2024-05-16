<?php

namespace App\Models\Auth\Customer;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'customers';
    protected $returnType = 'array';
    protected $allowedFields = ['fullname', 'username', 'email', 'password', 'phone_number', 'address'];

    public function validation()
    {
        return [
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username tidak boleh kosong!'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong!'
                ]
            ]
        ];
    }
}
