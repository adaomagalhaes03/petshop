<?php


if (isset($pagina)) {

    switch ($pagina) {
        case 'home':
            $pag_actual = 'home.php';
            break;
        case 'usuario':
            $pag_actual = 'l_usuario.php';
            break;
        case 'f_usuario':
            $pag_actual = 'f_usuario.php';
            break;
        case 'produtos':
            $pag_actual = "produtos.php";
    }
}
