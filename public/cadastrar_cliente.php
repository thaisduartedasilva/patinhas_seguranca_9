<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$sql = "INSERT INTO clientes (nome, email, telefone) VALUES (?, ?, ?)";

$stmt = $conexao-> prepare($sql);

$stmt->bind_param("ssi", $nome, $email, $telefone);

$stmt->execute();

header("Location: ../index.php");

?>