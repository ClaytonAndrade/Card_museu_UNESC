<?php

require_once "connection.php";

class ModelsAnimais{
    
    /*=============================================
	Mostrar Animais
    =============================================*/
    
    static public function mdlMostrarAnimal($tabela, $item, $valor){

			$stmt = Connection::conectar()->prepare("SELECT * FROM $tabela WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
    }
}