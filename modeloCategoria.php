<?php

/* comentários */
function indexCategoria($conn){
    $categorias = array();
    $query = "SELECT * FROM categorias";
    $resultado = mysqli_query($conn, $query);
    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}

/* comentários */
function salvarCategoria($conn, $nome){
    $query = "INSERT INTO categorias(nome) VALUES('{$nome}')";
    return mysqli_query($conn, $query);
}

/* comentários */
function editarCategoria($conn, $id, $nome){
    $query = "UPDATE categorias SET nome = '{$nome}' WHERE id_categoria = {$id}";
    return mysqli_query($conn, $query);
}

/* comentários */
function excluirCategoria($conn, $id){
    $query = "DELETE FROM categorias WHERE id_categoria = {$id}";
    return mysqli_query($conn,$query);
}

/* comentários */
function pesquisarCategoria($conn, $id){
    $query = "SELECT * FROM categorias WHERE id_categoria={$id}";
    $resultado = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($resultado);
}