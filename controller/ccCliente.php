<?php

require_once "../model/Cliente.php";

extract($_REQUEST);

if (isset($Acao)) {
    switch ($Acao) {
        case 'Adicionar':
            $cliente = new Cliente('', $Nome, $Email, $Telefone, $Endereco);
            $cliente->insertCliente();
            header('Location: ../../centro/cliente.php');
            break;

        case 'Editar':
            if (isset($ClienteID)) {
                $cliente = new Cliente($ClienteID, $Nome, $Email, $Telefone, $Endereco);
                $cliente->updateCliente();
                header('Location: ../centro/cliente.php');
            }
            break;

        case 'Eliminar':
            if (isset($ClienteID)) {
                $cliente = new Cliente();
                $cliente->deleteCliente($ClienteID);
                header('Location: ../centro/main.php');
            }
            break;
    }
} else {
    // Lógica para autenticar o login

    if (isset($Login)) {
        // Lógica de autenticação de login
    }
}

function getClientes(){
    $cliente = new Cliente();
    return $cliente->getClientes();
}
?>
