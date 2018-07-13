<?php require_once('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form method="post" action="adiciona-categoria.php">
                    <h3> Cadastrar Categoria </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input class="form-control" type="text" name="nome">
                    </div>

                    <div class="form-group">
                        <label for="situacao"> Situação: </label>
                        <select class="form-control" name="situacao">
                            <option selected> Selecione uma opção </option>
                            <option value="1"> Ativado </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="descricao"> Descricao: </label>
                        <textarea class="form-control" name="descricao"></textarea>
                    </div>
                    <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('footer.php'); ?>