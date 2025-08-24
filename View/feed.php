<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
require '../Model/db.php';

// Verifica se está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../View/login.php");
    exit;
}

// Consulta posts com dados do usuário
$sql = "
    SELECT p.imagem, p.legenda, p.data_post, u.email
    FROM posts p
    JOIN usuario u ON p.usuario_id = u.id
    ORDER BY p.data_post DESC
";
$result = $conn->query($sql);
$posts = [];

if ($result && $result->num_rows > 0) {
    $posts = $result->fetch_all(MYSQLI_ASSOC);
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Feed</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .a{
            padding-left: 70px;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }
      

        h1, a {
            padding: 20px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        .post {
            background: white;
            border: 1px solid #ddd;
            margin-top: 10px;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
        }

        .post img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 10px;
        }

        .autor {
            color: #555;
            font-size: 14px;
        }

        .data {
            color: #888;
            font-size: 12px;
            margin-top: 5px;
        }

        .legenda {
            margin-top: 10px;
            font-size: 15px;
        }

        .c {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
            margin-top: 30px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-grande {
            grid-column: span 2;
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

    <br>
    <div class="a">
        <h1>Feed de Posts</h1>
        <a href="../View/novo_post.php">Novo Post</a>
        
        <?php if (empty($posts)): ?>
            <p>Nenhum post encontrado.</p>
        <?php else: ?>
            <div class="c">
                <?php foreach ($posts as $index => $post): ?>
                    <div class="card <?= ($index === 0 || $index === 3) ? 'card-grande' : '' ?>">
                        <div class="post">
                            <div class="autor">
                                Publicado por: <?= htmlspecialchars($post['email'], ENT_QUOTES, 'UTF-8') ?>
                            </div>
                            <img src="<?= htmlspecialchars($post['imagem'], ENT_QUOTES, 'UTF-8') ?>" alt="Imagem do post">
                            <div class="legenda">
                                <?= nl2br(htmlspecialchars($post['legenda'], ENT_QUOTES, 'UTF-8')) ?>
                            </div>
                            <div class="data">
                                <?= date('d/m/Y H:i', strtotime($post['data_post'])) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

<script src="../Script/toggle.js"></script>
</body>
</html>
