<?php require_once('helperCabecalho.php'); ?>
     <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2> Categorias </h2>
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
                        <tr class="text-center">
                            <td> # </td>
                            <td> # </td>
                            <td> # </td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span></a>
                                <a class="btn btn-danger btn-xs"  href="#"><span class="glyphicon glyphicon-trash"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once('helperRodape.php'); ?>