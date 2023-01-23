<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Branches extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => "INT",
                'constraint' => 5,
                'auto_increment' => true,
            ],
    
            "branch_name" => [
                'type' => "VARCHAR",
                'constraint' => 100,
                'null' => false,
            ],

            "branch_image" => [
                'type' => "VARCHAR",
                'constraint' => 100,
                'null' => true,
            ],

            "branch_details" => [
                'type' => "VARCHAR",
                'constraint' => 300,
                'null' => true,
            ],

            "branch_phone" => [
                'type' => "VARCHAR",
                'constraint' => 100,
                'null' => true,
            ],
]);

$this->forge->addKey("id", true);
$this->forge->createTable("branches");
}

public function down()
{
  $this->forge->dropTable("branches");
}

}
