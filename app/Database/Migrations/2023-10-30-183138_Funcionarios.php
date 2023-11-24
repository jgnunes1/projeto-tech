<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Funcionarios extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_funcionario' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true, // Corrigido o typo aqui
                'auto_increment' => true,
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],

            'data_de_nascimento' => [
                'type' => 'DATE',
            ],

            'RG' => [
                'type' => 'VARCHAR',
                'constraint' => 32
            ],

            'CPF' => [
                'type' => 'VARCHAR',
                'constraint' => 32
            ],

            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 32
            ],

            'endereco' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            
            'DATA_DE_CONTRATACAO' => [
                'type' => 'DATE'      
            ],

            'cargo' => [
                    'type' => 'VARCHAR',
                    'constraint' => 128
            ],

            'salario' => [
                'type' => 'DOUBLE'
            ],

            'dia_de_pagamento' => [ 
                'type' => 'INT'
            ],

            'created_at' => [
                'type' => 'DATETIME'
            ],

            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id_funcionario', true);
        $this->forge->createTable('funcionarios');
    
    }

    public function down()
    {
        $this->forge->dropTable('funcionarios');
    }
}
