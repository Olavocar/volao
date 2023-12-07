<?php
include'config.php';

{

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

$stmt = $conn->prepare("INSERT INTO cadastro (nome, telefone, email, mensagem) VALUES ('$nome','$telefone','$email','$mensagem')");
$stmt->bind_param('ssss', $nome, $telefone, $email, $mensagem);

if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$stmt->close(); //Fecha a conexão com o banco de dados

}

$conn->close();

?>