<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Inicio extends Controller
{
    public function index()
    {
        echo view('templates/header'); // 'view' deve ser minúsculo

        echo view('inicio/index');
        
        echo view('templates/footer');
    }
}
