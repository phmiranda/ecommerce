<?php
// comentário
require_once('header.php');

// comentário
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

// comentários
$conn = mysqli_connect('localhost','root','root', 'db_ecommerce');
$query = "INSERT INTO produtos(nome, preco, descricao, categoria_id) VALUES({$nome},{$preco},{$descricao},{$categoria_id})";

echo "<p class='alert-success principal'>O produto {$nome} foi adicionado a nossa base de dados com sucesso.</p>";

// comentário
require_once('footer.php');
