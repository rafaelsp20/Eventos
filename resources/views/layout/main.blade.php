<!DOCTYPE html>
<html lang="pt-br">
 	<head>
 		<meta charset="UTF-8">

        {{-- Fontes do Google --}}
     <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">-->
    
        {{-- Bootstrap --}}

        {{-- Area do titulo --}}
        <title>@yield ('title')</title>
         <link rel="stylesheet" type="text/css" href="css/styles.css" />
         <script type="text/javascript" src="js/js.js"></script>    -->    
 	</head>
 	<body>

    {{-- Menu --}}

    <div class="col-2">               
      <h3>Menu</h3>               
      <ul>
        <li><a href="/contact">Contato</a></li>
        <li><a href="/produtos">Produtos</a></li>
        <li><a href="/series">Lista de Séries</a></li>
        <li><a href="/series/criar">Adicionar</a></li>
      </ul>            
   </div>      
        {{-- Area do conteúdo --}}

        @yield('content')

        {{-- Area do conteúdo --}}
        <footer>  
            <p>Loop Nerd - Todos os Direitos Reservados.</p> 
          </footer>
 	</body>
</html>