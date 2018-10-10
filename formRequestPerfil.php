<?php
// comentários
require_once('header.php');
require_once('configuracao.php');
require_once('classPerfil.php');

// captura os dados vindo do formulário.
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

// verifica se foi inserido ou não os dados capturados no formulário.
if (salvar($conn, $nome, $descricao)){
    echo "<p class='text-success principal'>A categoria {$nome} foi adicionada com sucesso.</p>";
}else{
    // tratamento de erro nativo do mysqli.
    $msg = mysqli_error($conn);
    echo "<p class='text-danger principal'>A categoria não foi adicionada com sucesso: {$msg}</p>";
}

// inclui o rodapé da página no arquivo.
require_once('footer.php');