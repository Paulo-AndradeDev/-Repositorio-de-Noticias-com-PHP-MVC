<div class="row container">

<h1>Editar bloco de anotações</h1>


<form class="col s12" action="<?php $_SERVER['SERVER_NAME']; ?>/notes/editar/<?php echo $data['registros']['id'];?>" method="POST">

	<!-- Título: <input type="text" value="<?php /*echo $data['registros']['titulo'];*/?>" name="titulo"> -->
	
	<div class="row">
        <div class="input-field col s6">
          <input name="titulo" placeholder="Placeholder" id="first_name" type="text" class="validate" value="<?php echo $data['registros']['titulo'];?>">
          <label for="first_name">Título:</label>
        </div>
    </div>

	<!--Texto: <br>
	<textarea name="texto"><?php echo $data['registros']['texto'];?></textarea>
	<br> -->

	<div class="row">
        <div class="input-field col s12">
          <textarea name="texto" id="textarea1" class="materialize-textarea">
          	<?php echo $data['registros']['texto'];?>          	
          </textarea>
          <label for="textarea1">Texto:</label>
        </div>
      </div>

	<button class="waves-effect waves-light btn" name="atualizar">Atualizar</button>
	<?php 
		if(!empty($data['mensagem'])):
			foreach ($data['mensagem'] as $m):
	?>
		<a class="waves-effect waves-light btn" href="/" title="Voltar para a página inicial">
            <img src="<?php URL_BASE ?>/images/back.svg" /> Voltar
          </a>
	<?php			
			echo "<b>".$m."</b><br";
		endforeach;
	 endif; 
	?>


</form>

</div>
</div>