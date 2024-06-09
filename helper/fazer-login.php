<?php

include('banco.php');
include('redirecionamento.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
$result = [];

$conn = conexaoMySQL();

$sql = 'SELECT id, nome, senha, tipo FROM usuario where email = ?';
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $email);

mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $id, $nome, $hashSenha, $tipoUsuario);

if (mysqli_stmt_fetch($stmt)) {
    // Verificar a senha
    $senhaComPepper = hash_hmac("sha256", $senha, ENV['PEPPER']);
    if (password_verify($senhaComPepper, $hashSenha)) {
        echo "Login bem-sucedido! Bem-vindo, " . $nome . ".";
        $_SESSION['mensagem_sucesso'] = 'Login bem-sucedido!';
        
        redirecionarUsuarioLogado($tipoUsuario);
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}
