<?php

include "header.php";

?>


<main id="main" class="main-page">


    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Eventos Cali</h2>
          <p>Ven y asiste a los mejores eventos de Cali</p>
        </div>

        <div class="row g-4 gy-5">

          <?php

          $item = null;
          $valor = null;
          $eventos = ControladorEventos::ctrMostrarEventosAll($item, $valor);
  
          foreach ($eventos as $key => $value) {

          ?>
            <div class="col-md-4">
              <div class="card" style="width: 28rem;">
                <img src="App/dashboard/<?php echo $value["fotoEvento"] ?>" class="card-img-top" alt="..." width="100" height="250">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $value["nombreEvento"] ?></h5>
                  <p class="card-text"><?php echo $value["descripcion"] ?></p>
                  <form method="post" action="verEvento.php">
                    <input type="hidden" name="idEvento" value="<?php echo $value["id"]; ?>">
                    <button type="submit" class="btn btn-sm btn-danger">Ver evento</button>   
                  </form>
                </div>
              </div>
            </div>

          <?php  
            }
          ?>

        </div>

      </div>

    </section><!-- End Venue Section -->

</main>
<br><br><br>

<?php

include "footer.php";

?>