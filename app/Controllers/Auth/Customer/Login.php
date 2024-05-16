<?php

namespace App\Controllers\Auth\Customer;

use App\Controllers\BaseController;
use App\Models\Auth\Customer\LoginModel;

class Login extends BaseController
{
    protected $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }
    public function viewForm()
    {
        $data = [
            'title' => 'Login',
            'validation' => session()->getFlashdata('validation'),
        ];

        return view('auth/customer/login', $data);
    }

    public function loginToAccount()
    {
        $config = $this->loginModel->validation();
        if (!$this->validate($config)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $customer = $this->loginModel->where('username', $username)->first();

        if ($customer && password_verify($password, $customer['password'])) {
            $this->setCustomerSession($customer);

            if ($this->request->getVar('remember')) {
                $key = 'remember_' . $customer['id'];
                $value = $customer['id'] . ':' . $customer['password'];
                setcookie($key, $value, time() + (86400 * 30), '/');
            }

            return redirect()->to('products');
        }

        session()->setFlashdata('error', 'Username atau password salah!');
        return redirect()->back()->withInput();
    }


    private function setCustomerSession($customer)
    {
        $data = [
            'id' => $customer['id'],
            'fullname' => $customer['fullname'],
            'email' => $customer['email'],
            'isLoggedIn' => true
        ];

        session()->set($data);
    }
}
