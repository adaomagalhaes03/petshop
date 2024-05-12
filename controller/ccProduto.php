<?php

require_once "../model/Produto.php";

extract($_REQUEST);

if (isset($acao)) {
    switch ($acao) {
        case 'adicionar':
            $produto = new Produto('', $nome, $descricao, $preco, $quantidade);
            $produto->insertProduto();
            header ('Location: ../centro/produtos.php');
            break;

        case 'editar':
            if(isset($ProdutoID)) {
                $produto = new Produto($ProdutoID, $nome, $descricao, $preco, $quantidade);
                $produto->updateProduto();
                header('Location: ../centro/produtos.php');
            }
            break;

        case 'eliminar':
            if(isset($ProdutoID)) {
                $produto = new Produto();
                $produto->deleteProduto($ProdutoID);
                header('Location: ../centro/main.php');
            }
            break;
    }
} else {
    // Lógica para autenticar o login

    if (isset($login)) {
        // Lógica de autenticação de login
    }
}

function getProdutos(){
    $produto = new Produto();
    return $produto->getProdutos();
}
?>
