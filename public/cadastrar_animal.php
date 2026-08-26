<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];

$sql = "INSERT INTO animais (nome, raca, idade) VALUES ('$nome', '$raca', '$idade')";

mysqli_query($conexao, $sql);
header("Location: ../index.php");

?>