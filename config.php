<?php
    $dbHost = 'roundhouse.proxy.rlwy.net:56183';
    $dbUsername = 'root';
    $dbPassword = '-FE1G61cgB6dbhfHgG1Gd6EE5H5G1eE2';
    $dbname = 'railway';

    $conn = mysqli_connect($dbHost,$port,$dbUsername,$dbPassword,$dbname) or die ('Erro de conexão');

    if($conn->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão bem sucedida ";
    }

?>