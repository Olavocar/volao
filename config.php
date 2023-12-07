<?php
    $dbHost = 'db4free.net:3306';
    $dbUsername = 'vola_o';
    $dbPassword = '2die4100';
    $dbname = 'dbvolao';

    $conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbname) or die ('Erro de conexão');

    if($conn->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão bem sucedida ";
    }

?>