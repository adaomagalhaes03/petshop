<?php
include_once 'connection.php';
/**
 * 
 */
class Formando
{
	private $id;
    private $nome;
    private $num_bi;
    private $code;
	private $data_nasc;
    private $endereco;
    private $telefone;
    private $email;
    private $genero;
   # private $cd;
   # private $ud;
    
    

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
    function constructEmpty(){}
        
//Constructor de preenchimento. 

	function constructArg($id, $nome, $num_bi,  $code, $data_nasc, $endereco, $telefone, $email, $genero){

		$this->id = $id;
        $this->nome = $nome;
        $this->num_bi = $num_bi;
		$this->code = $code;
        $this->data_nasc = $data_nasc;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->genero = $genero;
     #  $this->cd = $cd;
     #  $this->ud = $ud;
    
	}
     function getFormando(){
         $sql = "select * from formando";
         $ob = new connection();
         $result = $ob->getResultados($sql);
         return $result;

     }
     

    function findUsuario($id){
	  $sql = "select id, nome, num_bi, code, data_nasc, endereco,  telefone,  email, genero from formando where id = $id";
	  $ob = new connection();
	  $result = $ob->getResultados($sql);
	  return $result;
	}

	function insertFormando(){
		$sql = "INSERT INTO formando (nome, num_bi, code, data_nasc, endereco,  telefone,  email, genero)
        values('$this->nome', '$this->num_bi', '$this->code','$this->data_nasc', '$this->endereco', $this->telefone, '$this->email', '$this->genero')";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function updateFormando(){
		$sql = "UPDATE usuario SET nome ='$this->nome', num_bi ='$this->num_bi', code ='$this->code', data_nasc ='$this->data_nasc',
        endereco ='$this->endereco',  telefone ='$this->telefone',  email ='$this->email', genero ='$this->genero' where id = $id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function deleteFormando($id){
		$sql = "DELETE FROM formando WHERE id = $id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}
	
	


}

?>