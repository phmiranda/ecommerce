<?php


// comentários
function index($conn){
    $categorias = array();
    $resultado = mysqli_query($conn, "SELECT * FROM categorias");
    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}

// função de inserção de registros.
function salvar($conn, $nome, $situacao, $descricao){
    $query = "INSERT INTO categorias(nome, situacao, descricao) VALUES('{$nome}','{$situacao}','{$descricao}')";
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