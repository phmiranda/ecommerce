<?php

// variáveis de conexão com a base de dados
$server = 'localhost';
$database = 'db_ecommerce';
$username = 'admin';
$password = 'admin';

// script de conexão com o banco de dados.
$conn = mysqli_connect($server,$username,$password, $database);
return $conn;