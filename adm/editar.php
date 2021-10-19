<?php
//Conexão
include_once '../php_action/db_connect.php'; 
//Header 
include_once '../includes/header.php';
//Select
if(isset($_GET['id_tema'])):
    $id_tema = mysqli_escape_string($connect, $_GET['id_tema']);
    $sql = "SELECT * FROM tema WHERE id_tema = $id_tema";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
     <div class="col s12 m6 push-m3">
     <h3 class="light"> Editar </h3>
     <form action="../php_action/update.php" method="POST">
     <input type="hidden" name="id_tema" value="<?php echo $dados['id_tema'];?>">
     
     <div class="row">
        <div class="input-field col s12">
          <textarea id="tema" name="tema" type="text" class="materialize-textarea"><?php echo $dados['tema'];?></textarea>
          <label for="tema">Tema</label>
        </div>
      </div>
   

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textun" class="materialize-textarea"><?php echo $dados['textun'];?></textarea>
          <label for="textun">Texto de Apoio 1</label>
        </div>
      </div>
   

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="texttwo" class="materialize-textarea"><?php echo $dados['texttwo'];?></textarea>
          <label for="texttwo">Texto de Apoio 2</label>
        </div>
      </div>
    

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="texttree" class="materialize-textarea"><?php echo $dados['texttree'];?></textarea>
          <label for="texttree">Texto de Apoio 3</label>
        </div>
      </div>
    

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textfor" class="materialize-textarea"><?php echo $dados['textfor'];?></textarea>
          <label for="textfor">Texto de Apoio 4</label>
        </div>
      </div>
   

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textfive" class="materialize-textarea"><?php echo $dados['textfive'];?></textarea>
          <label for="textfive">Texto de Apoio 5</label>
        </div>
      </div>
  

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textsix" class="materialize-textarea"><?php echo $dados['textsix'];?></textarea>
          <label for="textsix">Texto de Apoio 6</label>
        </div>
      </div>

       

       <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
       <a href="index.php" class="btn green"> Lista de Temas </a>
     </form>

    
    
     

     </div>
</div>

<?php
include_once '../includes/footer.php';
?>