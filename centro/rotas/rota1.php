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
        case 'f_produtos':
            $pag_actual = "f_produtos.php";
            break;
            //animais
        case 'animais':
            $pag_actual = "animais.php";
            break;
        case 'f_animais':
            $pag_actual = 'f_animais.php';
            break;
            //cliente
        case 'cliente':
            $pag_actual = 'cliente.php';
            break;
        case 'f_cliente':
            $pag_actual = 'f_cliente.php';
            break;

            //vendas
            case 'vendas':
            $pag_actual = 'vendas.php';
            break;

            case 'f_vendas':
             $pag_actual = 'f_vendas.php';
             break;
            
    }
}
