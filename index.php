<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/clases.controlador.php";
require_once "controladores/planes.controlador.php";
require_once "controladores/actividades.controlador.php";


require_once "modelos/usuarios.modelo.php";
require_once "modelos/clases.modelo.php";
require_once "modelos/planes.modelo.php";
require_once "modelos/actividades.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();