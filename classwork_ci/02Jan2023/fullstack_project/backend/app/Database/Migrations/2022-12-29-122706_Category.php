<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => "INT",
                'constraint' => 5,
                'auto_increment' => true,
            ],
    
            "category_name" => [
                'type' => "VARCHAR",
                'constraint' => 100,
                'null' => false,
            ],
]);

$this->forge->addKey("id", true);
$this->forge->createTable("categories");
}

public function down()
{
  $this->forge->dropTable("categories");
}

}