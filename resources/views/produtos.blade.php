@extends('layout.main')
@section('title', 'pagina de produtos')    
@section('content')

<h1>Cadastro de Produtos</h1>

@if ($id != '')

<p>O id do produto passado é {{ $id }} </p>   

@endif

{{-- 
@if($busca!= '')
<p>O usuario está buscando {{ $busca }}</p>
@endif --}}

@endsection