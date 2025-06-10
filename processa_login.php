<?php
session_start();

// Usuário e senha fixos
$usuario_correto = "admin";
$senha_correta = "1234";

// Dados do formulário
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Verifica login
if ($usuario === $usuario_correto && $senha === $senha_correta) {
    $_SESSION['usuario'] = $usuario;

    // Mensagem estilizada + redirecionamento
    echo <<<HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content="2;url=index.html">
    <style>
        .mensagem {
            max-width: 500px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>BitBox Store</h1>
    </header>
    <main>
        <div class="mensagem">
            <h2>Login realizado com sucesso!</h2>
            <p>Você será redirecionado para o painel em instantes...</p>
        </div>
    </main>
</body>
</html>
HTML;
    exit();
} else {
    echo "<p>Usuário ou senha inválidos.</p>";
    echo "<a href='login.php'>Tentar novamente</a>";
}
