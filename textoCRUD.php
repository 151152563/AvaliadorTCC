<?php
session_start();
ob_start();
function recuperar_todos_texto()
{
    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $sql = "SELECT * FROM texto";
    $response = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($response);
}


function recuperar_id_texto($id_texto)
{

    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $sql = "SELECT * FROM texto WHERE id_text= '$id_texto'";
    $response = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($response);
}



function recuperar_id_usuario($id_usuario)
{

    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $sql = "SELECT * FROM texto WHERE id_usuario= '$id_usuario'";
    $response = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($response);
}

function gravar_texto($id_usuario, $texto)
{
    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $sql = "INSERT INTO texto (id_usuario,texto) VALUES ('$id_usuario','$texto')";
    mysqli_query($conexao, $sql);
}

function atualizar_texto($id_texto, $texto)
{
    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $sql = "UPDATE texto SET texto = ('$texto') WHERE id_text = $id_texto";
    mysqli_query($conexao, $sql);
}

function deletar_texto($id_texto)
{
    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $sql = "DELETE from  texto  WHERE id_text = $id_texto";
    mysqli_query($conexao, $sql);
}

?>