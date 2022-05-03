<?php

include("conecta.php");
include("banco-usuario.php");
include("funcoes-seguranca.php");


$email = $_POST["email"];
$pass = $_POST["pass"];


echo $email;
echo $pass;


$user = buscaUsuario($conexao, $email, $pass);

if($user == null){
	$_SESSION["danger"] = "Usuário ou senha inválidos";
	header("Location: forms.php");

}else{

	logaUsuario($email);
	$_SESSION["success"] = "Você está logado!";
	header("Location: forms.php");
}

die();

?>