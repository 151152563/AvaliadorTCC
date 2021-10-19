<?php
include_once '../includes/header.php';

//Session 
require_once '../sessao.php';


?>

<!DOCTYPE html>
<html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title>Adicionar Tema</title>
      
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<div class="row">
     <div class="col s12 m6 push-m3">
     <h3 class="light"> Informe as Informações </h3>
     <form action="../php_action/create.php" method="POST">

     <div class="input-field col s12">
     <textarea type="text" name="tema" id="tema" class="materialize-textarea"></textarea>
         <label for="tema">Tema da Redação</label>
       </div>

       <div class="input-field col s12">
       <textarea type="text" name="textun" id="textun" class="materialize-textarea"></textarea>
         <label for="textun">Texto de Apoio 1</label>
       </div>

       <div class="input-field col s12">
       <textarea type="text" name="texttwo" id="texttwo" class="materialize-textarea"></textarea>
         <label for="texttwo">Texto de Apoio 2</label>
       </div>

       <div class="input-field col s12">
       <textarea type="text" name="texttree" id="texttree" class="materialize-textarea"></textarea>
         <label for="texttree">Texto de Apoio 3</label>
       </div>

       <div class="input-field col s12">
       <textarea type="text" name="textfor" id="textfor" class="materialize-textarea"></textarea>
         <label for="textfor">Texto de Apoio 4</label>
       </div>

       <div class="input-field col s12">
       <textarea type="text" name="textfive" id="textfive" class="materialize-textarea"></textarea>
         <label for="textfive">Texto de Apoio 5 (OPCIONAL)</label>
       </div>

       <div class="input-field col s12">
       <textarea type="text" name="textsix" id="textsix" class="materialize-textarea"></textarea>
         <label for="textsix">Texto de Apoio 6 (OPCIONAL)</label>
       </div>


       
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>




       <button type="submit" name="btn-cadastrar" class="btn purple"> Cadastar Tema </button>
       <a href="index.php" class="btn black"> Lista de Temas </a>
     </form>

    
    
     

     </div>
</div>

<?php
include_once '../includes/footer.php';
?>