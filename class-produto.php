<?php

// função de inserção de dados.
function salvar($conn, $nome, $preco, $descricao, $categoria_id){
    $query = "INSERT INTO produtos(nome, preco, descricao, categoria_id) VALUES('{$nome}','{$preco}','{$descricao}','{$categoria_id}')";
    return mysqli_query($conn, $query);
}