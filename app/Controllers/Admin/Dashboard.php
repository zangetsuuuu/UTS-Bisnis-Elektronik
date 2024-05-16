<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Admin\ProductModel;
use App\Models\Admin\CustomerModel;

class Dashboard extends BaseController
{
    protected $productModel;
    protected $customerModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->customerModel = new CustomerModel();
    }

    public function viewDashboard()
    {
        $data = [
            'title' => 'Dashboard | ADMIN',
            'totalProducts' => $this->productModel->getTotalProducts(),
            'totalCustomers' => $this->customerModel->getTotalCustomers()
        ];

        return view('admin/dashboard', $data);
    }
}
