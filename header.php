<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Alura </title>
    <link rel="icon" href="public/favicon.png">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/assets.css">
</head>
<body>
    <!-- menu superior de navegação -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#responsive-menu" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- comentário -->
                <a class="navbar-brand" href="index.php"> Controle de Estoque </a>
            </div>

            <!-- comentário -->
            <div id="responsive-menu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- comentários -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> Administração <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="formViewProduto.php"> Produtos </a></li>
                        </ul>
                    </li>

                    <!-- comentários -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> Configuração <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="formViewCategoria.php"> Categorias </a></li>
                            <li><a href="formViewSituacao.php"> Situação </a></li>
                        </ul>
                    </li>

                    <!-- comentários -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> Segurança <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="formViewPerfil.php"> Perfis </a></li>
                            <li><a href="formViewUsuario.php"> Usuários </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>