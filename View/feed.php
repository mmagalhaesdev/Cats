<?php
 session_start();
 require '../Model/db.php';
 // Verifica se está logado
 if (!isset($_SESSION['usuario_id'])) {
 header("Location: ../View/login.php");
 exit;
 }
 // Consulta que pega posts junto com dados do usuário
 $sql = "
 SELECT p.imagem, p.legenda, p.data_post, u.email
 FROM posts p
 JOIN usuario u ON p.usuario_id = u.id
 ORDER BY p.data_post DESC
 ";
 $result = $conn->query($sql);
 // Se não houver posts, $result será uma lista vazia
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
 <style>
 body {
 font-family: Arial, sans-serif;
 background: #fafafa;
 margin: 0;
 padding: 20px;
 }
 .post {
 background: white;
 border: 1px solid #ddd;
 margin-bottom: 20px;
 padding: 15px;
 border-radius: 8px;
 max-width: 500px;
 }
 .post img {
 max-width: 100%;
 border-radius: 8px;
 }
 .autor {
 color: #555;
 font-size: 14px;
 margin-bottom: 8px;
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
 </style>
 </head>
 <body>
 <h1>Feed de Posts</h1>
 <a href="../View/novo_post.php">
 Novo Post</a>
 <hr>
 <?php if (empty($posts)): ?>
 <p>Nenhum post encontrado.</p>
 <?php else: ?>
 <?php foreach ($posts as $post): ?>
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
 <?php endforeach; ?>
 <?php endif; ?>
 </body>
 </html>