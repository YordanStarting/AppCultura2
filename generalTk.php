<?php
include "header.php";

setlocale(LC_ALL, 'es_Co');
setlocale(LC_MONETARY, 'es_Co');


$compb = new ControladorEventos();
$compb->ctrCompDisp();

$item = "id";
$valor = $_POST["idEvent"];
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

            <form method="POST" action="comprarTicketDos.php">
            <p>- <?php echo $evento["individualDesc"] ?></p>
              <p>
              <h5>
                <b>GENERAL:</b><br>
                <b> $ <?php echo $newValor1; ?></b>
                </p>
                <div class="col-sm-2">

                  <p>
                  <h5><b>Cantidad:</b>
                    <select name="cantTk" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                      <option value=1> 1 </option>
                      <option value=2> 2 </option>
                      <option value=3> 3 </option>
                      <option value=4> 4 </option>
                      <option value=5> 5 </option>
                      <option value=6> 6 </option>
                      <option value=7> 7 </option>
                      <option value=8> 8 </option>
                      <option value=9> 9 </option>
                      <option value=10> 10 </option>
                    </select>
                  </h5>
                  </p>
                </div>
                <?php
                $dip = $evento["individualDisp"];
                if ($dip > 0 && $dip < 10) {
                  echo "Solo hay " . $dip . " boletos disponibles.";
                } 
                ?>

                <br><button class="buy-tickets scrollto" type="submit">Comprar ticket</button>

                <input type="hidden" name="idEvent" value="<?php echo $evento["id"]; ?>">
                <input type="hidden" name="disp" value="<?php echo $evento["individualDisp"]; ?>">
                <input type="hidden" name="cat" value="individualDisp">
                <input type="hidden" name="valor" value="<?php echo $evento["individualValor"]; ?>">
                <input type="hidden" name="catNom" value="General">
            </form>


          </div>

          <hr>
          <br>



          <!-- </form> -->
          <br><br>
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