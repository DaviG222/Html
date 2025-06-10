<?php
session_start();

$usuario_correto = "admin";
// IMPORTANTE: Gere o hash da sua senha "1234" usando: echo password_hash('1234', PASSWORD_DEFAULT);
// Substitua o valor abaixo pelo hash real gerado.
$senha_correta_hasheada = '$2y$10$k0uT5jIatIqi/h1yZjAorOS/wvLgF24LxbDX0F3oIqMgjERJGHx12';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($usuario === $usuario_correto && password_verify($senha, $senha_correta_hasheada)) {
    $_SESSION['usuario'] = $usuario;

    // Página de sucesso estilizada com redirecionamento
    echo <<<HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Realizado - BitBox Store</title>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content="2;url=index.html">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f3f4f6;
            margin: 0 0;
            display: flex;
            flex-direction: column;
 
        }
        header {
            background-color: #333;
            color: white;
            padding: 70px 0;
            text-align: center;
            min-height: 60px;
            text-align: center;
            text-height: 10px;
        }
        header h1 {
            padding: 0px;
            margin: 0;
            font-size: 2em;
            text-align: center;
            height: 10px;
        }
      /*  nav a, nav button {
            color: white;
            margin: 230px;
            text-decoration: none;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.2em;
} */
        main {
            min-height: calc(100vh - 140px); /*altura da viewport menos header +9 footer */
            padding: 20px;
        }
        .mensagem-container {
            max-width: 500px;
            margin: 80px auto;
            background-color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .mensagem-container h2 {
            font-size: 2.2em;
            color: #28a745; /* Verde para sucesso */
            margin-bottom: 15px;
        }
        .mensagem-container p {
            font-size: 1.1em;
            color: #333;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: right;
            padding: 20px 50px; /* Reduzindo o padding */
            min-height: 60px;  /* Ajustando a altura mínima */
            width: 100%;
            min-height: 80px;
        }
    </style>
</head>
<body>
    <header>
        <h1>BitBox Store</h1>

    </header>
    <main>
        <div class="mensagem-container">
            <h2>Login realizado com sucesso!</h2>
            <p>Você será redirecionado para o painel em instantes...</p>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 BitBox Store. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
HTML;
    exit(); 
} else {
    // Página de erro estilizada com redirecionamento
    echo <<<HTML
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de Login - BitBox Store</title>
    <link rel="stylesheet" href="style.css"> 
    <meta http-equiv="refresh" content="3;url=login.php">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f3f4f6;
            margin-top: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #333;
            color: white;
            padding: 70px 0;
            margin: 0;
            text-align: center;
            min-height: 80px;
        }
        header h1 {
            padding: 0px;
            margin: 0;
            font-size: 2em;
        }
       /* header nav a {
            color: white;
            text-decoration: none;
            margin: 0 0px;
            font-weight: bold;
        } */
        main {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
        }
        .mensagem-container {
            max-width: 500px;
            margin: 80px auto;
            background-color: white;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border: 1px solid #ddd; /* Borda suave */
        }
        .mensagem-container h2 {
            font-size: 2.2em;
            color: #dc3545; /* Vermelho para erro */
            margin-bottom: 15px;
        }
        .mensagem-container p {
            font-size: 1.1em;
            color: #333;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: right;
            padding: 20px 50px; /* Reduzindo o padding */
            min-height: 60px;  /* Ajustando a altura mínima */
            width: 100%;
            min-height: 80px;
        }
    </style>
</head>
<body>
    <header>
        <h1>BitBox Store</h1>
    </header>
    <main>
        <div class="mensagem-container">
            <h2>Erro de Login</h2>
            <p>Usuário ou senha inválidos.</p>
            <p>Você será redirecionado para a página de login em instantes...</p>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 BitBox Store. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
HTML;
    exit();
}
?>
