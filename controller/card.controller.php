<?php

class ControllerCards{
    static public function ctrlCards(){

        if(isset($_POST["ingAnimal"])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingAnimal"])){

                $tabela = "animais";
                $item = "id_animal";
                $valor = $_POST["ingAnimal"];

                $resposta = ModelsAnimais::mdlMostrarAnimal($tabela, $item, $valor);
                
                if($resposta["id_animal"] == $_POST["ingAnimal"]){

                    $_SESSION["startSession"] = "ok";
                    echo '<script>window.location = "cards";</script>';

                }else{
                    echo '<br><div class="alert alert-danger">Erro ao tentar acessar o card, código é inválido</div>';
                }
            }    
        }
    }
}
        