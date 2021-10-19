
<?php
session_start();

$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');


$conexao= mysqli_connect("localhost", "root", "", "tcc");

$sql="SELECT * FROM usuarios WHERE usuario='$usuario' ";

$resultado= mysqli_query($conexao,$sql );

if ($resultado !=false) {
	$usuario=mysqli_fetch_assoc($resultado);
	if ($usuario != null) {
		
	//usuario existe
	$senhaMD5 = md5($senha);
	if ($usuario['senha']==$senhaMD5) {
		//senha correta
		$_SESSION['usuario']=$usuario['usuario'];
		$_SESSION['id']=$usuario['id'];
		$_SESSION['nivel_acesso']=$usuario['nivel_acesso'];

		if ($usuario['nivel_acesso']==0) {
			header("Location:../usuario/index.php");
		} 
		else{
			$_SESSION['mensagem']="Verifique o seu nível de acesso ao sistema";
			header("Location:index.php");
		}
		
	}else{
		//senha incorreta
		$_SESSION['mensagem']= "Senha incorreta!";
		header("Location:login.php");
	}

}else{
	//usuario não existe
	$_SESSION['mensagem']= "Usuario informado não existe";
	header("Location:login.php");

}

} else {
	//caso der erro no banco ou na conexão
	$_SESSION['erro']=mysqli_error($conexao);
	header("Location:index.php");
}

