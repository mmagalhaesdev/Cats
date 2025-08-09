<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<h2>Login</h2>
<form action="processa_login.php" method="POST">
<label>Email:</label>
<input type="email" name="email" required><br><br>
<label>Senha:</label>
<input type="password" name="senha" required><br><br>
<button type="submit">Logar</button>
</form>
<p><a href="cadastrar.php">Ainda não tem conta? Cadastre-se</a></p>
</body>
</html>