<?php
/* comentários */
require_once('helperCabecalho.php');

/* comentários */
require_once('configuracao.php');

/* comentários */
require_once('modeloProduto.php');

/* comentários */
$id = $_GET['id'];
excluirProduto($conn, $id);
header('Location: formViewProduto.php?removido=true');
die();