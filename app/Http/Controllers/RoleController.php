<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all()->toArray();
        //return view simpre esta escuchado la carpeta view, si quiero entrar a una carpeta dentro de views tienen que ser
        //carpeta.archivo si no solo archivo
        //compact pasa todas la variables php que se le agreguen
        return view('ejemplo', compact('roles'));
    }


    public function save()
    {
        $role = new Role;
        $role->name = 'Super administrador';
        $role->key_name = 'superadmin';
        $role->save();
    }

    public function update($id)
    {
        $role = Role::find($id);
        $role->name = 'Administrador';
        $role->key_name = 'admin';
        $role->save();
    }

    public function delete($id)
    {
        Role::find($id)->delete();
    }
}
