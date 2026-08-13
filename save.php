<?php
include("conexao.php");

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$date = $_POST["date"];
$tel = $_POST["tel"];
$email = $_POST["email"];

$stmt = $conexao ->prepare(

    "INSERT INTO usuarios
    (nome, sobrenome, date, email, tel)

    VALUES (?, ?, ?, ?, ?)"
);

$stmt ->bind_param (

    "sssss", 

    $nome, 
    $sobrenome,
    $date,
    $email,
    $tel
);

if ($stmt->execute()) {
    echo "dados cadastrados com sucesso";
}else{
    echo "erro no cadastro";
}
$stmt->close();
$conexao->close();

?>
