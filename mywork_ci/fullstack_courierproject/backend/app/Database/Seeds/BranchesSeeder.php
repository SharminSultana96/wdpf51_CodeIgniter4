<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BranchesSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'branch_name' => 'Chandpur',
                'branch_details' => 'In Chandpur Sodor, Pathao Courier Ltd. delivere parcel door to door. And out of Chandpur Sodor we provide point delivery.',
                'branch_phone' => '0177456536',
            ],

            [
                'branch_name' => 'Dhaka',
                'branch_details' => 'Made with in Dhaka, Bangladesh. Pathao and the Pathao logo are trademarks of Pathao Ltd. © 2015-2023 Pathao Ltd. All rights reserved.',
                'branch_phone' => '0177456546',
            ],

            [
                'branch_name' => 'Sylhet',
                'branch_details' => 'Made with in Dhaka, Bangladesh. Pathao and the Pathao logo are trademarks of Pathao Ltd. © 2015-2023 Pathao Ltd. All rights reserved.',
                'branch_phone' => '0197456530',
            ],

            [
                'branch_name' => 'Cumilla',
                'branch_details' => 'Made with in Dhaka, Bangladesh. Pathao and the Pathao logo are trademarks of Pathao Ltd. © 2015-2023 Pathao Ltd. All rights reserved.',
                'branch_phone' => '0177451231',
            ],

            [
                'branch_name' => 'Tangail',
                'branch_details' => 'Made with in Dhaka, Bangladesh. Pathao and the Pathao logo are trademarks of Pathao Ltd. © 2015-2023 Pathao Ltd. All rights reserved.',
                'branch_phone' => '0187654590',
            ],

            [
                'branch_name' => "Cox's Bazar",
                'branch_details' => 'Made with in Dhaka, Bangladesh. Pathao and the Pathao logo are trademarks of Pathao Ltd. © 2015-2023 Pathao Ltd. All rights reserved.',
                'branch_phone' => '0145784790',
            ],

            [
                'branch_name' => 'Hobigonj',
                'branch_details' => 'Made with in Dhaka, Bangladesh. Pathao and the Pathao logo are trademarks of Pathao Ltd. © 2015-2023 Pathao Ltd. All rights reserved.',
                'branch_phone' => '0123456736',
            ],
        ];


        foreach($datas as $data){        
            $this->db->table('branches')->insert($data);
        }
    }
}
