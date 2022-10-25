<?php


session_destroy();
	  	 	
$ruta = ControladorGeneral::ctrRutaInicio();

echo '<script>
		window.location = "'.$ruta.'";
	</script>';

?>