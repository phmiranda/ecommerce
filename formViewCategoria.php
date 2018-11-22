<?php
/* comentários */
require_once('helperCabecalho.php');

/* comentários */
require_once('configuracao.php');

/* comentários */
require_once('modeloCategoria.php');

/* comentários */
if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
    echo "<p class='text-center text-info'> A categoria foi removido com sucesso. </p>";
}

/* comentários */
$categorias = indexCategoria($conn);
?>
     <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2> Categorias </h2>
            </div>

            <div class="col-md-6">
                <div class="input-group h2">
                    <input id="pesquisarRegistro" class="form-control" type="text" name="data[search]" placeholder="Digite um registro para buscar na tabela abaixo!">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
                </div>
            </div>

            <div class="col-md-3">
                <a href="formCreateCategoria.php" class="btn btn-primary pull-right h2"> Cadastrar </a>
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
                            <th class="text-center"> Ações </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($categorias as $categoria): ?>
                        <tr class="text-center">
                            <td><?php echo $categoria['id_categoria']?></td>
                            <td><?php echo $categoria['nome']?></td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="formEditCategoria.php?id=<?php echo $categoria['id_categoria']?>"><span class="glyphicon glyphicon-edit"></span></a>
                                <a class="btn btn-danger btn-xs"  href="formRequestDeleteCategoria.php?id=<?php echo $categoria['id_categoria']?>"><span class="glyphicon glyphicon-trash"></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>