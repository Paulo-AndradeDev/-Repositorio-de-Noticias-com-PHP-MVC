<?php 

use App\core\Controller;
use App\Auth;

class Home extends Controller
{

	public function Index() 
	{
		$note = $this->model('Note');
		$dados = $note->getAll();
		
		$this->view('home/index', $dados = ['registros'=>$dados]);
	}


	public function login(){

		//$dados = array();
		$mensagem = array();

		if (isset($_POST['entrar'])):

			if((empty($_POST['email'])) or (empty($_POST['senha']))):
				$mensagem[] = "Os campos email e senha são obrigatórios";
				
			else:
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$mensagem[] = Auth::login($email,$senha);
			endif;

		endif;

		$this->view('/home/login', $dados = ['mensagem' => $mensagem]);
	}


	public function logout(){

		Auth::logout();
	}

	public function buscar() 
	{
		$busca = isset($_POST['search']) ? $_POST['search'] : $_SESSION['search'];
		$_SESSION['search'] = $busca;

		$note = $this->model('Note');
		$dados = $note->search($busca); 

		
		$this->view('home/index', $dados = ['registros' => $dados]); // end. do arquivo móvel, dados recuperados do bd
	}
}

?>