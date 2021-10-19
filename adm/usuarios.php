<?php
//Conexão
include_once '../php_action/db_connect.php';
//Header
include_once '../includes/header.php';
//Message
include_once '../includes/message.php';
?>



<div class="row">
     <div class="col s13 m8 push-m3">
     <h3 class="center"> Informações dos Temas </h3>
     <table class="striped"> 
           <thead>
                <tr>
                  <th>ID: </th>
                  <th>Usuário: </th>
                </tr>
           </thead>
           <tbody>
           <?php
           $sql = "SELECT * FROM usuarios";
           $resultado = mysqli_query($connect, $sql);

           if(mysqli_num_rows($resultado) > 0 ):

           while($dados = mysqli_fetch_array($resultado)):
?>
                 <tr>
                         <td><?php echo $dados['id']; ?></td>
                         <td><?php echo $dados['usuario']; ?></td>
                         <td><a href="editusuario.php?id=<?php echo $dados['id']; ?>" class="btn-floating black"><i class="material-icons">edit</i></a></td>   
                         <td><a href="visualizar.php?id=<?php echo $dados['id']; ?>" class="btn-floating purple"><i class="material-icons">visibility</i></a></td>   
                         <td><a href="#modal <?php echo $dados['id']; ?>" class="btn-floating black modal-trigger"><i class="material-icons">delete</i></a></td> 
                           
                     

                         <!-- Modal Structure -->
  <div id="modal <?php echo $dados['id']; ?>" class="modal">
    <div class="modal-content">
      <h4>Opa</h4>
      <p>Tem certeza que deseja excluir?</p>
    </div>
    <div class="modal-footer">
      <form action="../php_action/delete.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <button href="index.php" type="submit" name="btn-delet" class="btn red">Sim, desejo deletar</button>

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
      </form>

    </div>
  </div>
</tr>





            <?php endwhile; 
            else: ?>

           <tr>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
                         <td>-</td>
            </tr>
 
           <?php
           endif;
           ?>

           </tbody>
     </table>

     <br>
     
     
     </div>
</div>

<?php
include_once '../includes/footer.php';
?>

