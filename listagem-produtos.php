<?php require_once('header.php'); ?>
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
            <a href="formulario-produto.php" class="btn btn-primary pull-right h2"> Cadastrar </a>
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
                    <th class="text-center"> Categoria </th>
                    <th class="text-center"> Preço </th>
                    <th class="text-center"> Ações </th>
                </tr>
                </thead>

                <tbody>
                <tr class="text-center">
                    <td> 001 </td>
                    <td> Chocolate </td>
                    <td> Doces </td>
                    <td> R$ 350,00 </td>
                    <td class="actions">
                        <a class="btn btn-warning btn-xs" href="#"> Editar </a>
                        <a class="btn btn-info btn-xs" href="#"> Ver </a>
                        <a class="btn btn-danger btn-xs"  href="#"> Excluir </a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>