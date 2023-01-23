<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'product_category' => 'Cloth',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Phone',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Furniture',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Watch',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Shoes',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Packages',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Personal Belongings',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Documents',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Food',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Medicine',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
            ],

            [
                'product_category' => 'Cameras',
                'product_details'    => 'Our Team Takes Utmost Care Of Your Parcels And Delivers The Packages On Time. Customs Fee, If Imposed On A Shipment, Has To Be Paid By The Recipient.',
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
