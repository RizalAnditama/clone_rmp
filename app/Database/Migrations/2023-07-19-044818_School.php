<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class School extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel school
        $this->forge->addField([
            'school_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true
            ],
            'school_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'address'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('school_id', TRUE);

        // Membuat tabel school
        $this->forge->createTable('school', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel school
        $this->forge->dropTable('school');
    }
}
