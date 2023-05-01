<x-layout title="Lista de séries">
	<!-- lista de séries -->    
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Temporada</th>
                <th scope="col">Capitulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Livraria</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($series as $serie)
              <tr>              
                <td> {{  $serie->id; }} </td>	
                <td> {{  $serie->nome; }} </td>	
                <td> {{  $serie->temporada; }} </td>
                <td> {{  $serie->capitulo; }} </td>
                <td> {{  $serie->autor; }} </td>
                <td> {{  $serie->livraria; }} </td>
              </tr>
              @endforeach              
            </tbody>
          </table>
 	</body>
</html>
</x-layout>