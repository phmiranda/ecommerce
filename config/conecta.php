<?php
// variáveis de conexão com a base de dados
//$hostname = 'localhost';
//$database = 'db_ecommerce';
//$username = 'root';
//$password = 'root';

// script de conexão com o banco de dados.
$conn = mysqli_connect('localhost','root','root', 'db_ecommerce');

//$enviroment = 'desenvolvimento';

// verifica qual ambiente deverá ser conectado.
//if ($enviroment = 'producao'){
//    return $conn = mysqli_connect('{$hostname}','{$username}','{$password}', '{$database}');
//} elseif ($enviroment = 'homologacao'){
//    return $conn = mysqli_connect('{$hostname}','{$username}','{$password}', '{$database}');
//} elseif ($enviroment = 'desenvolvimento'){
//    return $conn = mysqli_connect('{$hostname}','{$username}','{$password}', '{$database}');
//} else{
//    $msg = "Não foi possível encontrar nenhuma base de dados com os parâmetros informados.";
//    echo $msg;
//}