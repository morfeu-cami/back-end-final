
<?php
include("conexao.php");

$busca = isset($_GET["busca"]) ? trim($_GET["busca"]): "";

if($busca !== ""){
    $stmt = $conexao->prepare(
        "SELECT* FROM usuarios
        WHERE nome LIKE ? OR sobrenome LIKE ? OR email LIKE ? OR tel LIKE ? 
        ORDEN BY id DESC"
    );
    $termo ="%" . $busca . "%";
    $stmt->bind_param("ssss", $termo, $termo, $termo, $termo);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else{

}
