<?php
function buscaUsuario($conexao, $email, $pass){
	$senhaMd5 = md5($pass);
	$query = "select * from usuario where email = '$email' and senha = '$senhaMd5'";
	$resultado = mysqli_query($conexao, $query);
	$user = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function insertUser($conexao, $nome, $pass, $email, $tel, $status, $nivel){
    $query = "insert into usuario (nome, pass, email, tel, status, nivel) values ('{$nome}', '{$pass}', '{$email}', '{$tel}', {$status}, {$nivel})";
    //echo $query;
    //die();
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}