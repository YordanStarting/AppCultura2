
<?php

  include "header.php";

  

  $compDisp = new ControladorEventos();
  $compDisp -> ctrComprarTicketDisp();

  
  // $item = "id";
  // $valor = $_POST["idEvent"];
  // $evento = ControladorEventos::ctrMostrarEventos($item, $valor);    

  // $comprarDos = new ControladorEventos();
  // $comprarDos -> ctrComprarTicketDos();


?>  

  <main id="main" class="main-page">

    <!-- ======= Speaker Details Sectionn ======= -->
    <section id="speakers-details">
      <div class="container">
        <div class="section-header">
          <!-- <h2><?php echo $evento["nombreEvento"]?></h2>
          <p>Evento <?php echo $evento["tipo"]?> </p> -->
        </div>


          <center>
          <div class="col-md-6">
            <div class="details">
              <!-- <h2><?php echo $evento["nombreEvento"]; echo $cat;?></h2> -->
              <h1> ¡Su compra fue realizada con exito! </h1> 
              <br>
            
          </div>

        </div>
          </center>
      </div>

    </section>

  </main><!-- End #main -->

<?php
  include "footer.php";
  
?>
