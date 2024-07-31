<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        // $mensaje = "Inicio";

        return view('frontend.index')
        // ->with('mensaje', $mensaje);
            ->with('mensaje', "Bienvenido!")
            ->with('otro_mensaje', "hello world");
    }

    public function about()
    {
        return view('frontend.index')
            ->with('mensaje', "Sobre nosotros");
    }

    public function contact()
    {
        return view('frontend.index')
            ->with('mensaje', "Llamame!");
    }
}
