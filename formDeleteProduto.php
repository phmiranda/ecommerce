<?php
// comentários
require_once('header.php');
require_once('configuracao.php');
require_once('classProduto.php');

// captura o id vindo da listagem de registros.
$id = $_GET['id'];
// verifica se foi inserido ou não os dados capturados no formulário.
excluir($conn, $id);
header("Location: formViewProduto.php?removido=true");
die();

// inclui o rodapé da página no arquivo.
require_once('footer.php');