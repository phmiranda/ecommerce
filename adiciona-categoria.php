<?php
// inclui o cabeçalho da página no arquivo.
require_once('header.php');

// função de inserção de dados.
function salvar($conn, $nome, $situacao, $descricao){
    $query = "INSERT INTO categorias(nome, situacao, descricao) VALUES('{$nome}','{$situacao}','{$descricao}')";
    return mysqli_query($conn, $query);
}

// captura os dados vindo do formulário.
$nome = $_POST['nome'];
$situacao = $_POST['situacao'];
$descricao = $_POST['descricao'];

// script de conexão com o banco de dados e inserção dos dados capturados no formulário.
$conn = mysqli_connect('localhost','root','root', 'db_ecommerce');

// verifica se foi inserido ou não os dados capturados no formulário.
if (salvar($conn, $nome, $situacao, $descricao)){
    echo "<p class='text-success principal'>A categoria {$nome} foi adicionada com sucesso.</p>";
}else{
    // tratamento de erro nativo do mysqli.
    $msg = mysqli_error($conn);
    echo "<p class='text-danger principal'>A categoria não foi adicionada com sucesso: {$msg}</p>";
}

// inclui o rodapé da página no arquivo.
require_once('footer.php');
