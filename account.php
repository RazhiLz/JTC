<?php
session_start(); // Inicia a sessão para acessar $_SESSION
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account.css">
    <title>Tela de Login - Dev Envolvente</title>

    <style>
        /* Adicione o estilo para a mensagem de sucesso */
    
    </style>

</head>
<body>
    <form class="login" action="login.php" method="post">
        <h2>Login</h2>



 
        <?php
        if (isset($_SESSION['error'])) {
            echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']); // Limpa a mensagem após exibição
        }
        ?>



        
        <div class="box-user">
            <input type="text" name="usuario" required autocomplete="off">
            <label>Email</label>
        </div>
        <div class="box-user">
            <input type="password" name="senha" required>
            <label>Senha</label>
            <a href="cadastro.php" class="forget"> Crie Sua Conta</a>
        </div>
        <button class="btn" type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Entrar
        </button>
    </form>
</body>
</html>
