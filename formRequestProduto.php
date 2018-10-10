<?php
// comentários
require_once('header.php');
require_once('configuracao.php');
require_once('classProduto.php');

// captura os dados vindo do formulário.
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
$situacao_id = $_POST['situacao_id'];


// verifica se foi inserido ou não os dados capturados no formulário.
if (salvar($conn, $nome, $preco, $descricao, $categoria_id, $situacao_id)){
    echo "<p class='text-success principal'>O produto {$nome} foi adicionada com sucesso.</p>";
}else{
    // tratamento de erro nativo do mysqli.
    $msg = mysqli_error($conn);
    echo "<p class='text-danger principal'>O produto não foi adicionada com sucesso: {$msg}</p>";
}

// inclui o rodapé da página no arquivo.
require_once('footer.php');
