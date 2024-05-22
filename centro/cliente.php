<?php

include_once ('../controller/ccCliente.php');

$listaClientes = getClientes();

?>

<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#"><b>Home / Gerenciar / Listar Clientes</b></a>
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
                <strong>Lista de</strong> Clientes
            </div>
            <div class="card-body card-block">

                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach($listaClientes as $cliente){ ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $cliente['Nome']; ?></td>
                                <td><?php echo $cliente['Email']; ?></td>
                                <td><?php echo $cliente['Telefone']; ?></td>
                                <td><?php echo $cliente['Endereco']; ?></td>
                                <td>
                                    <a href="#"><i class="fa fa-edit"></i></a> |
                                    <a href="#" style="color: red;" data-toggle="modal" data-target="#confirmDelete<?php echo $cliente['ClienteID']; ?>"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="?pagina=f_clientes" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Adicionar
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modal de Confirmação de Exclusão -->
<?php foreach($listaClientes as $cliente){ ?>
<div class="modal fade" id="confirmDelete<?php echo $cliente['ClienteID']; ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteLabel">Eliminar o cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja apagar "<?php echo $cliente['Nome']; ?>"?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="../controller/cliente_controller.php?Acao=Eliminar&ClienteID=<?php echo $cliente['ClienteID']; ?>" class="btn btn-danger">Apagar</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
