<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once '../php_action/db_connect.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	}elseif(stristr($dados['senha'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( ' ) utilizado na senha é inválido";
	}else{
		$result_usuario = "SELECT id FROM usuarios WHERE usuario='". $dados['usuario'] ."'";
		$resultado_usuario = mysqli_query($connect, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}
		
		$result_usuario = "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($connect, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = md5($dados['senha']);
        
		
		$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha, nivel_acesso) VALUES ('" .$dados['nome']. "', '" .$dados['email']. "', '" .$dados['usuario']. "', '" .$dados['senha']. "', '0')";
		$resultado_usario = mysqli_query($connect, $result_usuario);
		if(mysqli_insert_id($connect)){
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			header("Location: ../usuario/index.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
            
		}
	}
	
}

	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
    margin: 0;
    padding: 0;
    border: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background: GhostWhite;
    color: black;
    font-weight: 500;
    display: flex;
    min-height: 100vh;
    min-width: 100vw;

}

main {
    width: 50vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
}

main h1 {
    color: black;
    font-size: 3rem;
    margin-bottom: 3rem;
    text-align: center;
}

main.social-media {
    display: flex;
    align-content: center;
}

main .social-media a {
    text-decoration: none;
}

main .social-media img {
    width: 36px;
    margin-left: 3rem;
}

main .social-media a:first-child img {
    margin-left: 0;
}

main .alternative {
    margin-top: 1rem;
}

main .alternative span {
    font-size: 1.1rem;
    font-weight: 400;
    color: black;
    position: relative;
}

main .alternative span::before, main .alternative span::after {
    position: absolute;
    content: '';
    height: 1px;
    width: 100px;
    bottom: 50%;
    right: 50px;
    background: black;
}

main .alternative span::after {
    left: 50px;
}

main form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

main form label {
    display: flex;
    flex-direction: column;
}

main form label span {
    font-size: 1.1rem;
    margin-top: 2rem;
}

main form input {
    background: white;
    width: 300px;
    height: 50px;
    padding: 0 0.5rem;
    margin-top: 1rem;
    outline: none;
    color: black;
    font-size: 1rem;
    border: 1px solid #040B18;
   
}

main form input[type="submit"] {
    cursor: pointer;
    width: 50%;
    margin-top: 3rem;
    border: none;
    
    background: black;
    color: white;
  
    transition: all .3s ease-in-out;
}

main form input[type="submit"]:hover {
    background: #5952d4;
}

section.images {
    width: 50vw;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    padding: 4rem;
}

section.images img {
    width: 100%;
}







</style>

<body>
    <main>
        <h1>Crie Sua Conta</h1>
        <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
        <div class="social-media">
         
            <a href="#">
                <img src="../imagens/facebook.png" alt="Facebook">
            </a>
          
        </div>

        <div class="alternative">
            <span>OU</span>
        </div>

        <form method="POST" action="">
            <label for="name">
                <span>Nome</span>
                <input type="text" name="nome">
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" name="email" >
            </label>

            <label for="usuario">
                <span>Usuário</span>
                <input type="text" name="usuario" >
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" name="senha" >
            </label>
            <br>

            <span> <a href="login.php">Clique aqui</a> para logar caso já tenha uma </span> 

            <input type="submit" value="Cadastrar" name="btnCadUsuario">

           
        </form>
    </main>
    <section class="images">
        <img src="../imagens/deu.png" >
        <div class="circle"></div>
    </section>
</body>
</html>