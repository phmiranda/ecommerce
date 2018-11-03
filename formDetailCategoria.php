<?php
// arquivo necessário para renderização do menu superior.
require_once('helperCabecalho.php');

// arquivo com a configuração do banco de dados.
require_once('configuracao.php');

// arquivo com as funções de persistências na base de dados.
require_once('modeloCategoria.php');

// comentários.
$id = $_GET['id'];
$categoria = pesquisar($conn,$id);

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form method="post" action="formRequestCategoria.php">
                    <h3> Visualizar Categoria </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <p><?php echo $categoria['nome']?></p>
                    </div>

                    <div class="form-group">
                        <label for="descricao"> Descricao: </label>
                        <p><p><?php echo $categoria['descricao']?></p></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>