<?php

$servidor= "localhost";
$usuario= "root";
$senha="";
$banco= "escola";

$conexao= new mysqli($servidor, $usuario, $senha, $banco);


if($conexao ->connect_error){
    die("Erro de conexão" . $conexao->correct_error);
}

$conexao->query("CREATE DATABASE IF NOT EXISTS cadastro_alunos" );
$conexao->select_db("cadastro_alunos");

$sql ="CREATE TABLE IF NOT EXISTS usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    email VARCHAR(100) NOT NULL,
    tel VARCHAR(50) NOT NULL
)" 
?>