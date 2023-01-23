<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Parcels extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true,
            ],
            "reference_number" => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            "sender_name" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            "sender_address" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

                "sender_contact" => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => false,
            ],

            "recipient_name" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

            "recipient_address" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

            "recipient_contact" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

            "type" => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => true,
                // 'comment' => '1=Deliver, 2=Pickup',
            ],

            "from_branch_id" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

            "to_branch_id" => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],

            "weight" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

            "height" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

            "length" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

            "width" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],

            "price" => [
                'type' => 'DECIMAL',
                'null' => true,
            ],

            "status" => [
                'type' => 'INT',
                'constraint' => 2,
                'null' => true,
            ],

            "date_created" => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        
        $this->forge->addKey("id", true);
        $this->forge->createTable("parcels");
    }

    public function down()
    {
       $this->forge->dropTable("parcels");
    }
}
