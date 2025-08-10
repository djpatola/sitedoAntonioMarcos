<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::post('/contato', function (\Illuminate\Http\Request $request) {
    return "Formulário enviado com sucesso! Nome: " . $request->nome;
});
