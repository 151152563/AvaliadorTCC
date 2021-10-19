<?php
//Conexão
include_once '../php_action/db_connect.php'; 
//Header 
include_once '../includes/header.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
     <div class="col s12 m6 push-m3">
     <h3 class="light"> Editar </h3>
     <form action="../php_action/update.php" method="POST">
     <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
     
     <div class="row">
        <div class="input-field col s12">
          <textarea id="nome" name="nome" class="materialize-textarea"><?php echo $dados['nome'];?></textarea>
          <label for="nome">Nome</label>
        </div>
      </div>
   

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="email" class="materialize-textarea"><?php echo $dados['email'];?></textarea>
          <label for="email">Email</label>
        </div>
      </div>
   

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="usuario" class="materialize-textarea"><?php echo $dados['usuario'];?></textarea>
          <label for="usuario">Usuário</label>
        </div>
      </div>
    

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="senha" class="materialize-textarea"><?php echo $dados['senha'];?></textarea>
          <label for="senha">Senha</label>
        </div>
      </div>
    

    
      <div class="row">
        <div class="input-field col s12">
          <textarea id="nivel_acesso" class="materialize-textarea"><?php echo $dados['nivel_acesso'];?></textarea>
          <label for="nivel_acesso">Nivel de Acesso</label>
        </div>
      </div>

       

       <button type="submit" name="btn-edit" class="btn"> Atualizar </button>
       <a href="index.php" class="btn green"> Lista de Temas </a>
     </form>

    
    
     

     </div>
</div>

<?php
include_once '../includes/footer.php';
?>