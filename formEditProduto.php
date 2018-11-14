<?php
// comentários.
require_once('helperCabecalho.php');

// comentários.
require_once('configuracao.php');

// comentários.
require_once('modeloCategoria.php');
require_once('modeloProduto.php');
require_once('modeloSituacao.php');

// comentários.
$id = $_GET['id'];
$produto = pesquisarProduto($conn, $id);

// comentários.
$categorias = indexCategoria($conn);
$situacoes = indexSituacao($conn);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form method="POST" action="formRequestEditProduto.php">
                    <h3> Editar Produto </h3>
                    <hr>
                    <input type="hidden" name="id_produto" value="<?php echo $produto['id_produto']?>">
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input class="form-control" type="text" name="nome" value="<?php echo $produto['nome']?>" >
                    </div>

                    <div class="form-group">
                        <label for="preco"> Preço: </label>
                        <input class="form-control" type="number" name="preco" value="<?php echo $produto['preco']?>">
                    </div>

                    <div class="form-group">
                        <label for="categoria_id"> Categoria: </label>
                        <select class="form-control" name="categoria_id">
                            <?php foreach($categorias as $categoria):?>
                                <option value="<?php echo $categoria['categoria_id']?>" > <?php echo $categoria['nome']?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="situacao"> Usado </label>
                        <select class="form-control" name="situacao_id">
                            <?php foreach($situacoes as $situacao) :?>
                                <option value="<?php echo $situacao['id_situacao']?>"> <?php echo $situacao['nome']?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="descricao"> Descrição: </label>
                        <textarea class="form-control" name="descricao"><?php echo $produto['descricao']?></textarea>
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