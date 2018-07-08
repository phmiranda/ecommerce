<?php require_once('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="post" action="adiciona-produto.php">
                <h3> Cadastrar Produto </h3>
                <hr>
                <div class="form-group">
                    <label for="nome"> Nome: </label>
                    <input class="form-control" type="text" name="nome">
                </div>

                <div class="form-group">
                    <label for="categoria"> Categoria: </label>
                    <select class="form-control" name="categoria_id">
                        <option value="0" selected> Selecione uma opção </option>
                        <option value="1"> Categoria 01 </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="preco"> Preço: </label>
                    <input class="form-control" type="text" name="preco">
                </div>

                <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
            </form>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>