<?php

/* comentários */
$server = 'localhost';
$database = 'db_ecommerce';
$username = 'username';
$password = 'password';

/* comentários */
$conn = mysqli_connect($server,$username,$password, $database);
return $conn;