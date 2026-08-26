<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$sql = "UPDATE clientes SET id='$id', nome='$nome', email='$email', telefone='$telefone' WHERE id = '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");

?>