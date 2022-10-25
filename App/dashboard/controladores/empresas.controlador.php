<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class ControladorEmpresas{

/*--=====================================
	Registrar Empresa
======================================--*/	

    public function ctrRegistrarEmpresa(){
        
        if(isset($_POST["nombreEmp"])){

            $ruta = ControladorGeneral::ctrRutaApp();
            $tabla = "empresas";    
            
            $datos = array(
            "nit" => $_POST["nit"],
            "nombre" => $_POST["nombreEmp"],
            "nombreRep" => $_POST["nombreRep"],
            "actividadEmp" => $_POST["actividadEmp"],
            "direccion" => $_POST["direccionEmp"],
            "ciudad" => $_POST["ciudadEmp"],
            "correo" => $_POST["correoEmp"],
            "telefono" => $_POST["telefonoEmp"],
            "redes" => $_POST["redesEmp"],
            "foto" => $_POST["fotoEmp"],
            "menu" => $_POST["menuEmp"]
             );
             
             $respuesta = ModeloEmpresas::mdlRegistroEmpresas($tabla, $datos);
             if($respuesta == "ok")
                   {
                   echo '<script>
                    window.location = "'.$ruta.'verEmpresas";
                  </script>';

               }

        }

    }
    
    /*--=====================================
	Mostrar Empresas
======================================--*/	

    static public function ctrMostrarEmpresas($item,$valor){

        $tabla = "empresas";
        $respuesta = ModeloEmpresas::mdlMostrarEmpresas($tabla, $item, $valor);
        return $respuesta;

    }


/*--=====================================
    Mostrar empresa por ID
    ======================================--*/
    static public function ctrMostrarEmpresaID($item, $valor)
    {
    $tabla = "empresas";
    $respuesta = ModeloEmpresas::mdlMostrarEmpresaID($tabla, $item, $valor);
    return $respuesta;
    }

/*--=============================================
   Editar empresa
==============================================--*/
    static public function ctrEditarEmpresa()
    {
        if(isset($_POST["nombreE"]))
        {
        $ruta = ControladorGeneral::ctrRutaApp();
        $tabla = "empresas";
        $datos = array("idEm" => $_POST["idEm"], //poner datos del formulario
                       "nombre" => $_POST["nombreE"],
                       "actividadE" => $_POST["actividadE"],
                       "nombreR" => $_POST["nombreR"],
                       "direccionE" => $_POST["direccionE"],
                       "ciudadE" => $_POST["ciudadE"],
                       "correoE" => $_POST["correoE"],
                       "telefonoE" => $_POST["telefonoE"],
                       "redesE" => $_POST["redesE"]

                        );
        $respuesta =ModeloEmpresas::mdlEditarEmpresa($tabla, $datos);
        if($respuesta == "ok")
                    {
                        echo '<script>
                            swal({
                                type:"success",
                                title: "¡Se realizo la actualización de la empresa!",
                                text: "¡Ver empresas!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                                }).then(function(result){
                                if(result.value){
                                    window.location = "'.$ruta.'verEmpresas";
                                }
                            }); 
                        </script>';
                                        
                }
        else{
            echo '<script>
            swal({
                type:"success",
                title: "¡Error de registro!",
                text: "¡Editar empresa!",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                if(result.value){
                    window.location = "'.$ruta.'editarEmpresa";
                }
            }); 
        </script>';
                        


        }
        }
    }


}
