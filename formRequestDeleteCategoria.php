<?php
/* comentários */
require_once('helperCabecalho.php');

/* comentários */
require_once('configuracao.php');

/* comentários */
require_once('modeloCategoria.php');

/* comentários */
$id = $_GET['id'];
excluirCategoria($conn, $id);
header('Location: formViewCategoria.php?removido=true');
die();