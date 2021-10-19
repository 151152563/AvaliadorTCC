<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):

$id_tema = mysqli_escape_string($connect, $_POST['id_tema']);

$sql = "DELETE FROM tema WHERE id_tema = '$id_tema'";

if(mysqli_query($connect, $sql)):
   $_SESSION['mensagem'] = "Deletado com sucesso!";
   header('Location: ../index.php?');
else:
   $_SESSION['mensagem'] = "Erro ao deletar";
   header('Location: ../index.php?');
endif;

endif;

if(isset($_POST['btn-delet'])):

   $id_tema = mysqli_escape_string($connect, $_POST['id']);
   
   $sql = "DELETE FROM usuarios WHERE id = '$id'";
   
   if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Deletado com sucesso!";
      header('Location: ../index.php?');
   else:
      $_SESSION['mensagem'] = "Erro ao deletar";
      header('Location: ../index.php?');
   endif;
   
   endif;
