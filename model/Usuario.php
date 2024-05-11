<?php
include_once 'connection.php';
/**
 * 
 */
class Usuario
{
	private $id;
    private $nome_completo;
    private $nome_user;
	private $email;
    private $senha;
    private $estado;
   # private $cd;
   # private $ud;
    private $idpermissao;
    

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

	function constructArg($id, $nome_completo, $nome_user, $email, $senha, $estado, $idpermissao){
		$this->id = $id;
        $this->nome_completo = $nome_completo;
        $this->nome_user = $nome_user;
		$this->email = $email;
        $this->senha = $senha;
        $this->estado = $estado;
     #  $this->cd = $cd;
     #  $this->ud = $ud;
        $this->idpermissao = $idpermissao;		
	}
     function getUsuarios(){
         $sql = "select u.id, u.nome_completo, u.nome_user, u.email, u.senha, u.estado, p.descricao as permissao
		  from usuario u inner join permissao p on p.id = u.idpermissao";
         $ob = new connection();
         $result = $ob->getResultados($sql);
         return $result;

     }
     

    function findUsuario($id){
	  $sql = "select id, nome_completo, nome_user, email, senha, estado, idpermissao from usuario where id = $id";
	  $ob = new connection();
	  $result = $ob->getResultados($sql);
	  return $result;
	}

	function insertUsuario(){
		$sql = "INSERT INTO usuario (nome_completo, nome_user, email, senha, estado, idpermissao, cd)
        values('$this->nome_completo', '$this->nome_user', '$this->email',md5('$this->senha'), '$this->estado', $this->idpermissao, sysdate())";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function updateUsuario(){
		$sql = "UPDATE usuario SET nome_completo ='$this->nome_completo' , nome_user ='$this->nome_user', email ='$this->email', 
        senha =md5('$this->senha'), estado ='$this->estado', idpermissao = $this->$idpermissao where id = $id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function deleteUsuario($id){
		$sql = "DELETE FROM usuario WHERE id = $id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function autenticaUsuario($user, $senha){
        $sql = "select u.id, u.nome_completo, p.descricao from usuario u
        inner join permissao p on p.id = u.idpermissao
        where u.nome_user = '$user' and u.senha = md5('$senha')";

        $ob = new connection();
        $res = $ob->getResultados($sql);

        if(is_array($res)){
            return $res;
        }
        else{
           return false; 
        }
    }
	

}

?>