<?php
// Requisito 1: Verificação de sessão modularizada
include("components/session_check.php");
include("../infra/db/connect.php");

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]); // Proteção básica para garantir que é um número

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if($conn->query($sql) === TRUE){
        header("Location: home.php");
        exit();
    } else {
        echo "Erro ao deletar registro: " . $conn->error;
    }
} else {
    header("Location: home.php");
    exit();
}
?>