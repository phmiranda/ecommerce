<?php
// arquivo necessário para renderização do menu superior.
require_once('header.php');

// arquivo com a configuração do banco de dados.
require_once('conecta.php');

// arquivo com as funções de persistências na base de dados.
require_once('banco-usuario.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2> Usuários </h2>
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
            <a href="formulario-usuario.php" class="btn btn-primary pull-right h2"> Cadastrar </a>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <?php
                // verifica a remoção do registro na listagem.
                if(array_key_exists("removido", $_GET) && $_GET['removido']=='true'){
                    echo "<p class='alert-success text-center'> O usuário foi excluída com sucesso </p>";
                }
                ?>
                <thead>
                    <tr>
                        <th class="text-center"> # </th>
                        <th class="text-center"> Nome </th>
                        <th class="text-center"> E-Mail </th>
                        <th class="text-center"> Ações </th>
                    </tr>
                </thead>

                <tbody>
                <?php
                // chama a função para exibir os registros.
                $usuarios = index($conn);
                // cria um array com a lista de registros.
                foreach($usuarios as $usuario): ?>
                    <tr class="text-center">
                        <td> <?php echo $usuario['id_usuario'];?> </td>
                        <td> <?php echo $usuario['nome'];?> </td>
                        <td> <?php echo $usuario['email'];?> </td>
                        <td>
                            <a class="btn btn-info btn-xs" href="#"><span class="glyphicon glyphicon-list-alt"></a>
                            <a class="btn btn-warning btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span></a>
                            <a class="btn btn-danger btn-xs"  href="remove-usuario.php?id=<?php echo $usuario['id_usuario'];?>"><span class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>
