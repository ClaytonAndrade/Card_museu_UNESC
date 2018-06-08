
<?php
  
  $id = $_SESSION["id"];
  $animal = ControllerCards::ctrlMostrarCards($id);

echo '<div class="card_museu">
        <img src="http://localhost:90/Card/view/img/animais/'.$animal["foto"].'" class="img-responsive">
        <h1>'.$animal["nome"].'</h1>
        <p class="title_museu">'.$animal["descricao"].'</p>
        <p>Museu Arqueológico UNESC</p>
        <a href="#"><i class="fa fa-music"></i></a> 
        <a href="#"><i class="fa fa-play"></i></a> 
        <p>
          <button type="submit">
            <a href="qrcode" style="color:white;">Click aqui para ler o Próximo</a>
          </button>
        </p>
    </div>'

?>  