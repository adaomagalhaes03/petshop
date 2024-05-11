<?php


if (isset($pagina)) {

    switch ($pagina) {
        case 'home':
            $pag_actual = 'home.php';
            break;
            //usuarios
        case 'usuario':
            $pag_actual = 'l_usuario.php';
            break;
        case 'f_usuario':
            $pag_actual = 'f_usuario.php';
            break;
            //produtos
        case 'produtos':
            $pag_actual = "produtos.php";
            break;
            //animais
        case 'animais':
            $pag_actual = "animais.php";
            break;
        case 'f_animais':
            $pag_actual = 'f_animais.php';
            break;
            //serviços
        case 'servicos':
            $pag_actual = 'servicos.php';
            break;
    }
}
