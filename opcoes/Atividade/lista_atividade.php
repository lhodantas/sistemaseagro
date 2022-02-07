<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
 require_once ABSPATH.'controle/atividades.php';
 require_once ABSPATH.'opcoes/Atividade/gridAtividades.php';

?>
<h1 class="text-center" style="padding-top: 40px; padding-bottom: 30px">Atividades</h1>
<div class="text-right h2" style="padding-bottom: 30px; padding-left: 20px;padding-right: 20px">
				<a class="btn btn-primary" href="?page=atividade_add"><i class="fa fa-plus"></i> Nova Atividade</a>
				<a class="btn btn-default" href="?page=atividades"><i class="fa fa-refresh"></i> Atualizar</a>
			</div>
<div class="row border border-white rounded"  style="padding-bottom: 80px; padding-left: 10px; width: 1050px">

<table class="table table-hover" style="padding-bottom: 30px; padding-left: 20px;padding-right: 20px">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
        <th>Descrição</th>
				<th>Observação</th>
        <th>Limite</th>
				<th>Sala</th>
				<th>Opções</th>
			</tr>
		</thead>
		<tbody>
<?php
	$atividades = allatividades();
	echo generateGrid($atividades);

?>

</div>
