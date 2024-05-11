<?php

include_once 'connection.php';


class Categoria
{
	private $id;
	private $descricao;
	
	
	
	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if ($i>0) {
			call_user_func_array(array($this,'constructArg'),$a);
		}
		else{
			call_user_func_array(array($this,'constructEmpty'),$a);
		}
	}

// Constructor vazio!!
	function constructEmpty(){

	}

	//Constructor com campos preenchidos. 

	function constructArg($id,$descricao){
		$this->id = $id;
		$this->descricao = $descricao;
		
	}

      function getCategoria(){
		$sql = "select * from categoria";
		$ob = new connection();
		$result = $ob->getResultados($sql);
		return $result;
		} 
	
    function findCategoria($id){
	  $sql = "select id,descricao from categoria where idcategoria = $id";
	  $ob = new connection();
	  $result = $ob->getResultados($sql);
	  return $result;
	}

	function insertCategoria(){
		$sql = "INSERT INTO categoria (descricao) values('$this->descricao')";	
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function updateCategoria(){
		$sql = "UPDATE categoria SET descricao ='$this->descricao' WHERE idcategoria = $this->id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function deleteCategoria($id){
		$sql = "DELETE FROM categoria WHERE idcategoria = $id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}






}







?>