<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'name' => 'Sharmin',
                'email'    => 'sharmin@gmail.com',
                'password' => 'sharmin123',
            ],

            [
                'name' => 'Sultana',
                'email'    => 'sultana@gmail.com',
                'password' => 'sultana123',
            ],
        ];

        foreach($datas as $data){        
            $this->db->table('products')->insert($data);
        }
    }
}
