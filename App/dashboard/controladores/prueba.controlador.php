<?php
/**
@grcarvajal grcarvajal@gmail.com **Gildardo Restrepo Carvajal**
22/04/2022 aplicación energine plataforma de destion de sensores
Controlador de usuarios registro, login y recuperar contraseña.
 */

class ControladorPrueba
{

/*--=====================================
	Consultar prueba
======================================--*/	
	public function ctrPrueba()
	{

	
	$tabla =  "log_ingreso";
	$item = "id";
	$valor = 10; 

	$respuesta = ModeloPrueba::mdlMostrarLog($tabla, $item, $valor);

	echo "<pre>";
	print_r($respuesta);
	echo "</pre>";

	}


} 