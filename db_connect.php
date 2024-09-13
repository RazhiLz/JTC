<?php
$servername = "localhost";
$username = "root"; // ou o nome de usuário do MySQL
$password = ""; // ou a senha do MySQL
$dbname = "usuarios";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>