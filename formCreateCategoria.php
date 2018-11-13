<?php require_once('helperCabecalho.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form method="POST" action="formRequestCreateCategoria.php">
                    <h3 class="text-center"> Cadastrar Categoria </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input class="form-control" type="text" name="nome" required>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit"> Cadastrar </button>
                        <button class="btn btn-danger"> Cancelar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>