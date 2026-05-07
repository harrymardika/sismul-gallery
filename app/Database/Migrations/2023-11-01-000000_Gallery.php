<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gallery extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'TEXT',
            ],
            'description' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'image' => [
                'type'       => 'TEXT',
            ],
            'created_at' => [
                'type'       => 'TIMESTAMP',
                'default'    => new \CodeIgniter\Database\RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('gallery');
    }

    public function down()
    {
        $this->forge->dropTable('gallery');
    }
}
