<?php
/* comentários */
require_once('helperCabecalho.php');

/* comentários */
require_once('configuracao.php');

/* comentários */
require_once('modeloCategoria.php');

/* comentários */
$id = $_GET['id'];
$categoria = pesquisarCategoria($conn, $id);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form method="POST" action="formRequestEditCategoria.php">
                    <h3 class="text-center"> Editar Categoria </h3>
                    <hr>
                    <input type="hidden" name="id_categoria" value="<?php echo $categoria['id_categoria']?>">
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input class="form-control" type="text" name="nome" value="<?php echo $categoria['nome']?>">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit"> Alterar </button>
                        <button class="btn btn-danger"> Cancelar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>