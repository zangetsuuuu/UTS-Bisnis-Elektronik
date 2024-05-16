<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use Faker\Factory;
use App\Models\Admin\ProductModel;
use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        $productModel = new ProductModel();
        $categories = ['Makanan', 'Minuman', 'Snack', 'Sembako'];

        $products = [
            'Makanan' => [
                'Sate Ayam', 'Sate Padang', 'Nasi Goreng', 'Soto Betawi', 'Gado-gado', 'Sate Petai', 'Susu Ular', 'Soto Buntut'
            ],
            'Minuman' => [
                'Es Teh', 'Es Jeruk', 'Es Jeruk Manis', 'Es Buah', 'Susu Krim', 'Soda', 'Air Mineral', 'Susu Kucing'
            ],
            'Snack' => [
                'Pisang Goreng', 'Kripik Udang', 'Siop Bubur', 'Kue Cincau', 'Kue Kering', 'Sosis', 'Sambal', 'Mie Goreng'
            ],
            'Sembako' => [
                'Kardus', 'Plastik', 'Botol Plastik', 'Kotak Kertas', 'Sabun Cuci', 'Sabun Mandi', 'Sabun Menghitam', 'Sabun Menghalus'
            ]
        ];

        foreach ($categories as $category) {
            $categoryProducts = $products[$category];

            foreach ($categoryProducts as $product) {
                $data = [
                    'name' => $product,
                    'slug' => url_title($product, '-', true),
                    'category' => $category,
                    'price' => $faker->numberBetween(10000, 100000),
                    'description' => $faker->realText($maxNbChars = 150, $indexSize = 1),
                    'image' => $faker->imageUrl(600, 400, 'products'),
                    'created_at' => Time::now(),
                    'updated_at' => Time::now()
                ];

                $productModel->insert($data);
            }
        }
    }
}
