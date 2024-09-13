<?php
// Incluir o arquivo de conexão com o banco de dados
include 'db_connect.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se os dados foram enviados e não estão vazios
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Verificar se os campos não estão vazios
        if (!empty($nome) && !empty($email) && !empty($senha)) {
            // Hash da senha para segurança
            $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

            // Preparar e executar a consulta SQL
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $nome, $email, $senhaHash);


            if ($stmt->execute()) {
                // Define a mensagem de sucesso na sessão
                $_SESSION['success'] = "Cadastro realizado com sucesso! Por favor, agora faça o login.";
                // Redireciona para a página de login
                echo "Redirecionando...";
                sleep(2); // Atraso de 2 segundos para que a mensagem seja vista
                
                header("Location: account.php");
                exit();
                
            } else {
                // Define uma mensagem de erro na sessão e redireciona de volta para o formulário de registro
                $_SESSION['error'] = "Erro: " . $stmt->error;
                header("Location: register.php");
                exit(); // Encerra o script para garantir que o redirecionamento funcione
            }
           
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }

    $conn->close();
}
?>