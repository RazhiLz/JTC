<?php
session_start();
include 'db_connect.php'; // Inclua o arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Validação básica (certifique-se de que os campos não estão vazios)
    if (empty($usuario) || empty($senha)) {
        header("Location: account.php?erro=1");
        exit();
    }

    // Prepara e executa a consulta
    $stmt = $conn->prepare("SELECT senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se existe um usuário com esse nome
    if ($result->num_rows == 1) {
        $dado = $result->fetch_assoc();
        // Verifica a senha (assumindo que você está usando hash para armazenar senhas)
        if (password_verify($senha, $dado['senha'])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: dashboard.php"); // Redireciona para a página inicial
            exit();
        } else {
            // Senha incorreta
            $_SESSION['error'] = "Senha incorreta.";
            header("Location: account.php");
            exit();
        }
    } else {
        // Usuário não encontrado
        $_SESSION['error'] = "Usuário não encontrado.";
        header("Location: account.php");
        exit();
    }
}
?>
