<?php
session_start();
$ruta = ControladorRuta::ctrRuta();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGP</title>
     <!-- Favicons -->
    <link href="favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard/vistas/assets/css/bootstrap.css">
    <link rel="stylesheet" href="dashboard/vistas/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="dashboard/vistas/assets/css/app.css">
    <link rel="stylesheet" href="dashboard/vistas/assets/css/pages/auth.css">
    <!-- SWEET ALERT 2 -->
    <!-- https://sweetalert2.github.io/ -->
    <script src="dashboard/vistas/assets/js/plugins/sweetalert2.all.js"></script>
</head>

<body>
<?php
if(isset($_GET["pagina"]))
{
	if($_GET["pagina"] == "login"  ||
	 	$_GET["pagina"] == "register" ||
      $_GET["pagina"] == "forgot-password")
            {
		      include "paginas/".$_GET["pagina"].".php";
	           }
    }else{
	include "paginas/register.php";
    }
?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<input type="hidden" value="<?php echo $ruta; ?>" id="ruta">
<script src="dashboard/vistas/assets/js/script.js"></script>
</body>
</html>