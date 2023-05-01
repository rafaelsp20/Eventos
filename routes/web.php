<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola', function () {
    echo "Ola, Mundo!";
});

Route::get('/contact', function () {
    
    $nome = "Marcos";
    $idade = 40;
    $profissao = "Analista Financeiro";
   
    $arr = [1,2,3,4,5,6,7,8,];

    $nomes = ['Rafael', 'Lucas', 'Caroline', 'Geralda'];
    
    return view('contact',
     [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => $profissao,
        'array' => $arr,
        'nomes' => $nomes
    ]);    
});

Route::get('/produtos', function () {

    // executando com query parametros 
       
        $busca = request ('search'); 
        return view('produtos',['busca' => $busca]);        
        });

Route::get('/produtos/{id?}', function ($id = null) {       
    
         return view('produtos',['id' => $id]);

      
    });

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series/criar',[SeriesController::class, 'store'])->name('registra_produto');
