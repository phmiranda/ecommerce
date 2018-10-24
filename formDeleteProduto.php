<?php
// comentários
require_once('helperCabecalho.php');
require_once('configuracao.php');
require_once('modeloProduto.php');

// captura o id vindo da listagem de registros.
$id = $_GET['id'];
// verifica se foi inserido ou não os dados capturados no formulário.
excluir($conn, $id);
header("Location: formViewProduto.php?removido=true");
die();

// inclui o rodapé da página no arquivo.
require_once('helperRodape.php');