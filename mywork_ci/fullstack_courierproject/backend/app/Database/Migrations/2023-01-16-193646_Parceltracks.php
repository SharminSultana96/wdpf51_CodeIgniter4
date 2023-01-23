<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Parceltracks extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true,
            ],
            "parcel_id" => [
                'type' => 'INT',
                'constraint' => 10,
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
        $this->forge->createTable("parceltracks");
    }

    public function down()
    {
        $this->forge->dropTable("parceltracks");
    }
}
