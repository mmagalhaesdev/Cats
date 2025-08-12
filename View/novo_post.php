<?php
session_start();
// Verifica se está logado
if (!isset($_SESSION['usuario_id'])) {
header("Location: login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Novo Post</title>
<link rel="stylesheet" href="../css/style.css">
<style>

    .form1 input{
        font-size: 15px; 
        font-family: Roboto Condensed;
        border-radius: 6px;
        padding-top: 10px;
    }
    .form1 h2{
        font-size: 30px; 
        font-family: Roboto Condensed;
        color: #FF6554;
    }
    .form1 label{
        font-size: 15px; 
        font-family: Roboto Condensed;
        color: #FF6554;
    }
    .form1 p, a{
        font-family: Roboto Condensed;
        font-size: 15px; 
        text-decoration: none;
        color: black;
    }
    .form1 button{
        width: 120px;
        height: 40px;
        background: #FFA255;
        color: white;
        border: 1px solid #FF6554;
        border-radius: 6px;
    }


</style>
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
    <div class="form1">
        <form action="salvar_post.php" method="POST" enctype="multipart/form-data">
            <h2>Criar novo post</h2>
            <br>
            <label>Imagem:</label>
            <br>
            <input type="file" name="imagem" accept="image/*" required><br><br>
            <br>
            <textarea name="legenda" placeholder="Legenda" rows="4" cols="40" required></textarea><br><br>
            <button type="submit">Postar</button>
        </form>
    </div>
</div>
<script src="../Script/toggle.js"></script>
</body>
</html>