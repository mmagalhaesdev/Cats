<?php
session_start();
include '../Model/db.php';
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM usuario WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($usuario = $result->fetch_assoc()) {
if (password_verify($senha, $usuario['senha'])) {
// Cria a sessão com o ID do usuário
$_SESSION['usuario_id'] = $usuario['id'];
// Redireciona para o feed
header("Location: ../View/novo_post.php");
exit;
} else {
echo "Senha incorreta.";
}
} else {
echo "Usuário não encontrado.";
}
$conn->close();
?>