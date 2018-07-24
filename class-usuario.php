<?php

// função de inserção de dados.
function salvar($conn, $nome, $email, $senha){
    $query = "INSERT INTO usuarios(nome, email, senha) VALUES('{$nome}','{$email}','{$senha}')";
    return mysqli_query($conn, $query);
}