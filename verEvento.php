
<?php
  include "header.php";

  $item = "id";
  $valor = $_POST["idEvento"];
  $evento = ControladorEventos::ctrMostrarEventos($item, $valor);
 
?> 

<!-- Hola -->
  <main id="main" class="main-page">
    <!-- ======= Speaker Details Sectionn ======= -->
    <section id="speakers-details">
      <div class="container">
        <div class="section-header">
          <h2><?php echo $evento["nombreEvento"]?></h2>
          <p>Evento <?php echo $evento["tipo"]?> </p>
        </div>
       

        <div class="row">
          <div class="col-md-6">
            <img src="App/dashboard/<?php echo $evento["fotoEvento"]?>" alt="Speaker 1" class="img-fluid" width="100%" height="100%">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2><?php echo $evento["nombreEvento"]?></h2>
              <p><?php echo $evento["descripcion"]?></p>
              <br>
              <p><b>Ciudad:</b><br>
              <?php echo $evento["ciudad"]?></p>
              <p><b>Direccion:</b><br>
              <?php echo $evento["lugar"]?></p>
              <p><b>Fecha de evento:</b><br>
              <?php echo $evento["fechaEvento"]?></p>
              <p><b>Hora:</b><br>
              <?php echo $evento["hora"]?></p>
              <form method="POST" action="comprarTicket.php">
                <input type="hidden" name="idEven" value="<?php echo $evento["id"]; ?>">
                <br><button class="buy-tickets scrollto" type="submit">Continuar</button>
              </form>
              
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
