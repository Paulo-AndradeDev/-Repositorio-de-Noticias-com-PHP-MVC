<?php 

use App\core\Controller;
use App\Auth;

class Users extends Controller {

	public function cadastrar(){
		
		$mensagem = array();

		if(isset($_POST['cadastrar'])):
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

			$user = $this->model('User');
			$user->nome = $nome;
			$user->email = $email;
			$user->senha = $senha;

			$mensagem[] = $user->save();

		endif;

		$this->view('users/cadastrar', $dados = ['mensagem' => $mensagem]);

	}
}