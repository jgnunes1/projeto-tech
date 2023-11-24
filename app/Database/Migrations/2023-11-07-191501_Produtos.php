<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produto' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'descricao' => [
                'type' => 'TEXT',
            ],
            'quantidade' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'quantidade_minima' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'valor_de_compra' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'valor_de_venda' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'margem_de_lucro' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'validade' => [
                'type' => 'DATE',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_produto', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
