<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'mysql';
    $dbName = 'formulario-jeremias';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexão feita com sucesso";
    }
?>