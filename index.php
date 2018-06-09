<!--======================================================================================================
Autor: Clayton Andrade
Data Inicial: 06/06/2018
Descrição: Modelo Card projeto Museu UNESC utilizando php 7.1.7, MySQL 5.6.34 Bootstrap 3.3.7, desenvolvido
em servidor local MAMP.
=======================================================================================================-->
<?php

require_once "controller/template.controller.php";
require_once "controller/card.controller.php";
require_once "controller/qrcode.controller.php";

require_once "model/animais.models.php";
require_once "model/connection.php";

$card = new ControllerTemplate();
$card -> ctrlTemplate();