<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#"><b>Home / Gerenciar / Cadastrar Produtos</b></a>
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
                <strong>Formulário</strong> Produtos
            </div>
            <div class="card-body card-block">
                <form id="formProduto" action="../controller/ccProduto.php" method="post" class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome" class="form-control-label">Nome</label>
                                <input type="text" id="nome" name="nome" placeholder="Digite o nome" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="descricao" class="form-control-label">Descrição</label>
                                <textarea id="descricao" name="descricao" placeholder="Digite a descrição" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="preco" class="form-control-label">Preço</label>
                                <input type="number" id="preco" name="preco" placeholder="Digite o preço" class="form-control" step="0.01" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quantidade" class="form-control-label">Quantidade em Estoque</label>
                                <input type="number" id="quantidade" name="quantidade" placeholder="Digite a quantidade" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="acao" value="adicionar">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Cancelar
                    </button>
                    <a href="?pagina=produtos" class="btn btn-primary btn-sm">Listar produtos</a>
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
                <h5 class="modal-title" id="successModalLabel">Produto Salvo com Sucesso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                O produto foi adicionado com sucesso.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Adiciona um evento de submissão ao formulário
    document.getElementById('formProduto').addEventListener('submit', function(event) {
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
