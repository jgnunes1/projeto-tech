<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Produtos extends Controller
{
   
   private $produto_model;

   function __construct()
   {
        $this->produto_model = new ProdutoModel();
   }
   

   public function index()
   {
        $produtos = $this->produto_model
                            ->findAll();

        $data['produtos'] = $produtos;

       echo View('templates/header');
       echo view('produtos/index', $data);
       echo View('templates/footer');
   }
   
   
   
   public function novo()
    {
       echo View('templates/header');
       echo view('produtos/novo');
       echo View('templates/footer');
    }

   
   public function editar($id_produto)
   {
     $produto= $this->produto_model
                                ->where('id_produto', $id_produto)
                                ->first();

        $data['produto'] = $produto;
    
       echo View('templates/header');
       echo view('produtos/editar', $data);
       echo View('templates/footer');
   }
   
   
   
    public function store()
    {
        $dados = $this->request->getVar();

        if(isset($dados['id_produto'])):

            $this->produto_model
                        ->where('id_produto', $dados['id_produto'])
                        ->set($dados)
                        ->update();


            $session = session();
            $session->setFlashdata('alert', 'success_update');      

            return redirect()->to("/produtos/editar/{$dados['id_produto']}");

        endif;

        

        $this->produto_model->insert($dados);

            $session = session();
            $session->setFlashdata('alert', 'success_create');      

        return redirect()->to('/produtos');
    }



    public function excluir()
    {
        $id_produto = $this->request->getVar('id_produto'); // Obtendo o valor de id_produto
    
        //dd($id_produto); // Exibindo o valor de id_produto
    
        $this->produto_model
            ->where('id_produto', $id_produto)
            ->delete();

            $session = session();
            $session->setFlashdata('alert', 'success_delete');      

        
        return redirect()->to('/produtos');
    }
    

    public function ver($id_produto)
    {

        $produto= $this->produto_model
                        ->where('id_produto', $id_produto)
                        ->first();


        $data['produto'] = $produto;
    
        echo View('templates/header');
        echo view('produtos/ver', $data);
        echo View('templates/footer');

    }
}
?>
