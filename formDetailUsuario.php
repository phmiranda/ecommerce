<?php require_once('helperCabecalho.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form method="post" action="formRequestUsuario.php">
                    <h3> Visualizar Usuário </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome Completo: </label>
                        <input class="form-control" type="text" name="nome">
                    </div>

                    <div class="form-group">
                        <label for="email"> E-Mail: </label>
                        <input class="form-control" type="email" name="email">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>