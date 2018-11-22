<?php

/* comentários */
function indexUsuario($conn){
    $usuarios = array();
    $query = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conn,$query);
    while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

/* comentários */
function salvarUsuario($conn, $nome, $email, $senha){
    $query = "INSERT INTO usuarios(nome, email, senha) VALUES('{$nome}','{$email}','{$senha}')";
    return mysqli_query($conn, $query);
}

/* comentários */
function editarUsuario(){

}

/* comentários */
function excluirUsuario($conn, $id){
    $query = "DELETE FROM usuarios WHERE id_usuario = {$id}";
    return mysqli_query($conn, $query);
}

/* comentários */
function pesquisarUsuario($conn, $id){
    $query = "SELECT * FROM usuarios WHERE id_usuario = {$id}";
    return mysqli_query($conn, $query);
}