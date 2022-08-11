<div class="row container">

	<h3>Fazer Login</h3>


	<?php 
		if(!empty($data['mensagem'])):
			foreach ($data['mensagem'] as $m):
				echo $m."<br>";
			endforeach;
		endif; 
	?>


	<form class="col s12" action="<?php $_SERVER['SERVER_NAME']; ?>/home/login" method="POST">
		<!--Email: <input type="text" name="email"> <br>-->
	<div class="row">
		<div class="input-field inline">
            <input id="email_inline" type="email" class="validate" name="email">
            <label for="email_inline">Email: </label>
           </div>
        </div>   



		<!--Senha: <input type="password" name="senha"> <br><br>-->

		<div class="row">
	       <div class="input-field inline">
	          <input id="password" type="password" class="validate" name="senha">
	          <label for="password">Senha: </label>
	       </div>
	     </div>

		<button class="waves-effect waves-light btn" name="entrar">Entrar</button>
	</form>

</div>