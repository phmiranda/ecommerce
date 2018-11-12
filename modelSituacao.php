<?php

// comentários
function indexSituacao($conn){
    $situacoes = array();
    $query = "SELECT * FROM situacao";
    $resultado = mysqli_query($conn, $query);
    while($situacao = mysqli_fetch_assoc($resultado)){
        array_push($situacoes, $situacao);
    }
    return $situacoes;
}