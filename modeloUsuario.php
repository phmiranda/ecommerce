<?php

// função de listagem de registros.
function indexUsuario($conn){
    $usuarios = array();
    $query = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conn,$query);
    while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

// função de inserção de registros.
function salvarUsuario($conn, $nome, $email, $senha){
    $query = "INSERT INTO usuarios(nome, email, senha) VALUES('{$nome}','{$email}','{$senha}')";
    return mysqli_query($conn, $query);
}

// função de edição de registros.
function editarUsuario(){

}

// função de exclusão de registros.
function excluirUsuario($conn, $id){
    $query = "DELETE FROM usuarios WHERE id_usuario = {$id}";
    return mysqli_query($conn, $query);
}

// função de listagem de um registro específico.
function pesquisarUsuario(){

}