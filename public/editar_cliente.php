<?php

include "..infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM clientes WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

$cliente = mysqli_fetch_assoc($resultado);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Editar Cliente</title>
</head>

<body>
    <header>
        <h1>Pet Shop AUmigos</h1>
    </header>

    <main>
        <h2>Editando o cliente <?php echo $cliente["nome"]?>!</h2>
        <form acution= "atualizar_cliente.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $cliente["id"]?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $cliente["nome"]?>">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $cliente["email"]?>">
            <br>
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" value="<?php echo $cliente["telefone"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </main>
    
</body>
</html>