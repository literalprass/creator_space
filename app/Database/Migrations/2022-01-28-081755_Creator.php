<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Creator extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'names'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'twitter' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                null => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                null => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('creator');
    }

    public function down()
    {
        $this->forge->dropTable('creator');
    }
}
