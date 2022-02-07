<link href="./estilos/style.css" rel="stylesheet">
<?php
require_once ABSPATH.'model/programacao.php';
require_once ABSPATH.'model/participante.php';

$programacao = new Programacao();
$programacoes = $programacao->getProgramacao(2);
date_default_timezone_set ('America/Cuiaba');
$hojeDia = date("Y-m-d");
foreach($programacoes as $indice => $programa){
  $palestrantes = $programacao->getPalestrantes($programa->id_atividade);
?>

<div class="container col-md-5" >
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
  }
  ?>
</div>

<h1 style="text-align: center; padding: 40px 0">Próximos eventos</h1>
<div class="border bg-white pt-3">
  <div class="row align-items-center">
    <div class="col-10 programacao">

      <div class="programacao-item">
        <h4 style="text-align: center;background: #009c2f; border-radius:5px;padding:10px 0;color: white"><?php echo $programa->nomea;?></h4>
        <h6 style="text-align: center; padding-bottom: 20px"><?php echo $programa->descricao;?></h6>

        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="fas fa-calendar-alt" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10">
            <h6 class="font-weight-bold"><?php echo "Data: ".date("d/m", strtotime($programa->data))." Hora: ".date("H:i", strtotime($programa->hora))." hs";?></h6>
          </div>
        </div><!--icon-item-->


        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="fas fa-thumbtack" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10">
            <h6><?php echo "Local: <a href='".$programa->nomes."' target='_blank'>";?>Youtube</a></h6>
          </div>
        </div><!--icon-item-->

        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="far fa-user" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10">
          <h5><?php if(count($palestrantes)>1){echo "Palestrantes: ";}else{echo "Palestrante: ";} ?></h5>
          </div>
        </div><!--icon-item-->
    
    
        <?php
          foreach($palestrantes as $indice => $palestrante){
        ?>

        
        <h6 class="font-italic"><?php echo $palestrante->nome; if(isset($palestrante->instituicao)){echo " (".$palestrante->instituicao.")";}?></h6>
        <?php
          }
        ?>
        <div class="row align-items-center" style="background-color: #ccc;width:150px; height: 150px; border-radius: 100%;margin: 0 auto">
          <?php
            foreach($palestrantes as $indice => $palestrante){
          ?>
          <img class="col-2 rounded-circle"  src="<?php echo $palestrante->foto; ?>"><br>
          <?php
            }
          ?>
        </div>
      </div><!--programacao-item-->

      <div class="programacao-item">
        <h4 style="text-align: center;background:#009c2f; border-radius:5px;padding:10px 0;color: white"><?php echo $programa->nomea;?></h4>
        <h6 style="text-align: center;padding-bottom: 20px"><?php echo $programa->descricao;?></h6>

        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="fas fa-calendar-alt" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10;">
            <h6 class="font-weight-bold"><?php echo "Data: ".date("d/m", strtotime($programa->data))." Hora: ".date("H:i", strtotime($programa->hora))." hs";?></h6>
          </div>
        </div><!--icon-item-->


        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="fas fa-thumbtack" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10">
            <h6><?php echo "Local: <a href='".$programa->nomes."' target='_blank'>";?>Youtube</a></h6>
          </div>
        </div><!--icon-item-->

        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="far fa-user" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10">
          <h5><?php if(count($palestrantes)>1){echo "Palestrantes: ";}else{echo "Palestrante: ";} ?></h5>
          </div>
        </div><!--icon-item-->
    
    
        <?php
          foreach($palestrantes as $indice => $palestrante){
        ?>

        
        <h6 class="font-italic"><?php echo $palestrante->nome; if(isset($palestrante->instituicao)){echo " (".$palestrante->instituicao.")";}?></h6>
        <?php
          }
        ?>
        <div class="row align-items-center" style="background-color: #ccc;width:150px; height: 150px; border-radius: 100%;margin: 0 auto">
          <?php
            foreach($palestrantes as $indice => $palestrante){
          ?>
          <img class="col-2 rounded-circle"  src="<?php echo $palestrante->foto; ?>"><br>
          <?php
            }
          ?>
        </div>
      </div><!--programacao-item-->

      <div class="programacao-item">
        <h4 style="text-align: center;background: #009c2f; border-radius:5px;padding:10px 0;color: white"><?php echo $programa->nomea;?></h4>
        <h6 style="text-align: center;padding-bottom: 20px"><?php echo $programa->descricao;?></h6>

        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="fas fa-calendar-alt" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10">
            <h6 class="font-weight-bold"><?php echo "Data: ".date("d/m", strtotime($programa->data))." Hora: ".date("H:i", strtotime($programa->hora))." hs";?></h6>
          </div>
        </div><!--icon-item-->


        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="fas fa-thumbtack" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10">
            <h6><?php echo "Local: <a href='".$programa->nomes."' target='_blank'>";?>Youtube</a></h6>
          </div>
        </div><!--icon-item-->

        <div class="icon-item" style="display: flex; width: 100%">
          <div style="flex: 1;align-item: center;display: flex">
            <i class="far fa-user" style="height: 25px; align-self: center;color: #009c2f"></i>
          </div>

          <div style="flex: 10">
          <h5><?php if(count($palestrantes)>1){echo "Palestrantes: ";}else{echo "Palestrante: ";} ?></h5>
          </div>
        </div><!--icon-item-->
    
    
        <?php
          foreach($palestrantes as $indice => $palestrante){
        ?>

        
        <h6 class="font-italic"><?php echo $palestrante->nome; if(isset($palestrante->instituicao)){echo " (".$palestrante->instituicao.")";}?></h6>
        <?php
          }
        ?>
        <div class="row align-items-center" style="background-color: #ccc;width:150px; height: 150px; border-radius: 100%;margin: 0 auto">
          <?php
            foreach($palestrantes as $indice => $palestrante){
          ?>
          <img class="col-2 rounded-circle"  src="<?php echo $palestrante->foto; ?>"><br>
          <?php
            }
          ?>
        </div>
      </div><!--programacao-item-->
    </div><!--programacao-->

    <?php
    if($hojeDia<=$programa->data){
      if(!empty($_SESSION['participante'])){
        $participante = unserialize($_SESSION['participante']);
        if(empty($programacao->verificaAtividade($programa->id_data_atividade,$participante->getIdParticipante()))){
    ?>
    <div class="col-2 justify-content-center ">
      <form action="?page=programacao_save" method="post">
    		<div class="row">
    			<div class="col-md-12">
            <input type="hidden" class="form-control" name="atividade" value="<?php echo $programa->id_data_atividade;?>">
    				<button type="submit" class="btn btn-primary">Participar</button>
    			</div>
    		</div>
    	</form>
    </div>
    <?php
      }else{
    ?>
    <div class="col-2 justify-content-center ">
      <form action="?page=programacao_save" method="post">
    		<div class="row">
    			<div class="col-md-12">
            <input type="hidden" class="form-control" name="desfazer" value="<?php echo $programa->id_data_atividade;?>">
    				<button type="submit" class="btn btn-secondary">Cancelar Participação</button>
    			</div>
    		</div>
    	</form>
    </div>
    <?php
      }
    }else{
     ?>

     <div class="col-2 justify-content-center ">
       <h5>Faça a inscrição para participar</h5>
     </div>

     <?php
     }
   }

      ?>
  </div>
</div>
<br>

<?php
}
?>
