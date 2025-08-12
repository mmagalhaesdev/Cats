<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<header>
    <div class="container">
            <div class="logo">
                <img src="../Imagens/logo.png">
            </div>

            <div class="menuToggle">
                <div class="toggle"></div>
            </div>
    </div>
</header>


<div class="formulario">
    <div class="form">
        <h2>Login</h2>
        <br>
        <p><a href="../View/cadastrar.php">Ainda não tem conta? <spam style="color: #FFA255">Cadastre-se</spam></a></p>
        <br>
        <form action="../Controller/processa_login.php" method="POST">
            <input type="email" name="email" placeholder ="Email" required><br><br>
            <input type="password" name="senha" placeholder ="Senha" required><br><br>
            <button type="submit">Logar</button>
        </form>
    </div>
</div>
<script src="../touggle.js"></script>
</body>
</html>