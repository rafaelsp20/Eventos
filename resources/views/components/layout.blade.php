<!DOCTYPE html>
<html lang="pt-br">
<head>  

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
<meta charset="UTF-8">

 	<title>{{ $title }}</title>

</head>
 	<body class="p-3 m-0 border-0 bd-example">
      <div class="container">
         <!-- Menu -->

         <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">             
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/series/criar">Adcionar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/series">Listar</a>
                  </li>           
                  <li class="nav-item">
                     <a class="nav-link" href="/series">Sair</a>
                   </li>                  
                </ul>
              </div>
            </div>
          </nav>
         </div>  
         <div class="container">
            <br>
            <br>

            <h1> {{ $title }} </h1>
            
            {{ $slot }}     

         </div>


</body>
</html>
