<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logins extends Migration
{
public function up()
{
    $this->forge->addField([
        'id_login' => [
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'usuario' => [
            'type' => 'VARCHAR',
            'constraint' => 128,
        ],
        'senha' => [
            'type' => 'VARCHAR',
            'constraint' => 128,
      
        ],
        'primeiro_nome' => [
            'type' => 'VARCHAR',
            'constraint' => 128,
      
        ],
        'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        'deleted_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);

    $this->forge->addKey('id_login', true);
    $this->forge->createTable('logins');
}

public function down()
{
    $this->forge->dropTable('logins');
}

}