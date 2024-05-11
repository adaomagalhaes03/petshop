<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#"><b>Home / Gerenciar / Cadastrar Animais</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FORMULÁRIO -->
<section>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>Formulário</strong> Animais
            </div>
            <div class="card-body card-block">
                <form action="../controller/ccUsuario.php" method="post" class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Nome</label>
                                <input type="text" id="nome" name="nome" placeholder="Digite o nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Email</label>
                                <input type="email" id="email" name="email" placeholder="Digite o email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Estado</label>
                                <div class="form-check-inline form-check">
                                    <label for="estado1" class="form-check-label ">
                                        <input type="radio" id="estado1" name="estado" value="Activo" class="form-check-input">Activo
                                    </label>
                                    <label for="estado2" class="form-check-label ">
                                        <input type="radio" id="estado2" name="estado" value="Inactivo" class="form-check-input">Inactivo
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Usuário</label>
                                <input type="text" id="user" name="user" placeholder="Digite o nome de usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">Senha</label>
                                <input type="password" id="senha" name="senha" placeholder="Digite a senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">Permissão</label>
                                <select name="permissao" id="permissao" class="form-control-sm form-control">
                                    <option value="0">Seleccione...</option>
                                    <option value="1">Operador</option>
                                    <option value="2">Administrador</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="acao" value="adicionar" >
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Cancelar
                    </button>
                    <a href="?pagina=animais" class="btn btn-primary btn-sm">Listar animais</a>

                </form>
            </div>
            <div class="card-footer">
                <!-- <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Salvar
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Cancelar
                </button> -->
            </div>
        </div>
    </div>
</section>