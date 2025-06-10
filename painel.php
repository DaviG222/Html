<?php
session_start();

// Verifica se está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel - BitBox Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Painel de Controle</h1>
        <nav>
            <a href="index.html">Início</a>
            <a href="produtos.html">Produtos</a>
            <a href="logout.php">Sair</a>
        </nav>
    </header>

    <main>
        <h2>Olá, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
        <p>Você está logado com sucesso.</p>
    </main>

    <footer>
        <p>&copy; 2025 BitBox Store. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
