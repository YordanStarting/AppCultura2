<?php
/**
@grcarvajal grcarvajal@gmail.com **Gildardo Restrepo Carvajal**
20/04/2022 aplicación energine plataforma de destion de sensores
modelo de conexion a la base de datos.

 */
class Conexion
{
	
	static function conectar()
	{
	   $link = new PDO("mysql:host=localhost;dbname=appcultura",
						"root",
						"");
	   $link->exec("set names utf8");
		return $link;
						
		// $link = new PDO("mysql:host=localhost;dbname=iotenerg_datasensores",
		// 				"iotenerg_sensoda",
		// 				"zDH6W9pZoL!Q");
		// $link->exec("set names utf8");
		// return $link;
	}
}

