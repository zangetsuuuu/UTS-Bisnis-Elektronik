<?php

namespace App\Models\Customer;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['midtrans_transaction_id', 'midtrans_order_id', 'status', 'amount', 'payment_type', 'transaction_time', 'fraud_status', 'created_at'];
}

