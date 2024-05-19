<?php

require_once "../model/Usuario.php";

extract($_REQUEST);

if (isset($acao)) {
    switch ($acao) {
        case 'adicionar':
           $ob = new Usuario('', $nome, $user, $email, $senha, $estado, $permissao);
           $ob->insertUsuario();
           header ('Location: ../centro/main.php');
            break;

        case 'editar':

         
            break;

        case 'eliminar':
         
            break;
    }
} else {
    
    if (isset($login)) {
        $ob = new Usuario();
        $res = $ob->autenticaUsuario($user, $password);

        if ($res == false) {
            header('Location: ../index.php');
        } else {
            session_start();
            $_SESSION['usuario'] = array(
                'id' => $res[0]['id'],
                'nome' => $res[0]['nome_completo'],
                'nivel' => $res[0]['descricao']
            );

            header('Location: ../centro/main.php');
        }
    }
}


function getUsuarios(){
    $ob = new Usuario();
    return $ob->getUsuarios();
}