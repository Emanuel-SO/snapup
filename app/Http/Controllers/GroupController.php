<?php

namespace App\Http\Controllers;

use App\Models\groups;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = groups::all()->toJson();
        dd($groups);
    }

    public function save()
    {
        $group = new groups();
        $group->name = 'Emanuel';
        $group->key_name = 'ema';
        $group->description = 'Emanuel Saucedo Olvera';
        $group->save();
    }

    public function update($id)
    {
        $group = groups::find($id);
        $group->name = 'Emauel';
        $group->key_name = 'ema';
        $group->description = 'Persona nuevo';
        $group->save();
    }

    public function delete($id)
    {
        groups::find($id)->delete();
    }
}
