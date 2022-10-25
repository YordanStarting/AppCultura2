<?php

require_once "conexion.php";

class ModeloEmpresas
{

        
/*=============================================
	Registrar Empresa
==============================================*/

	static public function mdlRegistroEmpresas($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(`nit`, `nombre`, `nombreRep`,`actividadEco`, `direccion`, `ciudad`, `correo`,`telefono`, `redesSociales`,`fotoEmp`, `menu`) VALUES(:nit, :nombre, :nombreRep, :actividadEmp, :direccion, :ciudad, :correo, :telefono, :redes, :foto, :menu)"); 


		$stmt->bindParam(":nit", $datos["nit"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreRep", $datos["nombreRep"], PDO::PARAM_STR);
		$stmt->bindParam(":actividadEmp", $datos["actividadEmp"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":redes", $datos["redes"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"]);
		$stmt->bindParam(":menu", $datos["menu"]);

		if($stmt->execute()){
			return "ok";
		}else{
			return print_r(Conexion::conectar()->errorInfo());
		}
		$stmt = session_write_close();
		// $stmt -> close();
		$stmt = null;

		
	}



/*=============================================
	Mostrar Empresas
==============================================*/

static public function mdlMostrarEmpresas($tabla, $item, $valor){
	if($item != null && $valor != null){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
	}else{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
	}
	// $stmt -> close();	
	$stmt = session_write_close();
	$stmt = null;
}

/*=============================================
	Mostrar empresa por ID
==============================================*/

	static public function mdlMostrarEmpresaID($tabla, $item, $valor){
		if($item != null && $valor != null){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}
		// $stmt -> close();
		$stmt = session_write_close();
		$stmt = null;
	}

/*=============================================
	Actualizar empresa
==============================================*/
	static public function mdlEditarEmpresa($tabla, $datos){
		$estado = 0;
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, actividadEco = :actividadE,
		 nombreRep = :nombreR, direccion = :direccionE, ciudad = :ciudadE, correo = :correoE, telefono = :telefonoE,
		 redesSociales = :redesE  WHERE id = :idEm");
		$stmt->bindParam(":idEm", $datos["idEm"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":actividadE", $datos["actividadE"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreR", $datos["nombreR"], PDO::PARAM_STR);
		$stmt->bindParam(":direccionE", $datos["direccionE"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudadE", $datos["ciudadE"], PDO::PARAM_STR);
		$stmt->bindParam(":correoE", $datos["correoE"], PDO::PARAM_STR);
		$stmt->bindParam(":telefonoE", $datos["telefonoE"], PDO::PARAM_STR);
		$stmt->bindParam(":redesE", $datos["redesE"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}else{
			return print_r(Conexion::conectar()->errorInfo());
		}
		// $stmt->close();
		$stmt = session_write_close();
		$stmt = null;
	}

}