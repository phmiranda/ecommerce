<?php
// arquivo necessário para renderização do menu superior.
require_once('header.php');

// arquivo com a configuração do banco de dados.
require_once('configuracao.php');

// arquivo com as funções de persistências na base de dados.
require_once('classPerfil.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2> Perfis de Acesso </h2>
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
                <a href="formCreatePerfil.php" class="btn btn-primary pull-right h2"> Cadastrar </a>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="table-responsive col-md-12">
                <?php
                // verifica a remoção do registro na listagem.
                if(array_key_exists("removido", $_GET) && $_GET['removido']=='true'){
                    echo "<p class='alert-success text-center'> O perfil foi excluída com sucesso </p>";
                }
                ?>
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th class="text-center"> # </th>
                        <th class="text-center"> Nome </th>
                        <th class="text-center"> Ações </th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    // chama a função para exibir os registros.
                    $perfis = index($conn);
                    // cria um array com a lista de registros.
                    foreach($perfis as $perfil): ?>
                        <tr class="text-center">
                            <td> <?php echo $perfil['id_perfil'];?> </td>
                            <td> <?php echo $perfil['nome'];?> </td>
                            <td>
                                <a class="btn btn-info btn-xs" href="#"><span class="glyphicon glyphicon-list-alt"></a>
                                <a class="btn btn-warning btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span></a>
                                <a class="btn btn-danger btn-xs"  href="formDeletePerfil.php?id=<?php echo $perfil['id_perfil'];?>"><span class="glyphicon glyphicon-trash"></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once('footer.php');?>