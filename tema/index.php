<?php
//Conexão
include_once '../php_action/db_connect.php';
//Header
include_once '../includes/header.php';
//Message
include_once '../includes/message.php';
//Session 
require_once '../sessao.php';


?>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title>Temas</title>
    </head>

<style> 
    .menu{
     background: transparent; 
     box-shadow: none;
}
a:link{
    text-decoration-line: none;
}
a{  
    color: #000080;
    font-weight: bold;
}
.card-image{
  background-color: black;
}
.imp h3{
  font-size: 2em
}
.card:hover {
    transform: scale(1.1);
    transition: all 0.5s;
  } 
</style>
<header> 
          <nav class="menu">
            <div class="nav-wrapper purple">  
              <ul class="center hide-on-med-and-down">
                <a href="../usuario/index.php">Início</a>    
              </ul>
            </div>
           </nav>

           <nav class="menu">
            <div class="nav-wrapper black">  
              <ul class="center hide-on-med-and-down">
                <a href="adcnartext.php">Adicionar Tema</a>    
              </ul>
            </div>
           </nav>


     <h3 class="light center">Temas </h3>

           
         
           <?php
           $sql = "SELECT * FROM tema";
           $resultado = mysqli_query($connect, $sql);

           if(mysqli_num_rows($resultado) > 0 ):

           while($dados = mysqli_fetch_array($resultado)):
?>
  <div class="row">
    <div class="col s6 m2 ">
      <div class="card">
        <div class="card-image">
          <img src="../imagens/nada.png">
        </div>
        <div class="card-content">
          <p><?php echo $dados['tema']; ?></td></p>
        </div>
        <div class="card-action center">
        <a class="purple-text" href="text.php?id_tema=<?php echo $dados['id_tema']; ?>">Texto de Apoio</a>
        </div>
      </div>
    </div>


                      

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

           
     

     
    
   

<?php
include_once '../includes/footer.php';
?>

