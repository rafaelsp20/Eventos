<x-layout title="Cadastro de série">    
    <br>
    <form action="{{ route('registra_produto') }}"  method="POST" >
        @csrf
        <div class="col-md-4">                
          <div class="input-group mb-3">
            <span class="input-group-text" for="nome" id="inputGroup-sizing-default">Nome:</span>
            <input type="text" id="nome" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>          
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Temporada:</span>
            <input type="text" id="temporada" name="temporada" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Capitulo:</span>
            <input type="text" id="capitulo" name="capitulo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Autor:</span>
            <input type="text" id="autor" name="autor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>  
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Livraria:</span>
            <input type="text" id="livraria" name="livraria" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>             
        </div>
          <button class="btn btn-success">Salvar</button>     
    </form>   
</x-layout>
