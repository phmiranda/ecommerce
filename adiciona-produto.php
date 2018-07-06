<?php
// comentário
require_once('header.php');

// comentário
$nome = $_POST['nome'];
$preco = $_POST['preco'];

echo "<p class='text-success principal'>O produto {$nome} com o valor de R$ {$preco} foi adicionado a nossa base de dados com sucesso.</p>";

// comentário
require_once('footer.php');
