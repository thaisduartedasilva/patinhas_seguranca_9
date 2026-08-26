<?php

include "../infra/conexao.php";

$id = $_POST["id_a"];
$nome = $_POST["nome"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];

$sql = "UPDATE animais SET id_a='$id', nome='$nome', raca='$raca', idade='$idade' WHERE id_a= '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");

?>