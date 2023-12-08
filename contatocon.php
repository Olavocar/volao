<?php
session_start();
include_once("config.php");

$nome = filter_input(INPUT_POST, 'nome');
$telefone = filter_input(INPUT_POST, 'telefone');
$email = filter_input(INPUT_POST, 'email');
$mensagem = filter_input(INPUT_POST, 'mensagem');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO contato (nome, telefone, email, mensagem, created) VALUES ('$nome', '$telefone', '$email', '$mensagem', NOW())";
$resultado_usuario = mysqli_query($con, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: contato.html");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: contato.html");
}
?>