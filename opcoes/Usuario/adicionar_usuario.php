<link href="./estilos/style.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container text-dark font-weight-bold" >
  <br>
	<div>
		<?php
			if (!empty($_SESSION['type'])) {
		?>
		<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert" style="border: none;width: 100%;">
			<button style="border-radius: 100px; width: 30px; height:30px; border: 1px solid #ccc" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
			<?php
				if(!empty($_SESSION['msgId']))
					echo $_SESSION['msgId'].'<br>';
				if(!empty($_SESSION['msgNome']))
					echo $_SESSION['msgNome'].'<br>';
				if(!empty($_SESSION['message']))
					echo $_SESSION['message'].'<br>';
			?>
		</div>

		<?php
			unset($_SESSION['type']);
			unset($_SESSION['msgId']);
			unset($_SESSION['msgNome']);
			unset($_SESSION['message']);
		?>

		<?php } ?>
	</div>
	<h2 style="padding-top: 20px;padding-left:10%;padding-right:10%;">Novo Usuário</h2>
	<hr style="margin-left:10%;margin-right:10%;" />	<!-- linha de separação -->
	<form action="?page=usuario_save" method="post" style="margin: 0 10%;">

		<!-- area de campos do form -->
		
		<div class="form-wrap" style="padding-top: 5px;">
			<!-- <label for="nome">Nome:</label> -->
			<input type="text" placeholder="Nome" name="nome" required>
			<!-- <label for="cpf">CPF (apenas números):</label> -->
			<input type="text" placeholder="CPF (apenas números)" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" name="cpf" maxlength="11" required>
			<!-- <label for="email">E-mail:</label> -->
			<input type="email" placeholder="E-mail" name="email" style="margin-top: 18px;" required>
		</div>	

		<div id="actions" class="actions-container" style="padding: 30px 0">
				<button type="submit" class="btn-salvar btao-form">Salvar</button>
				<a href="index.php" class="btn-voltar btao-form">Voltar</a>
		</div>

	</form>

</div>
