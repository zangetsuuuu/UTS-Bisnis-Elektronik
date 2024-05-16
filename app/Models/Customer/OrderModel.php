<?php

namespace App\Models\Customer;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $allowedFields = ['reference','customer_id', 'transaction_id', 'total_price', 'status', 'created_at', 'updated_at'];
    protected $returnType = 'array';

    public function getOrders($date = '', $status = '')
    {
        $customerId = session()->get('id');
        
        $conditions = [
            'customer_id' => $customerId,
        ];

        if (!empty($date)) {
            $conditions['DATE(created_at)'] = $date;
        }

        if (!empty($status)) {
            $conditions['status'] = $status;
        }

        return $this->where($conditions)->findAll();
    }

    public function getOrderDetails($params)
    {
        return $this->where(['reference' => $params])->first();
    }
}