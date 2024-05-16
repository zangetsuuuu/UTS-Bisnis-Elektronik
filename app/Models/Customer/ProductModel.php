<?php

namespace App\Models\Customer;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'description', 'price', 'stock', 'image'];

    public function getProducts()
    {
        return $this->findAll();
    }

    public function getProductById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getProductBySlug($slug)
    {
        return $this->where(['slug' => $slug])->first();
    }

    public function getProductsByCategory($category)
    {
        return $this->where(['category' => $category])->findAll();
    }

    public function getProductBySearch($keyword)
    {
        return $this->like('name', $keyword)
            ->orLike('category', $keyword)
            ->orLike('description', $keyword)
            ->orLike('price', $keyword)
            ->orLike('stock', $keyword)
            ->findAll();
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
