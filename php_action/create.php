<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
$tema = mysqli_escape_string($connect, $_POST['tema']);
$textun = mysqli_escape_string($connect, $_POST['textun']);
$texttwo = mysqli_escape_string($connect, $_POST['texttwo']);
$texttree = mysqli_escape_string($connect, $_POST['texttree']);
$textfor = mysqli_escape_string($connect, $_POST['textfor']);
$textfive = mysqli_escape_string($connect, $_POST['textfive']);
$textsix = mysqli_escape_string($connect, $_POST['textsix']);

$sql = "INSERT INTO tema (tema, textun, texttwo, texttree, textfor, textfive, textsix) VALUES ('$tema', '$textun', '$texttwo', '$texttree', '$textfor', '$textfive', '$textsix')";

if(mysqli_query($connect, $sql)):
   $_SESSION['mensagem'] = "Tema cadastrado com sucesso!";
   header('Location: ../tema/index.php?');
else:
   $_SESSION['mensagem'] = "Erro ao cadastrar tema";
   header('Location: ../tema/index.php?');
endif;

endif;

