<?php

session_start();

    if (isset($_POST['produto_nome'])) {
        
    $produto = $_POST['produto_nome'];

    if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
    }
    
    $_SESSION['carrinho'][] = $produto;
    echo "Produto '$produto' adicionado ao carrinho!";
    }

    $total_itens = 0;
    if (isset($_SESSION['carrinho'])) {
    $total_itens = count($_SESSION['carrinho']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>Aula 3 - Loja</title>
 <style> body { font-family: sans-serif; margin: 20px; } </style>
</head>
<body>
 <h1>Nossa Loja 🛒</h1>

 <h2><a href="carrinho.php">Ver Carrinho (<?php echo $total_itens; ?> itens)</a></h2>
 <h3>Produtos Disponíveis:</h3>
 <form method="POST">
 <input type="hidden" name="produto_nome" value="Notebook">
 <button type="submit">Adicionar Notebook (R$ 4000)</button>
 </form>
 <br>

 <form method="POST">
 <input type="hidden" name="produto_nome" value="Mouse">
 <button type="submit">Adicionar Mouse (R$ 150)</button>
 </form>
</body>
</html>