<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'slug', 'category', 'description', 'price', 'stock', 'image'];

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

    public function getTotalProducts()
    {
        return $this->countAllResults();
    }

    public function saveValidation()
    {
        return [
            'name' => [
                'rules' => 'required|is_unique[products.name]',
                'errors' => [
                    'required' => 'Nama produk tidak boleh kosong!',
                    'is_unique' => 'Nama produk sudah digunakan!'
                ]
            ],
            'category' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih salah satu kategori!'
                ]
            ],
            'stock' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Stok tidak boleh kosong!',
                    'integer' => 'Stok harus berupa bilangan bulat!'
                ]
            ],
            'price' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Harga tidak boleh kosong!',
                    'numeric' => 'Harga harus berupa angka!'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi produk tidak boleh kosong!'
                ]
            ]
        ];
    }

    public function updateValidation($nameRule)
    {
        return [
            'name' => [
                'rules' => $nameRule,
                'errors' => [
                    'required' => 'Nama produk tidak boleh kosong!',
                    'is_unique' => 'Nama produk sudah digunakan!'
                ]
            ],
            'stock' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Stok tidak boleh kosong!',
                    'integer' => 'Stok harus berupa bilangan bulat!'
                ]
            ],
            'price' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Harga tidak boleh kosong!',
                    'numeric' => 'Harga harus berupa angka!'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi produk tidak boleh kosong!'
                ]
            ]
        ];
    }
}
