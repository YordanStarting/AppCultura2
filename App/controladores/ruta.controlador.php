<?php 
/**
@grcarvajal grcarvajal@gmail.com **Gildardo Restrepo Carvajal**
20/04/2022 aplicación energine plataforma de destion de sensores
Controlador de ruta y plantilla.
 */

class ControladorRuta
{
//funcion de de ruta a la aplicación en el inicio
	static public function ctrRuta(){

		return "http://localhost/AppCultura/App/"; //Ruta de inicio para entorno local
		//return "https://eklycs.co/energine"; //Ruta de inicio para entorno servidor

	}

//funcion de de ruta a la aplicación en el dashboard
	static public function ctrRutaDash(){

		return "http://localhost/AppCultura/App/dashboard/"; //Ruta de inicio para el dashboard
		//return "https://eklycs.co/energine"; //Ruta de inicio para entorno servidor para el dashboard

	}

//funcion de redirecionamiento a la plantilla de inicio o index
	public function ctrPlantilla()
	{
		include "vistas/plantilla.php";
	}
}