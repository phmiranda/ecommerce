<?php require_once('helperCabecalho.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form method="POST" action="formRequestCreateProduto.php">
                    <h3> Formulário de Produto </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input class="form-control" type="text" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="preco"> Preço: </label>
                        <input class="form-control" type="number" name="preco" required>
                    </div>

                    <div class="form-group">
                        <label for="categoria_id"> Categoria: </label>
                        <select class="form-control" name="categoria_id" required>
                            <option value="1"> Categoria 01 </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="situacao"> Usado </label>
                        <input class=checkbox" type="checkbox" name="situacao">
                    </div>

                    <div class="form-group">
                        <label for="descricao"> Descrição: </label>
                        <textarea class="form-control" name="descricao" required></textarea>
                    </div>
                    <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>