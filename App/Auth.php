<?php 

namespace App;

use App\Core\Model;

class Auth {

	public static function login($email, $senha){

		$sql = "SELECT * FROM users WHERE email =?";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,$email);
		$stmt->execute();

		if($stmt->rowCount() >= 1):
			$resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			if(password_verify($senha, $resultado['senha'])):
				$_SESSION['logado'] = true;
				$_SESSION['userId'] = $resultado['id'];
				$_SESSION['userNome'] = $resultado['nome']; 
				header('location: /home/index');
			else:
				return "senha inválida";
			endif;	
				
		else:


			return "e-mail não encontrado!";
		endif;

	}

	public static function logout(){

		session_destroy();
		header('location: /home/login');

	}


	public static function checkLogin() {

		if(!isset($_SESSION['logado'])):
			header('location: /home/login');
			die;
		endif;			

	}
}

?>