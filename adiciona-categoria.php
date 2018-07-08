<?php
// comentário
require_once('header.php');

// comentário
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

echo "<p class='text-success principal'>A Categoria {$nome} foi adicionada com sucesso.</p>";

// comentário
require_once('footer.php');
