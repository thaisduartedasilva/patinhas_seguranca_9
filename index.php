<?php

include "infra/conexao.php";

$clientes = mysqli_query($conexao, "SELECT * FROM clientes");
$animais = mysqli_query($conexao, "SELECT * FROM animais");

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Patinhas com segurança</title>
</head>

<body>

    <header>
        <h1>Pet Shop AUmigos</h1>
    </header>

    <main>
        <h2>Cadastrar Cliente:</h2>
        <form action="public/cadastar_cliente.php" method="POST">
            <label for="nome">Nome do Cliente:</label>
            <input type="text" name="nome">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email">
            <br>
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone">
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>
        <br>
        <h2>Cadastrar Pet:</h2>
        <form action="public/cadastar_animal.php" method="POST">
            <label for="nome">Nome do Animal:</label>
            <input type="text" name="nome">
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca">
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade">
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>

        <br><br>
        <div>
            <h2>Clientes Cadastrados:</h2>
            <table>
                <tr>
                    <th>Nome Cliente</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
                <?php while ($cliente = mysqli_fetch_assoc($clientes)) { ?>
                    <tr>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['telefone']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td>
                            <a href="puplic/editar_cliente.php?id= <?php echo $cliente["id"]; ?>">Editar</a>
                            <a href="puplic/excluir_cliente.php?id= <?php echo $cliente["id"]; ?>">Excluir</a>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <br><br>

        <div>
            <h2>Pets Cadastrados:</h2>
            <table>
                <tr>
                    <th>Nome Pet</th>
                    <th>Raça</th>
                    <th>Idade</th>
                </tr>
                <?php while ($animal = mysqli_fetch_assoc($animais)) { ?>
                    <tr>
                        <td><?php echo $animal['nome'] ?></td>
                        <td><?php echo $animal['raca'] ?></td>
                        <td><?php echo $animal['idade'] ?></td>
                        <td>
                            <a href="puplic/editar_animal.php?id= <?php echo $animal["id_a"] ?>">Editar</a>
                            <a href="puplic/excluir_animal.php?id= <?php echo $animal["id_a"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main>


</body>

</html>