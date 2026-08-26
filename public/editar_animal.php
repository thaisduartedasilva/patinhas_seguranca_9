<?php

include "..infra/conexao.php";

$id = $_GET["id_a"];
$sql = "SELECT * FROM animais WHERE id_a = $id";
$resultado = mysqli_query($conexao, $sql);

$animal = mysqli_fetch_assoc($resultado);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Editar Pet</title>
</head>

<body>
    <header>
        <h1>Pet Shop AUmigos</h1>
    </header>

    <main>
        <h2>Editando o pet <?php echo $animal["nome"]?>!</h2>
        <form acution= "atualizar_animal.php" method="POST">
            <input type="hidden" name="id_a" value="<?php echo $animal["id_a"]?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $animal["nome"]?>">
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca" value="<?php echo $animal["raca"]?>">
            <br>
            <label for="idade">Idade:</label>
            <input type="int" name="idade" value="<?php echo $animal["idade"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </main>
    
</body>
</html>