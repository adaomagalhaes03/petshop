<?php

include_once ('../controller/ccProduto.php');

$listaProdutos = getProdutos();

?>

<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#"><b>Home / Gerenciar / Listar Produtos</b></a>
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
                <strong>Lista de</strong> Produtos
            </div>
            <div class="card-body card-block">

                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Quantidade em Estoque</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach($listaProdutos as $produto){ ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $produto['Nome']; ?></td>
                                <td><?php echo $produto['Descricao']; ?></td>
                                <td><?php echo $produto['Preco']; ?></td>
                                <td><?php echo $produto['QuantidadeEmEstoque']; ?></td>
                                <td>
                                    <a href="#"><i class="fa fa-edit"></i></a> |
                                    <a href="#" style="color: red;" data-toggle="modal" data-target="#confirmDelete<?php echo $produto['ProdutoID']; ?>"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="?pagina=f_produtos" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Adicionar
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modal de Confirmação de Exclusão -->
<?php foreach($listaProdutos as $produto){ ?>
<div class="modal fade" id="confirmDelete<?php echo $produto['ProdutoID']; ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteLabel">Eliminar o produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja apagar "<?php echo $produto['Nome']; ?>"?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="../controller/ccProduto.php?acao=eliminar&ProdutoID=<?php echo $produto['ProdutoID']; ?>" class="btn btn-danger">Apagar</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
