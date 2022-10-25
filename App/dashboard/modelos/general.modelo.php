<?php
/**
@grcarvajal grcarvajal@gmail.com **Gildardo Restrepo Carvajal**
20/04/2022 aplicación energine plataforma de destion de sensores
modelo para crear consultas generales para todos sirven
 */
require_once "conexion.php";

class ModeloGeneral
{

/*====================================================================================
	Contar registros en cualquier tabla, se debe enviar la tabla que se desea contar
=====================================================================================*/
static public function mdlContarRegistros($tabla)
{
	// $sql = "SELECT COUNT(*) total FROM avisos";
	// $result = mysql_query($sql);
	// $fila = mysql_fetch_assoc($result);
	// echo 'Número de total de registros: ' . $fila['total'];

	$stmt = Conexion::conectar()->prepare("SELECT COUNT(*) total FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetch();
			$stmt-> closeCursor();
			$stmt = null;
	}
	
	
}