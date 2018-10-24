<?php

// função de listagem de registros.
function index($conn){
    $produtos = array();
    $query = "SELECT * FROM produtos";
    $resultado = mysqli_query($conn, $query);
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}

// função de inserção de registros.
function salvar($conn, $nome, $preco, $descricao, $categoria_id, $situacao_id){
    $query = "INSERT INTO produtos(nome, preco, descricao, categoria_id,situacao_id) VALUES('{$nome}','{$preco}','{$descricao}','{$categoria_id}','{$situacao_id}')";
    return mysqli_query($conn, $query);
}

// função de edição de registros.
function editar(){

}

// função de exclusão de registros.
function excluir($conn, $id){
    $query = "DELETE FROM produtos WHERE id_produto = {$id}";
    return mysqli_query($conn,$query);
}

// função de pesquisa por ID
function pesquisarCategoriaPorNome($conn){
    $produtos = array();
    $query = "SELECT p.*,c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c ON c.id_categoria=p.categoria_id";
    $resultado = mysqli_query($conn, $query);
    while ($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}