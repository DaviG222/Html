<!-- login.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - BitBox Store</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 60px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container label {
            display: block;
            margin-bottom: 5px;
            margin-top: 15px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container button {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>BitBox Store</h1>
        <nav>
            <a href="index.html">Início</a>
            <a href="produtos.html">Produtos</a>
        </nav>
    </header>

    <main>
        <div class="login-container">
            <h2>Login</h2>
            <form action="processa_login.php" method="POST">
                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" required>
                
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
                
                <button type="submit">Entrar</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 BitBox Store. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
