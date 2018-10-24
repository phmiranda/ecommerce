<?php

// função de listagem de registros.
function index($conn){
    $usuarios = array();
    $query = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conn,$query);
    while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

// função de inserção de registros.
function salvar($conn, $nome, $email, $senha, $perfil_id){
    $query = "INSERT INTO usuarios(nome, email, senha, perfil_id) VALUES('{$nome}','{$email}','{$senha}','{$perfil_id}')";
    return mysqli_query($conn, $query);
}

// função de edição de registros.
function editar(){

}

// função de exclusão de registros.
function excluir($conn, $id){
    $query = "DELETE FROM usuarios WHERE id_usuario = {$id}";
    return mysqli_query($conn, $query);
}