<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Admin\ProfileModel;
use App\Models\Admin\AdminModel;

class Profile extends BaseController
{
    protected $profileModel;
    protected $adminModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->adminModel = new AdminModel();
    }

    public function viewInfo($username)
    {
        $data = [
            'title' => 'Profil | ADMIN',
            'admin' => $this->adminModel->getAdminByUsername($username)
        ];

        return view('admin/profile/index', $data);
    }

    public function viewEditProfile($username)
    {
        $data = [
            'title' => 'Edit Profil | ADMIN',
            'admin' => $this->adminModel->getAdminByUsername($username),
            'validation' => session()->getFlashdata('validation'),
        ];

        return view('admin/profile/edit', $data);
    }

    public function updateAdminProfile($id)
    {
        $oldData = $this->adminModel->getAdminById($id);

        if ($oldData['username'] == $this->request->getVar('username')) {
            $usernameRule = 'required';
        } else {
            $usernameRule = 'required|is_unique[admins.username]|regex_match[/^\S*$/]';
        }

        if ($oldData['email'] == $this->request->getVar('email')) {
            $emailRule = 'required';
        } else {
            $emailRule = 'required|is_unique[admins.email]|valid_email';
        }

        $config = [
            'first_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama depan tidak boleh kosong!'
                ]
            ],
            'last_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama belakang tidak boleh kosong!'
                ]
            ],
            'username' => [
                'rules' => $usernameRule,
                'errors' => [
                    'required' => 'Username tidak boleh kosong!',
                    'is_unique' => 'Username sudah digunakan!',
                    'regex_match' => 'Username tidak boleh dispasi!'
                ]
            ],
            'email' => [
                'rules' => $emailRule,
                'errors' => [
                    'required' => 'Email tidak boleh kosong!',
                    'is_unique' => 'Email sudah digunakan!',
                    'valid_email' => 'Format email tidak valid!'
                ]
            ],
            'phone_number' => [
                'rules' => 'required|is_unique[admins.phone_number]',
                'errors' => [
                    'required' => 'Nomor HP tidak boleh kosong!',
                    'is_unique' => 'Nomor HP sudah digunakan!'
                ]
            ]
        ];

        if (!$this->validate($config)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'id' => $id,
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'phone_number' => $this->request->getVar('phone_number')
        ];

        $this->profileModel->save($data);

        session()->setFlashdata('Edit Success', 'Data berhasil diubah!');

        return redirect()->to('admin/profile');
    }
}
