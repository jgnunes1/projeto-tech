<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\ProdutoModel;
use App\Models\FuncionarioModel;
use App\Models\ClienteModel;

class Inicio extends Controller
{
    
    private $produto_model;
    private $funcionario_model;
    private $cliente_model;

    function __construct()

    {
        $this->produto_model     = new ProdutoModel();
        $this->funcionario_model = new FuncionarioModel();
        $this->cliente_model     = new ClienteModel();
    }
    
    
    
    public function index()
    {
        $total_de_clientes = count(

            $this->cliente_model->findAll()
        );

       
        $total_de_funcionarios = count(

            $this->funcionario_model->findAll()
        );

        $total_de_produtos = count(

            $this->produto_model->findAll()
        );


        $data['total_de_clientes']     = $total_de_clientes;
        $data['total_de_funcionarios'] = $total_de_funcionarios;
        $data['total_de_produtos'] = $total_de_produtos;

      
      
      
      
        echo view('templates/header'); // 'view' deve ser minúsculo

        echo view('inicio/index', $data);
        
        echo view('templates/footer');
    }
}
