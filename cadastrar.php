<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>

<style>
    .toggle{
  width: 25px;
  height: 3px;
  background-color: #FF6554;
  margin-bottom: 3px;
  border-radius: 12px;
  cursor: pointer;
    }
    
   .menu{
        display: flex;
    }
    .formulario{
        align-items: center;
        justify-content: center;
        padding: 10px;
    }
</style>
<body>

<div class="menu">
    <div class="logo">
        <img src="Imagens/logo.png">
    </div>
    <div class="meuToggle">

        <div class="toggle"></div>
        <div class="toggle"></div>
        <div class="toggle"></div>
    </div>
</div>
<div class="formulario">
    <h2>Cadastre-se</h2>
    <form action="processa_cadastro.php" method="POST">
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    <label>Senha:</label>
    <input type="password" name="senha" required><br><br>
    <label>Confirme a senha:</label>
    <input type="password" name="confirmar_senha" required><br><br>
    <button type="submit">Cadastrar</button>
    </form>
    <p><a href="login.php">Já tem conta? Faça login</a></p>
</div>

</body>
</html>