<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Password extends BaseController
{
    public function admin()
    {
        $data = [
            'title' => 'Ganti Password | ADMIN'
        ];

        return view('auth/admin/change-password', $data);
    }

    public function customers()
    {
        $data = [
            'title' => 'Ganti Password'
        ];

        return view('auth/customers/change-password', $data);
    }
}
