<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends Controller
{
  //parte que vai buscar informação no banco de dados

   private $login_model;

  function __construct()
  {
    $this->login_model = new LoginModel();
  }
  
  
  
  //essa primeira parte se faz primeiro para fazer o teste de login.
    public function index()
    {
        echo View('login/index');
    }

    public function autenticar()
    {
        $dados = $this->request->getVAR();

        //dd($dados); // foi usado para testar se os dados de login estão mesmo sendo enviado. 

        $usuario = $this->login_model
                        ->where('usuario', $dados['usuario'])
                        ->where('senha', md5($dados['senha']))
                        ->first();

        $session = session();

        if(!empty($usuario)):

            $session->set('primeiro_nome', $usuario['primeiro_nome']);
            $session->setFlashdata('alert', 'success_login');
            return redirect()->to('/inicio');
        endif;

        $session->setFlashdata('alert', 'error_login');
        return redirect()->to('/login');
        
    }

    public function logout()
    {
      $session = session();

      $session->destroy();

      return redirect()->to('/login');
    }


    public function TrocarSenha()
    {
      echo View('templates/header');
      echo View('login/trocar_senha');
      echo View('templates/footer');

      echo md5('');
    }

    // aqui tem que verificar nova senha e confirmar a nova senha - compaaração
    public function store()
    {
        $dados = $this->request->getVar();
    
        if (isset($dados['senha_atual'], $dados['nova_senha'], $dados['confirmar_nova_senha'])) {
            $usuario = $this->login_model
                            ->where('id_login', 1)
                            ->first();
    
                            $session = session();

            if (md5($dados['senha_atual']) == $usuario['senha']) {
                if ($dados['nova_senha'] == $dados['confirmar_nova_senha']) {
                    // Atualização da senha no banco de dados
                    $this->login_model
                        ->where('id_login', 1)
                        ->set('senha', md5($dados['nova_senha']))
                        ->update();
    
                    $session = session();
                    $session->setFlashdata('alert', 'sucess_trocar_senha');
    
                    return redirect()->to('/login/trocarSenha');
                }
            }
        }
    
     
        $session->setFlashdata('alert', 'error_trocar_senha');
    
        return redirect()->to('/login/trocarSenha');
    }
    

    

}



?>