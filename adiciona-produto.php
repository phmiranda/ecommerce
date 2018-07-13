<?php
// inclui o cabeçalho da página no arquivo.
require_once('header.php');

// função de inserção de dados.
function salvar($conn, $nome, $preco, $descricao, $categoria_id){
    $query = "INSERT INTO produtos(nome, preco, descricao, categoria_id) VALUES('{$nome}','{$preco}','{$descricao}','{$categoria_id}')";
    return mysqli_query($conn, $query);
}

// captura os dados vindo do formulário.
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

// script de conexão com o banco de dados e inserção dos dados capturados no formulário.
$conn = mysqli_connect('localhost','root','root', 'db_ecommerce');

// verifica se foi inserido ou não os dados capturados no formulário.
if (salvar($conn, $nome, $preco, $descricao, $categoria_id)){
    echo "<p class='text-success principal'>O produto {$nome} foi adicionada com sucesso.</p>";
}else{
    // tratamento de erro nativo do mysqli.
    $msg = mysqli_error($conn);
    echo "<p class='text-danger principal'>O produto não foi adicionada com sucesso: {$msg}</p>";
}

// inclui o rodapé da página no arquivo.
require_once('footer.php');
