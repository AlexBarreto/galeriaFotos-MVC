<div id = "carregar" class = "container">
    <div id = "v-center"></div>
    <div class = "row">
    <div class = "col-sm-2"></div>
        <div class = "col-sm-8">
          <form method = "POST" enctype = "multipart/form-data">
            <div class="form-group">
              <label for="FormControlFile1"><h3>Carregue seu arquivo aqui!</h3></label>
              <input type="file" name = "foto" class="form-control-file" id="FormControlFile1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Escreva uma descrição da foto</label>
              <textarea name = "descricao" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <button  name = "acao" type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div><!--col-sm-4-->
    </div><!--row-->
</div><!--container-->
<div  class="container">
  <div id = "voltacadastro" class = "col-sm-2"><a href="http://localhost/galeriaFotos-MVC/galeria/"><h4>Voltar</h4></a></div>
</div>
