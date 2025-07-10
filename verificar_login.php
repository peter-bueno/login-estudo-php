<?php
// Inclui o arquivo com os dados de conexão com o banco (host, user, senha, banco)
require_once 'db_config.php'; // Busca dados de conexão

// Recebe os dados enviados pelo JavaScript via método POST
// Se não houver dados, usa string vazia (evita erro)
$nome_usuario = $_POST['usuario'] ?? '';
$senha_usuario = $_POST['senha'] ?? '';

// Cria a instrução SQL usando placeholders (?) para evitar SQL Injection
$sql = "SELECT * FROM usuario WHERE nome = ? AND senha = ?";

// Prepara a query no banco de dados (evita SQL injection e erros de formatação)
$stmt = $conn->prepare($sql);

// Associa os valores reais aos placeholders da query
// "ss" indica dois parâmetros do tipo string (s = string)
$stmt->bind_param("ss", $nome_usuario, $senha_usuario);

// Executa a query no banco de dados
$stmt->execute();

// Obtém o resultado da execução da query como um objeto mysqli_result
$resultado = $stmt->get_result();

// Verifica se encontrou algum registro correspondente (num_rows > 0)
if ($resultado->num_rows > 0) {
    // Se encontrou, login está correto
    echo "Login realizado com sucesso!";
} else {
    // Se não encontrou nenhum registro, login falhou
    echo "Usuario ou Senha invalidos.";
}
?>
