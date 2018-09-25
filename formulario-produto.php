<?php
require_once('header.php');
require_once('conecta.php');
require_once('banco-categoria.php');

$categorias = pesquisarCategoriaPorNome($conn);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="post" action="adiciona-produto.php">
                <h3> Cadastrar Produto </h3>
                <hr>
                <div class="form-group">
                    <label for="nome"> Nome: </label>
                    <input class="form-control" type="text" name="nome">
                </div>

                <div class="form-group">
                    <label for="preco"> Preço: </label>
                    <input class="form-control" type="number" name="preco">
                </div>

                <div class="form-group">
                    <label for="categoria"> Categoria: </label>
                    <select class="form-control" name="categoria_id">
                        <?php foreach ($categorias as $categoria):?>
                            <option value="<?php echo $categoria->id_categoria?>"> <?php echo $categoria->nome ?> </option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="descricao"> Descrição: </label>
                    <textarea class="form-control" name="descricao"></textarea>
                </div>

                <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
            </form>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>