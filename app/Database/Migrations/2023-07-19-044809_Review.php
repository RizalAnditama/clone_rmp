<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Review extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel review
        $this->forge->addField([
            'review_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true
            ],
            'review'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'reputation'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'location'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'opportunities'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'facilities'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'internet'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'food'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'extracurriculer'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'social'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'happiness'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'safety'      => [
                'type'           => 'int',
                'constraint'     => '1'
            ],
            'date' => [
                'type'           => 'timestamp',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('review_id', TRUE);

        // Membuat tabel review
        $this->forge->createTable('review', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel review
        $this->forge->dropTable('review');
    }
}
