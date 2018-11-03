<?php

// função de listagem de registros.
function index($conn){
    $categorias = array();
    $query = "SELECT * FROM categorias";
    $resultado = mysqli_query($conn, $query);
    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}

// função de inserção de registros.
function salvar($conn, $nome, $descricao){
    $query = "INSERT INTO categorias(nome, descricao) VALUES('{$nome}','{$descricao}')";
    return mysqli_query($conn, $query);
}

// função de edição de registros.
function editar($conn, $id){
    $query = "UPDATE categorias SET";
}

// função de exclusão de registros.
function excluir($conn, $id){
    $query = "DELETE FROM categorias WHERE id_categoria = {$id}";
    return mysqli_query($conn,$query);
}

// função de listagem de um registro específico.
function pesquisar($conn, $id){
    $query = "SELECT * FROM categorias WHERE id_categoria={$id}";
    $resultado = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($resultado);
}

// função de pesquisa por ID
function pesquisarCategoriaPorNome($conn)
{
    $categorias = array();
    $query = "SELECT p.*,c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c ON c.id_categoria=p.categoria_id";
    $resultado = mysqli_query($conn, $query);
    while ($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
    }
    return $categorias;
}