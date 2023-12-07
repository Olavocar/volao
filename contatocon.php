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

$query = "select nome from nome where nome = '{$nome}' and telefone = '{$telefone}' and email = ('{$email}' and mensagem ='{$mensagem}')";

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