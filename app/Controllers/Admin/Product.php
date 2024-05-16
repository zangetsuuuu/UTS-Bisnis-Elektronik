<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Admin\ProductModel;

class Product extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function viewProducts()
    {
        $category = $this->request->getVar('category');

        $category = ($category === 'all') ? null : $category;

        $data = [
            'title' => 'Daftar Produk | ADMIN',
            'category' => $category,
            'products' => !$category ? $this->productModel->getProducts() : $this->productModel->getProductsByCategory($category),
            'flashMessages' => [
                'Create Success' => ['id' => 'alert-create-success', 'message' => session()->getFlashdata('Create Success')],
                'Edit Success' => ['id' => 'alert-edit-success', 'message' => session()->getFlashdata('Edit Success')],
                'Delete Success' => ['id' => 'alert-delete-success', 'message' => session()->getFlashdata('Delete Success')],
            ]
        ];

        return view('admin/product/index', $data);
    }

    public function viewProductDetail($slug)
    {
        $data = [
            'title' => 'Detail Produk | ADMIN',
            'product' => $this->productModel->getProductBySlug($slug)
        ];

        return view('admin/product/detail', $data);
    }

    public function viewCreateProduct()
    {
        $data = [
            'title' => 'Tambah Produk | ADMIN',
            'validation' => session()->getFlashdata('validation')
        ];

        return view('admin/product/create', $data);
    }

    public function searchProduct()
    {
        $keyword = $this->request->getVar('keyword');

        $data = [
            'title' => 'Daftar Produk | ADMIN',
            'category' => '',
            'products' => $this->productModel->getProductBySearch($keyword)
        ];

        if (empty($data['products'])) {
            session()->setFlashdata('Product Not Found', 'Hasil tidak ditemukan!');
            session()->remove('Product Search Info');
        } else {
            session()->setFlashdata('Product Search Info', 'Hasil pencarian: ' . $keyword);
            session()->remove('Product Not Found');
        }

        return view('admin/product/index', $data);
    }

    public function saveProduct()
    {
        $config = $this->productModel->saveValidation();

        if (!$this->validate($config)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'name' => $this->request->getVar('name'),
            'slug' => url_title($this->request->getVar('name'), '-', true),
            'category' => $this->request->getVar('category'),
            'stock' => $this->request->getVar('stock'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description')
        ];

        $this->productModel->save($data);

        session()->setFlashdata('Create Success', 'Data berhasil ditambahkan!');

        return redirect()->to('admin/products');
    }

    public function viewEditProduct($slug)
    {
        $data = [
            'title' => 'Edit Produk | ADMIN',
            'validation' => session()->getFlashdata('validation'),
            'product' => $this->productModel->getProductBySlug($slug)
        ];

        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk ' . $slug . ' tidak ditemukan');
        }

        return view('admin/product/edit', $data);
    }

    public function updateProduct($id)
    {
        $oldName = $this->productModel->getProductById($id);

        if ($oldName['name'] == $this->request->getVar('name')) {
            $nameRule = 'required';
        } else {
            $nameRule = 'required|is_unique[products.name]';
        }

        $config = $this->productModel->updateValidation($nameRule);

        if (!$this->validate($config)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'slug' => url_title($this->request->getVar('name'), '-', true),
            'category' => $this->request->getVar('name'),
            'stock' => $this->request->getVar('stock'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description')
        ];

        $this->productModel->save($data);

        session()->setFlashdata('Edit Success', 'Data berhasil diubah!');

        return redirect()->to('admin/products');
    }

    public function deleteProduct($id)
    {
        $this->productModel->delete($id);

        session()->setFlashdata('Delete Success', 'Data berhasil dihapus!');

        return redirect()->to('admin/products');
    }
}
