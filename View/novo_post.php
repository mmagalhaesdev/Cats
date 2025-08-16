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
    .form1 form{
        border: 2px solid #E3E3E3;
        border-radius: 12px;
    }
    p{
        padding-left: 35px;
        font-size: 20px; 
        font-family: Roboto Condensed;
        color: #BFBFBF;
    }
    .form1 input{
        font-size: 15px; 
        font-family: Roboto Condensed;
        border-radius: 6px;
    }
    .form1 h2{
        padding-left: 35px;
        padding-top: 35px;
        font-size: 30px; 
        font-family: Roboto Condensed;
        color: #FF6554;
    }
    .form1 button{
        width: 120px;
        height: 40px;
        background: #FFA255;
        color: white;
        border: 1px solid #FF6554;
        border-radius: 6px;
    }
    #imagem{
        display: none;
    }
    .imagem2{
        background-color: #FFA255;
        padding: 7px;
        font-size: 18px; 
        font-family: Roboto Condensed;
        color: #FFFFFF;
        border-radius: 6px;
    }
    .file{
        padding-left: 35px;
    }
    .legenda{
         padding-left: 35px;
         padding-right: 35px;
    }
    .postar{
        padding: 0px 0px 20px 35px;
    }
    #legend{
        border: 3px solid #FF6554;
        border-radius: 6px;
        height: 118px;
        font-family: Roboto Condensed;
        color: #BFBFBF;
        padding: 10px;
        font-size: 15px;
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
            <p>Imagem:</p>
            <input type="file" id="imagem" name="imagem" accept="image/*" required><br>
            <div class="file">
            <label for="imagem" class="imagem2">Escolher Arquivo</label>
            </div>
            <br>
            <div class="legenda">
            <textarea name="legenda" id ="legend"placeholder="Legenda" rows="4" cols="40" required></textarea>
            </div>
            <br><br>
            <div class="postar">
            <button type="submit">Postar</button>
            </div>
        </form>
    </div>
</div>
<script src="../Script/toggle.js"></script>
</body>
</html>