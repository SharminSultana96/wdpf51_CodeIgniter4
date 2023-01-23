<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StaffsSeeder extends Seeder
{
    public function run()
    {
        $datas = [

        [
            'staff_name' => 'Sultana',
            'staff_email' => 'sultana@gmail.com',
            'staff_phone' => '01879321765',
            'branch_id' => '1',
        ],   

        [
            'staff_name' => 'Sababa',
            'staff_email' => 'sababa@gmail.com',
            'staff_phone' => '01983561810',
            'branch_id' => '2',
        ], 

        [
            'staff_name' => 'Samir',
            'staff_email' => 'samir@gmail.com',
            'staff_phone' => '01772645361',
            'branch_id' => '3',
        ], 

        [
            'staff_name' => 'Shakib',
            'staff_email' => 'shakib@gmail.com',
            'staff_phone' => '01546364636',
            'branch_id' => '4',
        ], 
           
        [
            'staff_name' => 'Mashfi',
            'staff_email' => 'mashfi@gmail.com',
            'staff_phone' => '01876865668',
            'branch_id' => '1',
        ], 
           
        [
            'staff_name' => 'Jannat',
            'staff_email' => 'jannat@gmail.com',
            'staff_phone' => '01657645647',
            'branch_id' => '2',
        ], 

        [
            'staff_name' => 'Ayan',
            'staff_email' => 'ayan@gmail.com',
            'staff_phone' => '01984878567',
            'branch_id' => '4',
        ], 
           
    ];

    foreach($datas as $data){
        $this->db->table('staffs')->insert($data);
    }
    }
}
