<?php
// comentários.
require_once('helperCabecalho.php');

// comentários.
require_once('configuracao.php');

// comentários.
require_once('modeloCategoria.php');
require_once('modeloSituacao.php');

// comentários.
$categorias = indexCategoria($conn);
$situacoes = indexSituacao($conn);
?>
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
                            <?php foreach($categorias as $categoria):?>
                                <option value="<?php echo $categoria['id_categoria']?>"> <?php echo $categoria['nome']?> </option>
                            <?php endforeach ;?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="situacao"> Situação: </label>
                        <select class="form-control" name="situacao_id" required>
                            <?php foreach($situacoes as $situacao):?>
                                <option value="<?php echo $situacao['id_situacao']?>"> <?php echo $situacao['nome']?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="descricao"> Descrição: </label>
                        <textarea class="form-control" name="descricao" required></textarea>
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