<?php
session_start();
include 'db_connect.php'; // Inclua a conexão com o banco de dados

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: account.php"); // Redireciona para a página de login se não estiver logado
    exit();
}

$usuario = $_SESSION['usuario'];

// Recupera informações do usuário do banco de dados
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();
$user_data = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Dev Envolvente</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="dashboard.js">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <h1>Bem-vindo ao seu perfil!</h1>
        </div>
    </header>
    <main class="main-content">
        <div class="profile-card">
            <div class="profile-header">
                <img src="https://via.placeholder.com/150" alt="Foto do Perfil" class="profile-img">
            </div>
            <div class="profile-body">
            <h2>Bem-vindo, <?php echo htmlspecialchars($username); ?>!</h2>
                <p>Desenvolvedor Web | Designer | Criativo</p>
                <button id="editButton">Editar Perfil</button>
            </div>
            <div class="profile-footer">
            </div>
        </div>
    </main>
    <script src="dashboard.js"></script>
</body>
</html>
