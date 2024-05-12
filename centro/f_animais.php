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
                                <input type="text" id="nome" name="nome" placeholder="Digite o nome animal" class="form-control">
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Especie</label>
                                <input type="text" id="nome" name="nome" placeholder="Digite a especie" class="form-control">
                            </div>
                            
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Raça</label>
                                <input type="text" id="nome" name="nome" placeholder="" class="form-control">
                            </div>
                        </div>

                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Idade</label>
                                <input type="number" id="nome" name="nome" placeholder="" class="form-control">
                            </div>

                            
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Dono</label>
                                <input type="text" id="nome" name="nome" placeholder="" class="form-control">
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
                    <a href="?pagina=animais" class="btn btn-primary btn-sm">Listar Animais</a>

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