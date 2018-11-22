<?php

/* comentários */
function indexProduto($conn){
    $produtos = array();
    $query = "SELECT * FROM produtos";
    $resultado = mysqli_query($conn, $query);
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}

/* comentários */
function salvarProduto($conn, $nome, $preco, $descricao, $categoria_id, $situacao_id){
    $query = "INSERT INTO produtos(nome, preco, descricao, categoria_id, situacao_id) VALUES('$nome', {$preco}, '{$descricao}', {$categoria_id}, {$situacao_id})";
    return mysqli_query($conn, $query);
}

/* comentários */
function editarProduto($conn, $id, $nome, $preco, $descricao, $categoria_id, $situacao_id){
    $query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, situacao_id = {$situacao_id} WHERE id_produto = '{$id}' ";
    return mysqli_query($conn, $query);
}

/* comentários */
function excluirProduto($conn, $id){
    $query = "DELETE FROM produtos WHERE id_produto = {$id}";
    return mysqli_query($conn,$query);
}

/* comentários */
function pesquisarProduto($conn, $id){
    $query = "SELECT * FROM produtos WHERE id_produto = {$id}";
    $resultado = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($resultado);
}

/* comentários */
function pesquisarNomeCategoria($conn){
    $produtos = array();
    $query = "SELECT p.*,c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c ON c.id_categoria=p.categoria_id ORDER BY id_produto";
    $resultado = mysqli_query($conn, $query);
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}