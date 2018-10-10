<?php

// função de listagem de registros.
function index($conn){
    $perfis = array();
    $query = "SELECT * FROM perfis";
    $resultado = mysqli_query($conn, $query);
    while ($perfil = mysqli_fetch_assoc($resultado)){
        array_push($perfis, $perfil);
    }
    return $perfis;
}

// função de inserção de registros.
function salvar($conn, $nome, $descricao){
    $query = "INSERT INTO perfis(nome, descricao) VALUES('{$nome}','{$descricao}')";
    return mysqli_query($conn, $query);
}

// função de edição de registros.
function editar(){

}

// função de exclusão de registros.
function excluir($conn, $id){
    $query = "DELETE FROM perfis WHERE id_situacao = {$id}";
    return mysqli_query($conn,$query);
}