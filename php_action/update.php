<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):

$tema = mysqli_escape_string($connect, $_POST['tema']);
$textun = mysqli_escape_string($connect, $_POST['textun']);
$texttwo = mysqli_escape_string($connect, $_POST['texttwo']);
$texttree = mysqli_escape_string($connect, $_POST['texttree']);
$textfor = mysqli_escape_string($connect, $_POST['textfor']);
$textfive = mysqli_escape_string($connect, $_POST['textfive']);
$textsix = mysqli_escape_string($connect, $_POST['textsix']);


$id_tema = mysqli_escape_string($connect, $_POST['id_tema']);

$sql = "UPDATE tema SET tema = '$tema', textun = '$textun', texttwo = '$texttwo', texttree = '$texttree', textfor = '$textfor', textfive = '$textfive', textsix = '$textsix' WHERE id_tema = '$id_tema'";;

if(mysqli_query($connect, $sql)):
   $_SESSION['mensagem'] = "Atualizado com sucesso!";
   header('Location: ../adm/temasdm.php?');
else:
   $_SESSION['mensagem'] = "Erro ao atualizar";
   header('Location: ../adm/temasdm.php?');
endif;

endif;

if(isset($_POST['btn-edit'])):

   $nome = mysqli_escape_string($connect, $_POST['nome']);
   $email = mysqli_escape_string($connect, $_POST['email']);
   $usuario = mysqli_escape_string($connect, $_POST['usuario']);
   $senha = mysqli_escape_string($connect, $_POST['senha']);
   $nivel_acesso = mysqli_escape_string($connect, $_POST['nivel_acesso']);
   
   
   $id = mysqli_escape_string($connect, $_POST['id']);
   
   $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', usuario ='$usuario', senha = '$senha', nivel_acesso = '$nivel_acesso' WHERE id = '$id'";;
   
   if(mysqli_query($connect, $sql)):
      $_SESSION['mensagem'] = "Atualizado com sucesso!";
      header('Location: ../adm/temasdm.php?');
   else:
      $_SESSION['mensagem'] = "Erro ao atualizar";
      header('Location: ../adm/editusuario.php?');
   endif;
   
   endif;
