<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //Coleta os dados do formulário
   $_nome = $_POST['nome'];
   $_telefone = $_POST['telefone'];
   $_email = $_POST['email'];
   $_mensagem = $_POST['mensagem'];

}

$nome = mysqli_real_escape_string($conn, $POST['nome']);
$telefone = mysqli_real_escape_string($conn, $POST['telefone']);
$email = mysqli_real_escape_string($conn, $POST['email']);
$mensagem = mysqli_real_escape_string($conn, $POST['mensagem']);

$query = "INSERT into cadastro values" (nome,telefone,email,mensagem) = '{$nome,$telefone,$email,$mensagem}';

?>