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
                'email' => 'sharmin123@gmail.com',
                'password' => 'sharmin123',
            ],
        ];


        foreach($datas as $data){        
            $this->db->table('users')->insert($data);
        }
    }
}
