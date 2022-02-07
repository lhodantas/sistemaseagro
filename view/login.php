
 <link href="./estilos/style.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
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

<?php
  if(empty($_SESSION['usuario'])){
?>
<div>
  <div>
    <!-- colocar o caminho para o login -->
    <form action="?page=fazer_login" method="post">
      <h3 class="text-center mb-3">Login </h3>
      <div class="input-container">
        <div class="icon-wrap">
          <i class="fa fa-envelope input-icon" aria-hidden="true"></i>
        </div>
        <input type="text"  name="email" id="user" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1" style="width:50%;margin:0;" required>
      </div>

      <div class="input-container">
        <div class="icon-wrap">
          <i class="fa fa-unlock-alt input-icon" aria-hidden="true"></i>
        </div>
        <input type="password"  name="senha" id="senha" placeholder="Senha" aria-label="Password" aria-describedby="basic-addon2" style="width:50%;margin:0;" required>
      </div>
      <button class="btn btn-success btn-block col-md-6" type="submit" id="btnLogin" style="display: block; margin-top: 40px">Entrar</button>

    </form>

    <a href=<?php echo BASEURL ?> style="text-decoration:none;">
      <button class="btn btn-danger btn-block col-md-6 center" id="btnCancel" style="display: block; margin-top: 10px;">Voltar</button>
    </a></br>
    <a href="?page=refatorar" class="text-primary" style="display: block; padding-bottom: 30px">
        Esqueceu a Senha?
      </a>
  </div>

</div>


<?php
}
 ?>
</center>
