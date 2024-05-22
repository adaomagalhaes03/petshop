<?php
include_once 'connection.php';

class Cliente
{
    private $ClienteID;
    private $Nome;
    private $Email;
    private $Telefone;
    private $Endereco;

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

    function constructArg($ClienteID, $Nome, $Email, $Telefone, $Endereco)
    {
        $this->ClienteID = $ClienteID;
        $this->Nome = $Nome;
        $this->Email = $Email;
        $this->Telefone = $Telefone;
        $this->Endereco = $Endereco;
    }

    function getClientes()
    {
        $sql = "SELECT ClienteID, Nome, Email, Telefone, Endereco FROM Cliente";
        $ob = new connection();
        $result = $ob->getResultados($sql);
        return $result;
    }

    function findCliente($ClienteID)
    {
        $sql = "SELECT ClienteID, Nome, Email, Telefone, Endereco FROM Cliente WHERE ClienteID = $ClienteID";
        $ob = new connection();
        $result = $ob->getResultados($sql);
        return $result;
    }

    function insertCliente()
    {
        $sql = "INSERT INTO Cliente (Nome, Email, Telefone, Endereco) 
        VALUES ('$this->Nome', '$this->Email', '$this->Telefone', '$this->Endereco')";
        $ob = new connection();
        $ob->executeQuery($sql);
    }

    function updateCliente()
    {
        $sql = "UPDATE Cliente SET Nome = '$this->Nome', Email = '$this->Email', 
        Telefone = '$this->Telefone', Endereco = '$this->Endereco' WHERE ClienteID = $this->ClienteID";
        $ob = new connection();
        $ob->executeQuery($sql);
    }

    function deleteCliente($ClienteID)
    {
        $sql = "DELETE FROM Cliente WHERE ClienteID = $ClienteID";
        $ob = new connection();
        $ob->executeQuery($sql);
    }
}
?>
