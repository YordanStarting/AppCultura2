<?php
/**
@grcarvajal grcarvajal@gmail.com **Gildardo Restrepo Carvajal**
20/04/2022 aplicación energine plataforma de destion de sensores
Controlador de rutas y plantilla
 */

class ControladorGeneral{

	static public function ctrRutaInicio(){

		return "http://localhost/AppCultura/"; //Ruta de inicio para entorno local
		//return "https://eklycs.co/energine/"; //Ruta de inicio para entorno servidor

	}

	static public function ctrRutaApp(){

		return "http://localhost/AppCultura/App/dashboard/"; //Ruta ingresar al dashboard entorno local
		//return "https://eklycs.co/energine/"; //Ruta ingresar al dashboard entorno local

	}

	// static public function ctrRutaLink(){

	// 	return "http://localhost/eKlycs/pagina2/rE/direKlycs.php?idLink="; //Ruta local redirecionar link botones de suario
	// 	return "https://eklycs.co/rE/direKlycs.php?idLink="; //Ruta servidor redirecionar link botones de suario

	// }

// Funcion para redirecionar el flujo de la app a la plantilla
	public function ctrPlantilla()
	{
		include "vistas/plantilla.php";
	}
	
}