<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
	private $table = 'roles';
	public function up() {
                $this->forge->addField([
                'id'          => [
                        'type'           => 'INT',
                        'constraint'     => 11,
                        'auto_increment' => true,
                ],
                'role_name'       => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '50',
                ],
                'created_at' => [
                        'type'           => 'DATETIME',
                ],
                'updated_at' => [
                        'type'           => 'DATETIME',
                        'null'           => true,
                        'default'        => null,
                ],
                'deleted_at' => [
                        'type'           => 'DATETIME',
                        'null'           => true,
                        'default'        => null,
                ]
                        ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable($this->table);
	}

	public function down() {
		$this->forge->dropTable('roles');
	}
}
