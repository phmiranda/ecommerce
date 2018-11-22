<?php
/* comentários */
require_once('helperCabecalho.php');

/* comentários */
require_once('configuracao.php');
require_once('modeloCategoria.php');

/* comentários */
$nome = $_POST['nome'];

/* comentários */
if(salvarCategoria($conn, $nome) && $nome != NULL){
    echo "<p class='text-success principal'> A categoria {$nome} foi cadastrada com sucesso.</p>";
}else{
    $msg = mysqli_error($conn);
    echo "<p class='text-danger principal'> A categoria {$nome} não foi cadastrada com sucesso. Favor verificar:{$msg}</p>";
}

/* comentários */
require_once('helperRodape.php');
