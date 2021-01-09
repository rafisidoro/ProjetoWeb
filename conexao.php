<?php

$conexao = mysqli_connect("localhost", "root", "", "projetoWeb");

if(! $conexao ){
    echo "Erro ao conectar!".mysqli_connect_error();
}
?>