<?php

namespace App\Models\Customer;

use CodeIgniter\Model;

class OrderItemModel extends Model
{
    protected $table = 'order_items';
    protected $allowedFields = ['order_id', 'product_id', 'quantity', 'price'];
    protected $returnType = 'array';
}