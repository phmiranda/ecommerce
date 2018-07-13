<?php require_once('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form method="post" action="adiciona-usuario.php">
                    <h3> Cadastrar Usuário </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome Completo: </label>
                        <input class="form-control" type="text" name="nome">
                    </div>

                    <div class="form-group">
                        <label for="email"> E-Mail: </label>
                        <input class="form-control" type="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="senha"> Senha: </label>
                        <input class="form-control" type="password" name="senha">
                    </div>
                    <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('footer.php'); ?>