<?php
session_start();
include('config.php');

if(empty($_POST['nome']) || empty($_POST['email'])){
   header('Location: contato.php');
   exit(); 
}

$nome = mysqli_real_escape_string($conn, $POST['nome']);
$email = mysqli_real_escape_string($conn, $POST['email']);

$query = "select nome from email where email = '{$nome}' and senha = ('{$semail}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1){
   $_SESSION['nome'] = $email;
   header('Location: contato.php');
   exit();
}else{
   $_SESSION['nao_autenicado'] = true;
   header('Location: contato.php');
   exit();
}

?>