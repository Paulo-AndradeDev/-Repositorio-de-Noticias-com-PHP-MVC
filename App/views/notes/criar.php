<div class="row container">

	<h3>Adicionar Nova Notícia </h3>

	<?php 

	if(!empty($data['mensagem'])):
		foreach ($data['mensagem'] as $m):
			echo $m."<br";
		endforeach;
	endif; 
	?>

	<form class="col s12" action="<?php $_SERVER['SERVER_NAME']; ?>/notes/criar" method="POST" enctype="multipart/form-data">
	
	
	 	<div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="titulo">
          <label for="first_name">Título: </label>
    	</div>
    </div>
   
  <div class="row"> 
  	<div class="input-field col s12">
  				<label for="textarea2">Texto:</label>
         <textarea  name="texto" id="textarea2" class="materialize-textarea" data-length="120"></textarea> 
     </div>
  </div>


	<button class="waves-effect waves-light btn" name="cadastrar">Cadastrar</button>


</form>
</div>
<br>
<br>

