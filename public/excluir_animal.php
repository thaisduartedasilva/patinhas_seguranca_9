<?php

include "..infra/conexao.php";

$id = $_GET["id_a"];
$sql = "DELETE FROM animais WHERE id_a=$id"; 

mysqli_query($conexao, $sql);
header("Location: ../index.php");

?>