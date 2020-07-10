<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        return View('cliente.index');
    }

    public function cadastro($id = null)
    {
        return View('cliente.cadastroCliente');
    }
}
