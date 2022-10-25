<div class="page-content">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4>Gestión de información eventos </h4>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <br>
    <section id="venue">
        <div class="container-fluid">
            <center>
                <div class="card">
                    <div class="row g-5 gy-5">
                        <?php
                        $us = $usuario["rol"];
                        if($us == "admin"){

                        $item = null;
                        $valor = null;
                        $eventos = ControladorEventos::ctrMostrarEventosInd($item, $valor);

                        foreach ($eventos as $key => $value) {
                            
                        ?>
                            <div class="col-6">
                                <div class="card" style="width: 28rem;">
                                    <img src="<?php echo $value["fotoEvento"] ?>" class="card-img-top" alt="..." width="100" height="250">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $value["nombreEvento"] ?></h5>
                                        <p class="card-text"><?php echo $value["descripcion"] ?></p>
                                        <p><b>Lugar: </b><?php echo $value["ciudad"]?> - <?php echo $value["lugar"]?> <br>
                                        <b>Fecha de evento: </b><?php echo $value["fechaEvento"]?> / <?php echo $value["hora"]; ?> 
                                    
                                    </p>
                                        <form method="post" action="editarEvento">
                                            <input type="hidden" name="idEv" value="<?php echo $value["id"]; ?>">
                                            <center> <button type="submit" class="btn btn-sm btn-danger"> Ir a evento</button>
                                            </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } } ?>
                        <h1>MOSTRAR BOLETOS DEL CLIENTE.</h1>
                    </div>
                </div>
            </center>
        </div>
    </section>
</div>