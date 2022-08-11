<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anotações</title>
</head>
<body>

<?php if(isset($_SESSION['logado'])): ?>
 	 &nbsp;  &nbsp;  &nbsp;  &nbsp; 
 	 <h6>Olá, <?php echo $_SESSION['userNome']; ?>! Seja bem-vindo!</h6>
<?php endif; ?>


<div class="row container" >
<br>
  <nav>
    <div class="nav-wrapper">
      <form method="POST" action="<?php URL_BASE ?>/home/buscar">
        <div class="input-field">
          <input name="search" id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

<!-- mensagem de exclusão -->
<?php 
if(!empty($data['mensagem'])):
	foreach ($data['mensagem'] as $m):
		echo "<br><center><b>".$m."</b></center><br>";
	endforeach;
endif; 
?>


	<?php  if(empty($data['registros'])):
				echo "<br><h5>A busca não retornou nenhum resultado</h5>";
			endif;

	foreach ($data['registros'] as $note): ?>

	<div id="<?php echo $note['id'];?>" style="background-color: #FCFCFC;">

	<h3>
		<a href="/notes/ver/<?php echo $note['id'];?>"><?php echo $note['titulo']; ?>
			</a>
	</h3>
	<hr>

	<p><?php echo $note['texto']; ?></p>

	<?php if(isset($_SESSION['logado'])): ?>
		<a class="waves-effect waves-light btn" href="/notes/editar/<?php echo $note['id'];?>" title="Clique para alterar o texto desta anotação">
			<img src="<?php URL_BASE ?>/images/edit.svg"> 
				Editar
			</img>
		</a>  
		
		<a class="waves-effect waves-light btn red" href="/notes/excluir/<?php echo $note['id'];?>" title="Clique para excluir esta anotação">
			Excluir <img src="<?php URL_BASE ?>/images/delete.svg">
		</a>
	
	<?php endif; ?>

	</div>
	<?php endforeach; ?>
</div>
</body>
</html>