<div class="login-box">
  <div class="login-box-body"> 
    <p class="login-box-msg">Simula Leitor</p>
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Id Animal" name="ingAnimal" required>
        <span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
      </div>
      
      <?php
        $mostrar = new ControllerCards();
        $mostrar -> ctrlCards();
      ?>
  
    </form>

  </div>

</div>