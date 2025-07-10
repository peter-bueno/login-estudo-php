<?php
// Dados de conexão com o banco
$host = "";            // Host do banco 
$db   = "";            // Nome do banco de dados
$user = "";            // Usuário do banco 
$pass = "";            // Dados ficticios

// Cria conexão com o banco usando a classe mysqli
$conn = new mysqli($host, $user, $pass, $db);

// Verifica se houve erro de conexão
if ($conn->connect_error) {
    // Encerra a execução e exibe mensagem de erro
    die("Erro na conexão: " . $conn->connect_error);
}
?>

?>