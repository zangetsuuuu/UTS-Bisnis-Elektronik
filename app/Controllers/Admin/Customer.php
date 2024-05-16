<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Admin\CustomerModel;

class Customer extends BaseController
{
    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function viewCustomers()
    {
        $data = [
            'title' => 'Daftar Pelanggan | ADMIN',
            'customers' => $this->customerModel->getCustomers()
        ];

        session()->remove('Customer Search Info');
        session()->remove('Customer Not Found');

        return view('admin/customer/index', $data);
    }

    public function viewCustomerDetail($username)
    {
        $data = [
            'title' => 'Detail Pelanggan | ADMIN',
            'customer' => $this->customerModel->getCustomerByUsername($username)
        ];

        return view('admin/customer/detail', $data);
    }

    public function searchCustomer()
    {
        $keyword = $this->request->getVar('keyword');

        $data = [
            'title' => 'Daftar Pelanggan | ADMIN',
            'customers' => $this->customerModel->getCustomerBySearch($keyword)
        ];

        if (empty($data['customers'])) {
            session()->setFlashdata('Customer Not Found', 'Hasil tidak ditemukan!');
            session()->remove('Customer Search Info');
        } else {
            session()->setFlashdata('Customer Search Info', 'Hasil pencarian: ' . $keyword);
            session()->remove('Customer Not Found');
        }

        return view('admin/customer/index', $data);
    }

    public function deleteCustomer($id)
    {
        $this->customerModel->delete($id);

        session()->setFlashdata('Delete Success', 'Data pelanggan berhasil dihapus!');

        return redirect()->to('admin/customers');
    }
}
