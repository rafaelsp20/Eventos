@extends('layout.main')
@section('title', 'pagina de contato')    
@section('content')
<h1>Contato</h1>

    <img src="img/foto1.jpg" alt="HTML tutorial">

    @if($nome == "Lucas")    
    <p>O nome é {{$nome}} , ele tem {{ $idade }} anos de idade e trabalha como {{ $profissao }}.</p>
    @elseif($nome == "Marcos")
    <p>O nome é {{$nome}} , ele tem {{ $idade }} anos de idade e trabalha como {{ $profissao }}.</p>
@else

<p>não é nenhum</p>
    @endif

    @for ($i = 0; $i < count($array); $i++)
    The current value is {{ $array[$i] }} , O valor do indice é {{ $i }} <br>
    @endfor

    <hr>

    @foreach ($nomes as $nome)
    <p>This is user {{  $nome }}</p>
    @endforeach

    @endsection

