<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\Customer\ProfileModel;

class Profile extends BaseController
{
    protected $profileModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    public function viewProfile()
    {
        $data = [
            'title' => 'Profil'
        ];

        return view('customer/profile/index', $data);
    }

    public function edit($username)
    {
        $data = [
            'title' => 'Edit Profil',
            'customer' => $this->profileModel->getCustomerByUsername($username),
            'validation' => session()->getFlashdata('validation')
        ];

        if (empty($data['customer'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data customer tidak ditemukan');
        }

        return view('customer/profile/edit', $data);
    }
}
