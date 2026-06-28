<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        $nome = "Arthur";
        $idade = 24;

        $arr = [10, 20, 30, 40, 50];

        $pessoas = ["Arthur", "Maria", "João", "Ana"];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => 'Desenvolvimento',
                'arr' => $arr,
                'pessoas' => $pessoas
            ]
        );
    }

    public function create() {
        return view('events.create');
    }
}
