<?php

    //fazendo conexão com o banco de dados
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="usuarioscookies";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }

?>