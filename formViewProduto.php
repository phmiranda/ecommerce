<?php
// comentários.
require_once('helperCabecalho.php');

// comentários.
require_once('configuracao.php');

// comentários.
require_once('modeloProduto.php');

// comentários.
if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
    echo "<p class='text-center text-info'> O Produto foi removido com sucesso. </p>";
}

// comentários.
$produtos = pesquisarNomeCategoria($conn);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2> Produtos </h2>
            </div>

            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Digite">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
                </div>
            </div>

            <div class="col-md-3">
                <a href="formCreateProduto.php" class="btn btn-primary pull-right h2"> Cadastrar </a>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th class="text-center"> # </th>
                            <th class="text-center"> Nome </th>
                            <th class="text-center"> Preço </th>
                            <th class="text-center"> Categoria </th>
                            <th class="text-center"> Situação </th>
                            <th class="text-center"> Ações </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($produtos as $produto):?>
                        <tr class="text-center">
                            <td><?php echo $produto['id_produto']?></td>
                            <td><?php echo $produto['nome']?></td>
                            <td><?php echo $produto['preco']?></td>
                            <td><?php echo $produto['categoria_nome']?></td>
                            <td><?php echo $produto['situacao']?></td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="formEditProduto.php?id=<?php echo $produto['id_produto']?>"><span class="glyphicon glyphicon-edit"></span></a>
                                <a class="btn btn-danger btn-xs"  href="formRequestDeleteProduto.php?id=<?php echo $produto['id_produto']?>"><span class="glyphicon glyphicon-trash"></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>