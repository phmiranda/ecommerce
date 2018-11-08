<?php
// comentários.
require_once('helperCabecalho.php');
// comentários.
require_once('configuracao.php');
require_once('modeloProduto.php');

// comentários.
$id = $_POST['id_produto'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$situacao = $_POST['situacao'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

// comentários.
if(editarProduto($conn,$id,$nome,$preco,$situacao, $descricao, $categoria_id)){
    echo "<p class='text-success principal'> O produto {$nome} foi alterada com sucesso.</p>";
}else{
    $msg = mysqli_error($conn);
    echo "<p class='text-danger principal'> O produto {$nome} não foi alterada com sucesso. Favor verificar:{$msg}</p>";
}

// comentários.
require_once('helperRodape.php');
