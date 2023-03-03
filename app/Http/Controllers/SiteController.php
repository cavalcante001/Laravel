<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $data = [
            'apelido_nome' => 'Paulo',
            'idade' => 23
        ];


        return view('bemvindo', $data);
    }

    public function users()
    {
        return view('usuarios');
    }
}
