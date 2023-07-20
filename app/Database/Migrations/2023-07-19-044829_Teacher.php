<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Teacher extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel teacher
        $this->forge->addField([
            'teacher_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true
            ],
            'school_id'      => [
                'type'           => 'int',
                'constraint'     => '11'
            ],
            'teacher_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'subject'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'quality'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'difficulty'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'description'      => [
                'type'           => 'varchar',
                'constraint'     => '255'
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('teacher_id', TRUE);
        $this->forge->addForeignKey('school_id', 'school', 'school_id');

        // Membuat tabel teacher
        $this->forge->createTable('teacher', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel teacher
        $this->forge->dropTable('teacher');
    }
}
