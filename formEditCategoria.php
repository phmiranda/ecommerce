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
                    <h3> Cadastrar Categoria </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input class="form-control" type="text" name="nome" value="<?php echo $categoria['nome']?>">
                    </div>

                    <div class="form-group">
                        <label for="descricao"> Descricao: </label>
                        <textarea class="form-control" name="descricao" ></textarea>
                    </div>
                    <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>