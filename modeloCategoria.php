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
function editar(){

}

// função de exclusão de registros.
function excluir($conn, $id){
    $query = "DELETE FROM categorias WHERE id_categoria = {$id}";
    return mysqli_query($conn,$query);
}