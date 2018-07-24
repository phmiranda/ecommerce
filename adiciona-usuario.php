<?php
// comentários
require_once('header.php');
require_once('conecta.php');
require_once('class-usuario.php');

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
