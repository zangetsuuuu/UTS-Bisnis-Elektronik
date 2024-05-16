<?php

namespace App\Controllers\Auth\Admin;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function viewForm()
    {
        $data = [
            'title' => 'Login | ADMIN'
        ];

        return view('auth/admin/login', $data);
    }
}
