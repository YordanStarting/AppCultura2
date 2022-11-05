<?php
/**
@grcarvajal grcarvajal@gmail.com **Gildardo Restrepo Carvajal**
16/05/2022 aplicación web Cultura plataforma de eventos de cultura
Modelo de gestion de eventos.
 */
require_once "conexion.php";

class ModeloEventos
{
    
/*=============================================
	Registrar Evento
==============================================*/
	static public function mdlRegistroEventos($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(`nombreEvento`,`descripcion` , `lugar`, `ciudad`,
		`individualCant`, `individualDisp` , `individualValor`, `individualDesc`, `gruposCant`, `gruposDisp`,
		 `gruposValor`, `gruposDesc`, `vipCant`, `vipDisp`, `vipValor`, `vipDesc`, `tipo`, `fechaEvento`, `hora`, `nit`,`id_emp`) 
		VALUES (:nombre, :desp, :lugar, :ciudad, :indCant, :indDisp, :indVal, :indDesc, :grupoCant, :grupoDisp,
		:grupoVal, :grupoDesc, :vipCant, :vipDisp, :vipVal, :vipDesc, :tipo, :fecha, :hora, :nit, :idEmp)" );
		 
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":desp", $datos["descp"], PDO::PARAM_STR);
		$stmt->bindParam(":lugar", $datos["lugar"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
	    $stmt->bindParam(":indCant", $datos["indCant"], PDO::PARAM_INT);
		$stmt->bindParam(":indDisp", $datos["indDisp"], PDO::PARAM_INT);
		$stmt->bindParam(":indVal", $datos["indVal"], PDO::PARAM_INT);
		$stmt->bindParam(":indDesc", $datos["indDesc"], PDO::PARAM_STR);
		$stmt->bindParam(":grupoCant", $datos["grupoCant"], PDO::PARAM_INT);
		$stmt->bindParam(":grupoDisp", $datos["grupoDisp"], PDO::PARAM_INT);
		$stmt->bindParam(":grupoVal", $datos["grupoVal"], PDO::PARAM_INT);
		$stmt->bindParam(":grupoDesc", $datos["grupoDesc"], PDO::PARAM_STR);
		$stmt->bindParam("vipCant", $datos["vipCant"], PDO::PARAM_INT);
		$stmt->bindParam("vipDisp", $datos["vipDisp"], PDO::PARAM_INT);
		$stmt->bindParam("vipVal", $datos["vipVal"], PDO::PARAM_INT);
		$stmt->bindParam("vipDesc", $datos["vipDesc"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
		$stmt->bindParam(":nit", $datos["nit"], PDO::PARAM_STR);
		$stmt->bindParam(":idEmp", $datos["idEmp"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}else{
			return print_r(Conexion::conectar()->errorInfo());
		}
		$stmt -> closeCursor();
		$stmt = null;
	}
  
/*=============================================
	Mostrar Eventos
==============================================*/

static public function mdlMostrarEventos($tabla, $item, $valor){
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
	$stmt = session_write_close().	
	$stmt = null;
}


/*=============================================
	Mostrar Varios eventos por ID de usuario 
==============================================*/

static public function mdlMostrarEventos2($tabla, $item, $valor){
	if($item != null && $valor != null){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetchAll();
	}
	$stmt = session_write_close().	
	$stmt = null;
}


/*=============================================
	Mostrar evento por ID
==============================================*/

static public function mdlMostrarEventoID($tabla, $item, $valor){
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
	Mostrar Empresa
==============================================*/


static public function mdlMostrarEmpresa($tabla, $nit){
	
	$stmt = Conexion::conectar()->prepare("SELECT nit FROM $tabla WHERE $nit = :nit"  );
	$stmt -> execute();
	return $stmt -> fetch();


}



/*=============================================
	Actualizar evento
==============================================*/
static public function mdlEditarEvento($tabla, $datos){
	$estado = 0;
	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreEvento = :nombre, lugar = :direccion, ciudad = :ciudad,
	  fechaEvento = :fechaEv, hora = :horaEv, descripcion = :desp, tipo = :tipo,
	  individualCant = :indCant, individualDisp = :indCant, individualValor = :indVal , individualDesc = :indDesc , 
	  gruposCant = :grupoCant , gruposDisp = :grupoCant , gruposValor = :grupoVal, gruposDesc = :grupoDesc,
	  vipCant = :vipCant , vipDisp = :vipCant, vipValor = :vipVal, vipDesc = :vipDes
	 WHERE id = :idEv");
	$stmt->bindParam(":idEv", $datos["idEv"], PDO::PARAM_STR);
	$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
	$stmt->bindParam(":direccion", $datos ["direccion"], PDO::PARAM_STR);
	$stmt->bindParam(":ciudad", $datos ["ciudad"], PDO::PARAM_STR);
	$stmt->bindParam(":fechaEv", $datos ["fechaEv"], PDO::PARAM_STR);	
	$stmt->bindParam(":horaEv", $datos ["horaEv"], PDO::PARAM_STR);
	$stmt->bindParam(":desp", $datos["descEv"], PDO::PARAM_STR);
	$stmt->bindParam(":tipo", $datos ["tipo"], PDO::PARAM_STR);
	$stmt->bindParam(":indCant", $datos ["indCant"], PDO::PARAM_STR);
	$stmt->bindParam(":indVal", $datos ["indVal"], PDO::PARAM_STR);
	$stmt->bindParam(":indDesc", $datos["indDesc"], PDO::PARAM_STR);
	$stmt->bindParam(":grupoCant", $datos ["grupoCant"], PDO::PARAM_STR);
	$stmt->bindParam(":grupoVal", $datos ["grupoVal"], PDO::PARAM_STR);
	$stmt->bindParam(":grupoDesc", $datos["grupoDes"], PDO::PARAM_STR);
	$stmt->bindParam(":vipCant", $datos ["vipCant"], PDO::PARAM_STR);
	$stmt->bindParam(":vipVal", $datos ["vipVal"], PDO::PARAM_STR);
	$stmt->bindParam(":vipDes", $datos ["vipDes"], PDO::PARAM_STR);

	if($stmt->execute()){
		return "ok";
	}else{
		return print_r(Conexion::conectar()->errorInfo());
	}
	// $stmt->close();
	$stmt = session_write_close();
	$stmt = null;
}


/*=============================================
	Mostrar Eventos Dashboard Admin
==============================================*/

static public function mdlMostrarEventosInd($tabla, $item, $valor){
	
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
	$stmt = session_write_close().	
	$stmt = null;
}

/*=============================================
	Mostrar Eventos Dashboard Cliente
==============================================*/

static public function mdlMostrarEventosInd2($tabla1, $tabla2, $item, $valor){
	
	if($item != null && $valor != null){
		$hoy = date('Y-m-d');
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla1 INNER JOIN $tabla2 on $tabla1.id = $tabla2.idEvento  WHERE fechaEvento >= '$hoy' AND $item = :val ");
		$stmt->bindParam(":val", $valor, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetchAll();
	}
	$stmt = session_write_close().	
	$stmt = null;
}

/*=============================================
	Mostrar Eventos Index
==============================================*/

static public function mdlMostrarEventosIndex($tabla, $item, $valor){
	if($item != null && $valor != null){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
	}else{
		$hoy = date('Y-m-d');
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fechaEvento >= '$hoy' LIMIT 9");
		$stmt -> execute();
		return $stmt -> fetchAll();
	}
	$stmt = session_write_close().	
	$stmt = null;
}

/*=============================================
	Actualizar Disp
==============================================*/
static public function mdlActualizarDisp($tabla, $valor,$newDisp,$cat){
	$estado = 0;
	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $cat = $newDisp WHERE id = $valor ");
	if($stmt->execute()){
		return "ok";
	}else{
		return print_r(Conexion::conectar()->errorInfo());
	}
	// $stmt->close();
	$stmt = session_write_close();
	$stmt = null;
}



/*=============================================
	Mostrar Eventos Todos Actuales
==============================================*/

static public function mdlMostrarEventosAll($tabla, $item, $valor){
	if($item != null && $valor != null){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
	}else{
		$hoy = date('Y-m-d');
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fechaEvento >= '$hoy' ");
		$stmt -> execute();
		return $stmt -> fetchAll();
	}
	$stmt = session_write_close().	
	$stmt = null;
}

	/*=============================================
	Registro Orden de compra
==============================================*/

	static public function mdlRegistrarOc($tabla2, $datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla2(`idUsuario`, `idEvento`,`categoria`,`cantidad`,`valor`, `metodoPago`) 
		VALUES (:idU, :idEv, :categoria, :cant, :valor, 'Contado') ");

		$stmt->bindParam(":valor", $datos["valor"], PDO::PARAM_STR);
		$stmt->bindParam(":idEv", $datos["idEvento"], PDO::PARAM_STR);
		$stmt->bindParam(":idU", $datos["idU"], PDO::PARAM_STR);
		$stmt->bindParam(":cant", $datos["cant"], PDO::PARAM_STR);
		$stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
		
	if($stmt->execute()){
		return "ok";
	}else{
		return print_r(Conexion::conectar()->errorInfo());
	}
	$stmt -> closeCursor();
	$stmt = null;
}


}




