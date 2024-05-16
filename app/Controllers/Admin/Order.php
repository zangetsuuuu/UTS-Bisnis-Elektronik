<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Order extends BaseController
{
    public function viewOrders()
    {
        $data = [
            'title' => 'Daftar Pesanan | ADMIN'
        ];

        return view('admin/order/index', $data);
    }

    public function viewOrderDetail()
    {
        $data = [
            'title' => 'Detail Pesanan | ADMIN'
        ];

        return view('admin/order/detail', $data);
    }
}
