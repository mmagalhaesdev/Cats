<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="container">
        <div class="flex">
            <div class="logo">
                <img src="Imagens/logo.png">
            </div>
            <div class="meuToggle">
                <div class="toggle"></div>
                <div class="toggle"></div>
                <div class="toggle"></div>
            </div>
        <div>
    </div>
</header>

<div class="line">
</div>

<div class="formulario">
    <div class="form">
        <h2>Cadastre-se!</h2>
        <br>
        <form action="processa_cadastro.php" method="POST">
        <input type="email" name="email" placeholder ="Email" required><br><br>
        <input type="password" name="senha" placeholder ="Senha" required><br><br>
        <input type="password" name="confirmar_senha" placeholder ="Confirmar a Senha" required><br><br>
        <button type="submit">Cadastrar</button>
        </form>
        <br>
        <p><a href="login.php">Já tem conta? <spam style="color: #FFA255"> Faça login </spam> </a></p>
    </div>
</div>

</body>
</html>