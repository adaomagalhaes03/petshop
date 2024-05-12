<?php
include_once 'connection.php';

class Produto
{
    private $ProdutoID;
    private $Nome;
    private $Descricao;
    private $Preco;
    private $QuantidadeEmEstoque;

    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if ($i > 0) {
            call_user_func_array(array($this, 'constructArg'), $a);
        } else {
            call_user_func_array(array($this, 'constructEmpty'), $a);
        }
    }

    function constructEmpty()
    {
    }

    function constructArg($ProdutoID, $Nome, $Descricao, $Preco, $QuantidadeEmEstoque)
    {
        $this->ProdutoID = $ProdutoID;
        $this->Nome = $Nome;
        $this->Descricao = $Descricao;
        $this->Preco = $Preco;
        $this->QuantidadeEmEstoque = $QuantidadeEmEstoque;
    }

    function getProdutos()
    {
        $sql = "SELECT ProdutoID, Nome, Descricao, Preco, QuantidadeEmEstoque FROM Produto";
        $ob = new connection();
        $result = $ob->getResultados($sql);
        return $result;
    }

    function findProduto($ProdutoID)
    {
        $sql = "SELECT ProdutoID, Nome, Descricao, Preco, QuantidadeEmEstoque FROM Produto WHERE ProdutoID = $ProdutoID";
        $ob = new connection();
        $result = $ob->getResultados($sql);
        return $result;
    }

    function insertProduto()
    {
        $sql = "INSERT INTO Produto (Nome, Descricao, Preco, QuantidadeEmEstoque) 
        VALUES ('$this->Nome', '$this->Descricao', $this->Preco, $this->QuantidadeEmEstoque)";
        $ob = new connection();
        $ob->executeQuery($sql);
    }

    function updateProduto()
    {
        $sql = "UPDATE Produto SET Nome = '$this->Nome', Descricao = '$this->Descricao', 
        Preco = $this->Preco, QuantidadeEmEstoque = $this->QuantidadeEmEstoque WHERE ProdutoID = $this->ProdutoID";
        $ob = new connection();
        $ob->executeQuery($sql);
    }

    function deleteProduto($ProdutoID)
    {
        $sql = "DELETE FROM Produto WHERE ProdutoID = $ProdutoID";
        $ob = new connection();
        $ob->executeQuery($sql);
    }
}
?>
