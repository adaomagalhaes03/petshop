<?php

include_once 'connection.php';

/**
 * 
 */
class Curso
{
	private $id;
	private $descricao;
	private $idcategoria;

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

	//Constructor de preenchimento. 

	function constructArg($id, $descricao, $idcategoria){
		$this->id = $id;
		$this->descricao = $descricao;
		$this->idcategoria = $idcategoria;		
	}

	  function getCategoria()
	  {
		   $sql = "select * from categoria";
		   $ob = new connection();
		   $result = $ob->getResultados($sql);
		   return $result;
	  }  


	function insertCurso(){
		$sql = "INSERT INTO curso (descricao,idcategoria) values('$this->descricao',$this->idcategoria)";	
		$ob = new connection();
		$ob->executeQuery($sql);
	}

    function updateCurso(){
		$sql = "UPDATE curso SET '$this->descricao', $this->idcategoria WHERE idcurso=$this->id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function deleteCurso(){
		$sql = "DELETE FROM curso WHERE idcurso = $id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}


}
?>