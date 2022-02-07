<link href="./estilos/style.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container text-dark font-weight-bold text-center" >
  <br>
	<div class="container">
		<?php
			if (!empty($_SESSION['type'])) {
		?>
		<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php
				if(!empty($_SESSION['message']))
					echo $_SESSION['message'].'<br>';
			?>
		</div>

		<?php
			unset($_SESSION['type']);
			unset($_SESSION['message']);
		?>

		<?php } ?>
	</div>

    <h2  style="padding: 10px 0">INFORME O CPF</h2>
	<form action="?page=usuario_save" method="post" style="margin:0 20%;">

		<!-- area de campos do form -->
		<input type="text" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" placeholder="CPF (apenas números)" name="teste_cpf" maxlength="11" required>
		<br>
		<div id="actions" class="actions-container" style="padding-top:30px;">
				<button type="submit" class="btao-form btn-salvar">Enviar</button>
				<a href="index.php" class="btao-form btn-voltar">Voltar</a>
		</div><!--row-->

	</form><!--form-->

</div>
