<?php

// função de listagem de registros.
function indexProduto($conn){
    $produtos = array();
    $query = "SELECT * FROM produtos";
    $resultado = mysqli_query($conn, $query);
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}

// função de inserção de registros.
function salvarProduto($conn, $nome, $preco, $situacao, $descricao, $categoria_id){
    $query = "INSERT INTO produtos(nome, preco, situacao, descricao, categoria_id) VALUES('$nome', {$preco}, {$situacao},'{$descricao}', {$categoria_id})";
    return mysqli_query($conn, $query);
}

// função de edição de registros.
function editarProduto($conn, $id, $nome, $preco, $situacao, $descricao, $categoria_id){
    $query = "UPDATE produtos SET nome = '{$nome}',preco = {$preco}, situacao = {$situacao},descricao = '{$descricao}', categoria_id = {$categoria_id} WHERE id_produto = {$id}";
    return mysqli_query($conn, $query);
}

// função de exclusão de registros.
function excluirProduto($conn, $id){
    $query = "DELETE FROM produtos WHERE id_produto = {$id}";
    return mysqli_query($conn,$query);
}

// função de listagem de um registro específico.
function pesquisarProduto($conn, $id){
    $query = "SELECT * FROM produtos WHERE id_produto = {$id}";
    $resultado = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($resultado);
}

// função de pesquisa do produto vinculado a categoria e impressão do nome em vez do identificador.
function pesquisarNomeCategoria($conn){
    $produtos = array();
    $query = "SELECT p.*,c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c ON c.id_categoria=p.categoria_id ORDER BY id_produto";
    $resultado = mysqli_query($conn, $query);
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}