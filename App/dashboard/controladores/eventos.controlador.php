<?php

/**
@grcarvajal grcarvajal@gmail.com **Gildardo Restrepo Carvajal**
16/05/2022 aplicación web Cultura plataforma de eventos de cultura
Controlador de gestion de eventos.
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class ControladorEventos
{

    /*--=====================================
	Registrar Evento
======================================--*/
    public function ctrRegistrarEvento()
    {
        if (isset($_POST["nombreE"])) {
            $ruta = ControladorGeneral::ctrRutaApp();
            $tabla = "eventos";

            $datos = array(
                "nombre" => $_POST["nombreE"],
                "descp" => $_POST["descE"],
                "lugar" => $_POST["lugarE"],
                "ciudad" => $_POST["ciudadE"],
                "tipo" => $_POST["tipoE"],
                "fecha" => $_POST["fechaE"],
                "hora" => $_POST["horaE"],
                "indCant" => $_POST["indCant"],
                "indDisp" => $_POST["indCant"],
                "indVal" => $_POST["indVal"],
                "indDesc" => $_POST["indDesc"],
                "grupoCant" => $_POST["gruposCant"],
                "grupoDisp" => $_POST["gruposCant"],
                "grupoVal" => $_POST["gruposVal"],
                "grupoDesc" => $_POST["gruposDesc"],
                "vipCant" => $_POST["vipCant"],
                "vipDisp" => $_POST["vipCant"],
                "vipVal" => $_POST["vipVal"],
                "vipDesc" => $_POST["vipDesc"],
                "nit" => $_POST["nitEmp"],
                "idEmp" => $_POST["idEmp"]
            );

            $respuesta = ModeloEventos::mdlRegistroEventos($tabla, $datos);
            if ($respuesta == "ok") {
                echo '<script>
			 		window.location = "' . $ruta . 'verEventos";
			 		</script>';
            }
        }
    }


    /*=============================================
	Mostrar Eventos
==============================================*/
    static public function ctrMostrarEventos($item, $valor)
    {

        $tabla = "eventos";

        $respuesta = ModeloEventos::mdlMostrarEventos($tabla, $item, $valor);
        return $respuesta;
    }

    /*=============================================
	Traer Empresa
==============================================*/


    static public function ctrMostrarEmpresa($tabla, $nit)
    {



        if (isset($_POST["nitEventos"])) {

            $tabla = "empresas";
            $nit =  $_POST["nitEventos"];

            $respuesta = ModeloEventos::mdlMostrarEmpresa($tabla, $nit);
            return $respuesta;
        }
    }


    /*--=====================================
    Mostrar evento por ID
    ======================================--*/
    static public function ctrMostrarEventoID($item, $valor)
    {
        $tabla = "eventos";
        $respuesta = ModeloEventos::mdlMostrarEventoID($tabla, $item, $valor);
        return $respuesta;
    }

    /*--=============================================
   Editar evento
==============================================--*/
    static public function ctrEditarEvento()
    {
        if (isset($_POST["nombreEv"])) {
            $ruta = ControladorGeneral::ctrRutaApp();
            $tabla = "eventos";
            $datos = array(
                "idEv" => $_POST["idEv"], //poner datos del formulario
                "nombre" => $_POST["nombreEv"],
                "descEv" => $_POST["descEv"],
                "direccion" => $_POST["direccionEv"],
                "ciudad" => $_POST["ciudadEv"],  
                "fechaEv" => $_POST["fechaEv"],
                "horaEv" => $_POST["horaEv"],
                "tipo" => $_POST["tipoEv"],
                "indCant" => $_POST["indCant"],
                "indVal" => $_POST["indVal"],
                "indDesc" => $_POST["indDesc"],
                "grupoCant" => $_POST["grupoCant"],
                "grupoVal" => $_POST["grupoVal"],
                "grupoDes" => $_POST["grupoDes"],
                "vipCant" => $_POST["vipCant"],
                "vipVal" => $_POST["vipVal"],
                "vipDes" => $_POST["vipDes"],
            );
            $respuesta = ModeloEventos::mdlEditarEvento($tabla, $datos);
            if ($respuesta == "ok") {
                echo '<script>
                            swal({
                                type:"success",
                                title: "¡Se realizo la actualización del evento!",
                                text: "¡Ver de eventos!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                                }).then(function(result){
                                if(result.value){
                                    window.location = "' . $ruta . 'verEventos";
                                }
                            }); 
                        </script>';
            } else {
                echo '<script>
            swal({
                type:"success",
                title: "¡Error de registro!",
                text: "¡Editar empresa!",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                if(result.value){
                    window.location = "' . $ruta . 'editarEmpresa";
                }
            }); 
        </script>';
            }
        }
    }

    /*=============================================
	Mostrar Eventos Index
==============================================*/
    static public function ctrMostrarEventosInd($item, $valor)
    {

        $tabla = "eventos";
        $respuesta = ModeloEventos::mdlMostrarEventosIndex($tabla, $item, $valor);
        return $respuesta;
    }
    /*=============================================
	Mostrar Eventos Todos Actuales
==============================================*/
    static public function ctrMostrarEventosAll($item, $valor)
    {

        $tabla = "eventos";
        $respuesta = ModeloEventos::mdlMostrarEventosAll($tabla, $item, $valor);
        return $respuesta;
    }


    //     /*============s=================================
    // 	Compra de ticket (Comprobacion inicio de sesion)
    // ==============================================*/

    //     static public function ctrComprarTicket()
    //     {
    //         session_start();

    //         if (isset($_POST['idEven'])) {
    //             if (isset($_SESSION["validarSesion"])) {

    //                 echo '<script>
    //                 window.location = C:\xampp\htdocs\AppCultura\comprarTicket.php;
    //                 </script>';

    //             } else {

    //                 $rutaInicio = ControladorGeneral::ctrRutaInicio();
    //                 echo '<script>
    //                 window.location = "' . $rutaInicio . 'APP/login";
    //               </script>';


    //             }
    //         }
    //     }






    /*=============================================
	Compra de ticket (disminuirla)
==============================================*/

    static public function ctrComprarTicketDisp()
    {

        session_start();

        if ($_SESSION["validarSesion"] == "ok") {

            if (isset($_POST["cantTk"])) {

                
                $cat = $_POST["cat"];
                $disp = $_POST["disp"];
                $tabla = "eventos";
                $valor = $_POST["idEvent"];
                $cantidad = $_POST["cantTk"];
                $newDisp = $disp - $cantidad;

                if ($cantidad <= $disp) {

                    $tabla2 = "ordencompra";
                    $val = $_POST["valor"];
                    $sub = $val * $cantidad;

                    $datos = array(
                        "valor" => $sub,
                        "idEvento" => $_POST["idEvent"],
                        "idU" => $_SESSION["idU"],
                        "cant" => $_POST["cantTk"],
                        "categoria" => $_POST["catNom"]
                    );
                    // Registrar Orden de compra
                    ModeloEventos::mdlRegistrarOc($tabla2, $datos);
                    // Disminiur disponibilidad
                    ModeloEventos::mdlActualizarDisp($tabla, $valor, $newDisp, $cat);
                } else {

                    header('Location:http://localhost/AppCultura/noDisp.php?cat='.$_POST["catNom"].'');
                }
            }
        } else {

            $rutaInicio = ControladorGeneral::ctrRutaInicio();
            echo '<script>
    window.location = "' . $rutaInicio . 'APP/login";
  </script>';
        }
    }

    /*=============================================
	Validar Disponibilidad (Antes de comprar)
==============================================*/

    static public function ctrCompDisp()
    {


        if (isset($_POST["dispb"])) {

            $disp = $_POST["dispb"];

            if ($disp <= 0) {

                header('Location:http://localhost/AppCultura/noDisp.php?cat='.$_POST["catNom"].'');
            }
        }
    }


    //     /*=============================================
    // 	Registrar orden de compra. 
    // ==============================================*/

    // static public function ctrRegistrarOrdComp(){

    //     $tabla = "ordencompra";
    //     $val = $_POST["valor"];
    //     $cant = $_POST["cantTk"];
    //     $sub = $val * $cant;

    //     $datos = array(
    //         "valor" => $sub,
    //         "idEvento" =>$_POST["idEvent"]
    //     );

    //     ModeloEventos::mdlRegistrarOc($tabla,$datos);

    // }

    /*=============================================
	Mostrar Eventos Todos Actuales
==============================================*/
    static public function ctrMostrarBoletos($item, $valor, $us)
    {
        $tabla = "ordencompra";

        if ($us == "admin") {
            $respuesta = ModeloEventos::mdlMostrarEventos($tabla, $item, $valor);
            return $respuesta;
        }
        elseif($us == "cliente"){
            $respuesta = ModeloEventos::mdlMostrarEventos2($tabla, $item, $valor);
            return $respuesta;
        }
    }

}
