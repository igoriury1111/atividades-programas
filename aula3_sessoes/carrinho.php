<?php

session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title>Aula 3 - Carrinho</title>
    <style> body { font-family: sans-serif; margin: 20px; } </style>
    </head>
    <body>
    <h1>Seu Carrinho de Compras</h1>
    <a href="index.php">Voltar para a Loja</a>
    <hr>
    <?php

    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {

    echo "<h3>Itens no seu carrinho:</h3>";
    echo "<ul>";

    foreach ($_SESSION['carrinho'] as $item) {
    echo "<li>" . htmlspecialchars($item) . "</li>";
    }
    echo "</ul>";

    echo '<br><a href="limpar.php">Esvaziar Carrinho</a>';
    } else {

    echo "<p>Seu carrinho está vazio.</p>";
    }
    ?>
    </body>
</html>
