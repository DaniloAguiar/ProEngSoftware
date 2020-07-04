<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index($id = null)
    {
        return View('cadastroCliente');
    }
}
