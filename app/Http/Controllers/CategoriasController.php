<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categorias::all()->toArray();
        //return view simpre esta escuchado la carpeta view, si quiero entrar a una carpeta dentro de views tienen que ser
        //carpeta.archivo si no solo archivo
        //compact pasa todas la variables php que se le agreguen
        return view('admin-categorias', compact('categorias'));
    }
}
