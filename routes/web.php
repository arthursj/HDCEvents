<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

Route::get('/', function () {

    $nome = "Arthur";
    $idade = 24;

    $arr = [10,20,30,40,50];

    $pessoas = ["Arthur", "Maria", "João", "Ana"];

    return view("welcome", ['nome' => $nome, 'idade' => $idade, 'profissao' => "Desenvolvimento", 'arr' => $arr, 'pessoas' => $pessoas]);
});
