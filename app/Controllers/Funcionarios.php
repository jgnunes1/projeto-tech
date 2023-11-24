<?php

namespace App\Controllers;

use App\Models\FuncionarioModel;

use CodeIgniter\Controller;

class Funcionarios extends Controller
{
   
   private $funcionario_model;

   function __construct()
   {
        $this->funcionario_model= new FuncionarioModel();
   }
   

   public function index()
   {
        $funcionarios = $this->funcionario_model
                             ->findAll();

        $data['funcionarios'] = $funcionarios;

  
       echo View('templates/header');
       echo view('funcionarios/index', $data);
       echo View('templates/footer');
   }
   
  public function ver($id_funcionario)

  {
    $data['funcionario'] = $this->funcionario_model
                                ->where('id_funcionario', $id_funcionario)
                                ->first();

    echo View('templates/header');
    echo view('funcionarios/ver', $data);
    echo View('templates/footer'); 
 }
  
  
   // AQUI: NOVO FUNCONÀRIO - Formulário de cadastro de funcionário (verificar código). 
   //Aqui o formulario serve para editar e cadastrar funcionários
   
   public function form()
    {
       echo View('templates/header');
       echo view('funcionarios/form');
       echo View('templates/footer'); 
    }


   public function editar($id_funcionario)
   {
             $funcionario= $this->funcionario_model
                       ->where('id_funcionario', $id_funcionario)
                       ->first();

        $data['funcionario'] = $funcionario;
     //   $data['funcionario'] = $this-> funcionario_model;
    
       echo View('templates/header');
       echo view('funcionarios/editar', $data);
       echo View('templates/footer');
   }
   
   
   public function store()
{
    $dados = $this->request->getVar();

    $session = session();

    if(isset($dados['id_funcionario'])) {
        $this->funcionario_model
            ->where('id_funcionario', $dados['id_funcionario'])
            ->set($dados)     
            ->update();

        $session->setFlashdata('alert', 'success_update');      
        return redirect()->to("/funcionarios/editar/{$dados['id_funcionario']}");
     } else {
        $this->funcionario_model
            ->insert($dados);

        $session->setFlashdata('alert', 'success_update');      
        return redirect()->to('/funcionarios');
       }
    }
       public function delete()
       {
            $id_funcionario = $this->request->getVar('id_funcionario');

        $this->funcionario_model
                    ->where('id_funcionario', $id_funcionario)
                    ->delete();


                $session = session();
                $session->setFlashdata('alert', 'sucess_delete');

                return redirect()->to('/funcionarios');
       }
    
    }





?>
