<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    public function index()
    {
        return view('backend.index')
            ->with('mensaje', "Listado de clientes");
    }
}
