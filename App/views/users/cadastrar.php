<div class="row container">

	<h3>Formulário de Cadastro</h3>

	<?php 
		if(!empty($data['mensagem'])):
			foreach ($data['mensagem'] as $m):
				echo $m."<br";
			endforeach;
		endif; 
	?>

	<form class="col s12" action="<?php $_SERVER['SERVER_NAME']; ?>/users/cadastrar" method="POST">
		<!-- Nome: <input type="text" name="nome"> <br>-->
		<div class="row">
			<div class="input-field col s6">
	          <input id="last_name" type="text" class="validate" name="nome">
	          <label for="last_name">Nome:</label>
	        </div>
        </div>

		<!-- Email: <input type="text" name="email"> <br> -->
		<div class="row">
	        <div class="input-field col s12">
	          <input id="email" type="email" class="validate" name="email">
	          <label for="email">Email:</label>
	        </div>
        </div>

		<!-- Senha: <input type="password" name="senha"> <br><br> -->
		
		<div class="row">
	        <div class="input-field col s12">
	          <input id="password" type="password" class="validate" name="senha">
	          <label for="password">Senha:</label>
	        </div>
	    </div>

		<button class="waves-effect waves-light btn" name="cadastrar">
			Cadastrar
		</button>
	</form>

</div>