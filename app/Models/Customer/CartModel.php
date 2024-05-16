<?php

namespace App\Models\Customer;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'carts';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['customer_id', 'product_id', 'quantity', 'price'];

    public function getCart($id)
    {
        return $this->where('id', $id)->first();
    }
    
    public function getCartByCustomerId($id)
    {
        return $this->where('customer_id', $id)->findAll();
    }

    public function validation()
    {
        return [
            'quantity' => [
                'rules' => 'required|integer|less_than[stock]',
                'errors' => [
                    'required' => 'Jumlah produk tidak boleh kosong!',
                    'integer' => 'Jumlah produk harus berupa bilangan bulat!',
                    'less_than' => 'Jumlah pesanan tidak boleh lebih dari stok!'
                ]
            ]
        ];
    }
}
