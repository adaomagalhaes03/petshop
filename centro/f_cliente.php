<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#"><b>Home / Gerenciar / Cadastrar Clientes</b></a>
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
                <strong>Formulário</strong> Clientes
            </div>
            <div class="card-body card-block">
                <form id="formCliente" action="../controller/ccCliente.php" method="post" class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nome" class="form-control-label">Nome</label>
                                <input type="text" id="Nome" name="Nome" placeholder="Digite o nome" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Email" class="form-control-label">Email</label>
                                <input type="email" id="Email" name="Email" placeholder="Digite o email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Telefone" class="form-control-label">Telefone</label>
                                <input type="text" id="Telefone" name="Telefone" placeholder="Digite o telefone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Endereco" class="form-control-label">Endereço</label>
                                <textarea id="Endereco" name="Endereco" placeholder="Digite o endereço" class="form-control" required></textarea>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="Acao" value="Adicionar">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Cancelar
                    </button>
                    <a href="?pagina=clientes" class="btn btn-primary btn-sm">Listar clientes</a>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Pop-up de sucesso -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Cliente Salvo com Sucesso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                O cliente foi adicionado com sucesso.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Adiciona um evento de submissão ao formulário
    document.getElementById('formCliente').addEventListener('submit', function(event) {
        var form = this;
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            // Se o formulário for válido, mostra o pop-up de sucesso
            $('#successModal').modal('show');
        }
        form.classList.add('was-validated');
    });
</script>
