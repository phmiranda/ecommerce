<?php

// função de listagem de registros.
function index($conn){
    $situacoes = array();
    $query = "SELECT * FROM situacao";
    $resultado = mysqli_query($conn, $query);
    while ($situacao = mysqli_fetch_assoc($resultado)){
        array_push($situacoes, $situacao);
    }
    return $situacoes;
}

// função de inserção de registros.
function salvar($conn, $nome, $descricao){
    $query = "INSERT INTO situacao(nome, descricao) VALUES('{$nome}','{$descricao}')";
    return mysqli_query($conn, $query);
}

// função de edição de registros.
function editar(){

}

// função de exclusão de registros.
function excluir($conn, $id){
    $query = "DELETE FROM situacao WHERE id_situacao = {$id}";
    return mysqli_query($conn,$query);
}