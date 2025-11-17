<?php
// Arquivo: src/Conexao.php
// 1. Define o "endereço" da classe (Namespace)
namespace App;
// 2. Importa a classe PDO (para não precisar usar \PDO)
use PDO;
use PDOException;
// 3. Cria a classe
class Conexao {
 // 4. Cria um método ESTÁTICO (não precisa instanciar)
 public static function getConexao() {
 $host = 'localhost';
 $db = 'db_meu_blog'; // Banco da Aula 5
 $user = 'root';
 $pass = '';
 $charset = 'utf8mb4';
 $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
 $options = [
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::ATTR_EMULATE_PREPARES => false,
 ];
 // 5. Retorna a conexão
 try {
 return new PDO($dsn, $user, $pass, $options);
 } catch (PDOException $e) {
 throw new PDOException($e->getMessage(), (int)$e->getCode());
 }
 }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head><title>Área Restrita</title></head>
<body>
 <h1>Bem-vindo à Área Restrita!</h1>

 <p>Olá, <strong><?php echo $nome_seguro; ?></strong>!</p>

 <a href="logout.php">Sair</a>
</body>
</html>