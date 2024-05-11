<?php

include_once ('../controller/ccUsuario.php');

$lista = getUsuarios();

?>

<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#"><b>Home / Gerenciar / Listar Usuários</b></a>
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
                <strong>Lista de</strong> Usuários
            </div>
            <div class="card-body card-block">

                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Estado</th>
                                <th>Permissão</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach($lista as $linha){ ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $linha['nome_completo']; ?></td>
                                <td><?php echo $linha['nome_user']; ?></td>
                                <td><?php echo $linha['estado']; ?></td>
                                <td><?php echo $linha['permissao']; ?></td>
                                <td>
                                    <a href=""><i class="fa fa-edit"></i></a> |
                                    <a href="" style="color: red;;"><i class="fa fa-trash"></i></a>
                            </td>
                            </tr>

<?php $i++; } ?>

                        </tbody>
                    </table>
                </div>



            </div>
            <div class="card-footer">
                <a href="?pagina=f_usuario" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Adicionar
                            </a>
            </div>
        </div>
    </div>
</section>