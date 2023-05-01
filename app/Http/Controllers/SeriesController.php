<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Evento;
//use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    //buscar registros no banco de dados
    public function index (Request $request)
    {
      
        $series = Evento::all(); //buscar todos os registros no banco de dados
        return view('series.index')->with('series', $series);
}     

    public function create () {
        return view('series.create');
   }

   public function store (Request $request) 
   {

            Evento::create([

            'nome' => $request->nome,
            'temporada' =>$request->temporada,
            'capitulo'=>$request->capitulo,
            'autor'=>$request->autor,
            'livraria'=>$request->livraria,
    ]);

    return redirect('/series');
           
   // return "produto add com sucesso";

   }

}

