<?php

function exibirMensagens(){ 
    if (isset($_SESSION['mensagem'])) {
        $mensagem= $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
    return $mensagem;
    }
}
function exibirErros() {
    if (isset($_SESSION['erro'])) {
        $erro=$_SESSION['erro'];
    unset($_SESSION['erro']);
    return $erro;
    }
}

function verifyAcesso($nivelAcesso) {

    if (isset($_SESSION['nivel_acesso'])) {
        if ($_SESSION['nivel_acesso'] != $nivelAcesso) {
        $_SESSION['mensagem']="Você não possui acesso a esta pagina";
        header("Location:index.php");
        }	
    }else{
        $_SESSION['mensagem']="Você não possui acesso a esta pagina";
        header("Location:index.php");
    
    }
}




