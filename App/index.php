<?php
// /**
// @grcarvajal grcarvajal@gmail.com **Gildardo Restrepo Carvajal**
// 20/04/2022

require_once "controladores/ruta.controlador.php";
require_once "dashboard/controladores/usuarios.controlador.php";

////Modelos
require_once "dashboard/modelos/usuarios.modelo.php";

//extensiones para generar PDF
require_once "dashboard/extensiones/vendor/autoload.php";


$plantilla = new ControladorRuta();
$plantilla -> ctrPlantilla();
