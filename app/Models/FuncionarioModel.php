<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table = 'funcionarios';
    protected $primaryKey = 'id_funcionario';
    protected $allowedFields = [
        'id_funcionario',
        'nome',
        'data_de_nascimento',
        'RG',
        'CPF',
        'telefone',
        'endereco',
        'DATA_DE_CONTRATACAO',
        'cargo',
        'salario',
        'dia_de_pagamento',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
