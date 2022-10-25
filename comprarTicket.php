<?php
include "header.php";

setlocale(LC_ALL, 'es_Co');
setlocale(LC_MONETARY, 'es_Co');



$item = "id";
$valor = $_POST["idEven"];
$evento = ControladorEventos::ctrMostrarEventos($item, $valor);
$fechaOrg =  $evento["fechaEvento"];
$newDate = strftime("%A, %e de %B de %Y", strtotime($fechaOrg));
$hora = $evento["hora"];
$newHora = date("h:i A", strtotime($hora));
$valor1 = $evento["individualValor"];
$newValor1 =  number_format($valor1);
$valor2 = $evento["gruposValor"];
$newValor2 =  number_format($valor2);
$valor3 = $evento["vipValor"];
$newValor3 =  number_format($valor3);


?>

<main id="main" class="main-page">

  <!-- ======= Speaker Details Sectionn ======= -->

  <section id="speakers-details">
    <div class="container">
      <div class="section-header">
        <h2><?php echo $evento["nombreEvento"] ?></h2>
        <p>Evento <?php echo $evento["tipo"] ?> </p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="App/dashboard/<?php echo $evento["fotoEvento"] ?>" alt="Speaker 1" class="img-fluid" width="100%" height="100%">
        </div>

        <div class="col-md-6">
          <div class="details">

            <h4><b><?php echo $evento["nombreEvento"] ?></b></h4>
            <h5><?php echo $newDate; ?> <br><b><?php echo $newHora; ?></b> </p>
            </h5>
            <p><?php echo $evento["lugar"] ?><br>
              <?php echo $evento["ciudad"] ?></p>

            <!-- <form method="POST"  action="comprarTicketDos.php"> -->

            <hr>
            <!-- 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="tick1" name="ticket" value="gen">
                    <label class="form-check-label" for="tick1">
                      <b>GENERAL:</b><br>
                      $ <?php echo $newValor1; ?>
                    </label> -->
            <form method="POST" action="generalTk.php">
                <b>GENERAL:</b>
              <input type="hidden" name="idEvent" value="<?php echo $evento["id"]; ?>">
              <input type="hidden" name="dispb" value="<?php echo $evento["individualDisp"]; ?>">
              <input type="hidden" name="catNom" value="General">
              <button class="buy-tickets scrollto" type="submit">  $ <?php echo $newValor1; ?> </button>
            </form>

                <hr>


                <!-- <input class="form-check-input" type="checkbox" id="tick2" name="ticket" value="gru">
                    <label class="form-check-label" for="tick2">
                      <b>GRUPOS DE 4 - 10</b><br>
                      Valor por persona:
                      </b><br>
                      $ <?php echo $newValor2; ?>
                    </label> -->

                <form method="POST" action="gruposTk.php">
                  <b> GRUPOS DE 4 A 10: </b>
                  <input type="hidden" name="idEvent" value="<?php echo $evento["id"]; ?>">
                  <input type="hidden" name="dispb" value="<?php echo $evento["gruposDisp"]; ?>">
                  <input type="hidden" name="catNom" value="Grupos">
                  <button class="buy-tickets scrollto btn-lg" type="submit"> $ <?php echo $newValor2; ?> </button>
                </form>
                

                    <hr>

                    <!--                   
                    <input class="form-check-input" type="checkbox" id="tick3" name="ticket" value="vip">
                    <label class="form-check-label" for="tick3">
                      <b>VIP DE 4 - 10</b><br>
                      Valor por persona:
                      </b><br>
                      $ <?php echo $newValor3; ?>
                    </label>
                  -->

                    <form method="POST" action="vipTk.php">
                      <b> VIP DE 4 A 10: </b>
                      <input type="hidden" name="idEvent" value="<?php echo $evento["id"]; ?>">
                      <input type="hidden" name="dispb" value="<?php echo $evento["vipDisp"]; ?>">
                      <input type="hidden" name="catNom" value="VIP">
                      <button class="buy-tickets scrollto btn-lg" type="submit">  $ <?php echo $newValor3; ?> </button>

                      <form>


          </div>

          <hr>
          <br>
          <!-- <input type="hidden" name="idEvent" value="<?php echo $evento["id"]; ?>">
          <button class="buy-tickets scrollto" type="submit">Comprar ticket</button> -->



          <br>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>
    </div>

  </section>

</main><!-- End #main -->


<?php
include "footer.php";

?>