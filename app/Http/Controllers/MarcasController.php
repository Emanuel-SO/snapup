<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcas;

class MarcasController extends Controller
{
    public function index(){
        $marcas = Marcas::all()->toArray();
        //return view simpre esta escuchado la carpeta view, si quiero entrar a una carpeta dentro de views tienen que ser
        //carpeta.archivo si no solo archivo
        //compact pasa todas la variables php que se le agreguen
        return view('admin-marcas', compact('marcas'));
    }
}
