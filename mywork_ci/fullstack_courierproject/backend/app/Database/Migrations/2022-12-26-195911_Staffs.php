<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Staffs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true,
            ],
            "staff_name" => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            "staff_email" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            "staff_phone" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],

            "staff_image" => [
            'type' => "VARCHAR",
            'constraint' => 100,
            'null' => true,
            ],

            "branch_id" => [
                'type' => 'INT',
            ],
        ]);
        
        $this->forge->addKey("id", true);
        $this->forge->createTable("staffs");
    }

    public function down()
    {
       $this->forge->dropTable("staffs");
    }
}
