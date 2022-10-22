<?php
    $dbHost = 'Localhost'; #Host do banco de dados
    $dbUser = 'root'; #Usuario
    $dbPassword = ''; #Senha
    $dbName = 'plataform'; #Nome do banco de dados

    $con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName)
    or die ('Não foi possível se conectar ao banco de dados');

?>