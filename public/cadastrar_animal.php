<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];

$sql = "INSERT INTO animais (nome, raca, idade) VALUES (?, ?, ?)";

$stmt = $conexao -> prepare($sql);

$stmt-> bind_param("ssi", $nome, $raca, $idade);

$stmt->execute();

header("Location: ../index.php");

?>