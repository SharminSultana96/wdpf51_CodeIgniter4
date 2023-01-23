<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
      $this->forge->addField([
        "id" => [
            'type' => "INT",
            'constraint' => 5,
            'auto_increment' => true,
        ],

        "product_category" => [
            'type' => "VARCHAR",
            'constraint' => 50,
            'null' => true,
            
        ],

        "product_image" => [
            'type' => "VARCHAR",
            'constraint' => 100,
            'null' => true,
        ],

        "product_details" => [
            'type' => "VARCHAR",
            'constraint' => 300,
            'null' => true,
        ],


      ]);
      $this->forge->addKey("id", true);
      $this->forge->createTable("products");
    }

    public function down()
    {
        $this->forge->dropTable("products");
    }
}
