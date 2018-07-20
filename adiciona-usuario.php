<?php
// inclui o cabeçalho da página no arquivo.
require_once('header.php');

// configuração de conexão com o banco.
require_once('config/conecta.php');

// função de inserção de dados.
function salvar($conn, $nome, $email, $senha){
    $query = "INSERT INTO usuarios(nome, email, senha) VALUES('{$nome}','{$email}','{$senha}')";
    return mysqli_query($conn, $query);
}

// captura os dados vindo do formulário.
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

// verifica se foi inserido ou não os dados capturados no formulário.
if (salvar($conn, $nome, $email, $senha)){
    echo "<p class='text-success principal'>O usuário {$nome} foi adicionada com sucesso.</p>";
}else{
    // tratamento de erro nativo do mysqli.
    $msg = mysqli_error($conn);
    echo "<p class='text-danger principal'>O usuário não foi adicionada com sucesso: {$msg}</p>";
}

// inclui o rodapé da página no arquivo.
require_once('footer.php');
