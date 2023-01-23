<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $datas = [
        [
            'product_name' => 'Black Jacket',
            'product_details'    => 'Jacket details',
            'product_price' => '2000',
        ],

        [
            'product_name' => 'Red Jacket',
            'product_details'    => 'Jacket details',
            'product_price' => '2500',
        ],

        [
            'product_name' => 'Green Jacket',
            'product_details'    => 'Jacket details',
            'product_price' => '3000',
        ],

        [
            'product_name' => 'Brown Jacket',
            'product_details'    => 'Jacket details',
            'product_price' => '1500',
        ],
    ];

        // Simple Queries
        // $this->db->query('INSERT INTO products (product_name, product_details, product_price) VALUES(:product_name:, :product_details:, product_price)', $data);

        // Using Query Builder
        foreach($datas as $data){        
            $this->db->table('products')->insert($data);
        }

    
    }
}
