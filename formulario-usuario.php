<?php require_once('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="post" action="adiciona-usuario.php">
                    <h3> Cadastrar Usuário </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome"> Nome Completo: </label>
                        <input class="form-control" type="text" name="nome">
                    </div>

                    <div class="form-group">
                        <label for="cpf"> CPF: </label>
                        <input class="form-control" type="text" name="preco">
                    </div>

                    <div class="form-group">
                        <label for="data_nascimento"> Data de Nascimento: </label>
                        <input class="form-control" type="date" name="data_nascimento">
                    </div>

                    <div class="form-group">
                        <label for="sexo"> Sexo: </label>
                        <select class="form-control" name="sexo">
                            <option value="0" selected> Selecione uma opção </option>
                            <option value="1"> Masculino </option>
                            <option value="2"> Feminino </option>
                            <option value="3"> Outros </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="perfil"> Perfil de Acesso: </label>
                        <select class="form-control" name="perfil_id">
                            <option value="1"> Administrador </option>
                            <option value="2"> Fornecedor </option>
                            <option value="3"> Usuário </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email"> E-Mail: </label>
                        <input class="form-control" type="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="senha"> Senha: </label>
                        <input class="form-control" type="password" name="senha">
                    </div>
                    <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('footer.php'); ?>