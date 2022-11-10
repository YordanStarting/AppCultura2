<?php
$item = "id";
$valor = $_POST['idEv'];
$verEventos = ControladorEventos::ctrMostrarEventoID($item, $valor);
?>


<div class="page-content">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Editar evento </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Editar evento</li>
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section>

        <div class="col-8">
            <div class="card sobraCrearLink">
                <div class="card-body">
                  <h5>Foto de evento</h5>
                    <div class="card-body">
                        <div class="centrar">
                        <div class="Avatar">
                            <img src="<?php echo $verEventos["fotoEvento"]; ?>" style="border-radius: 5%">
                        </div>
                        <br>
                        
                        <a href="javascript:void(0);" class="botonCamara" ata-bs-toggle="tooltip" title="Cambiar foto de perfil" data-bs-toggle="modal" data-bs-target="#modal" onclick="carga_ajax('perfil', '<?php echo $usuario["id"]; ?>', 'modal','vistas/paginas/modalFoto.php');">
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modal">
                                <b>Cambiar foto</b>
                        </button></a>
                        </div>
                        <!-- <div class="form-group position-relative has-icon-left">
                                <input type="file" class="form-control form-control-md" name="#">
                                <div class="form-control-icon">
                                    <i class="bi bi-tag"></i>
                                </div>
                            </div>  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row">
        <div class="col-8 col-lg-8">

            <div class="row">
                <div class="col-12">
                    <div class="card sobraCrearLink">
                        <div class="card-body">
                            <strong> </strong>

                            <form method="post" action="verEventos">
                                <input type="hidden" name="idEv" value="<?php echo $verEventos["id"]; ?>">
                                <div class="col-6">
                                    <div class="row">
                                        <p>
                                        <div class="col-md-12">

                                            <strong>Nombre del evento:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEventos["nombreEvento"]; ?>" class="form-control form-control-xl" name="nombreEv" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <!-- Campo para area de descripcion -->

                                            <strong>Descripción:</strong>
                                            <textarea name="descEv" class="form-control" rows="3" cols="10"><?php echo $verEventos["descripcion"]; ?></textarea>
                                            <br>

                                            <strong>Dirección:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEventos["lugar"]; ?>" class="form-control form-control-xl" name="direccionEv" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Ciudad:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEventos["ciudad"]; ?>" class="form-control form-control-xl" name="ciudadEv" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>


                                            <strong>Tipo:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEventos["tipo"]; ?>" class="form-control form-control-xl" name="tipoEv" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Fecha:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="date" value="<?php echo $verEventos["fechaEvento"]; ?>" class="form-control form-control-xl" name="fechaEv" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Hora:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="time" value="<?php echo $verEventos["hora"]; ?>" class="form-control form-control-xl" name="horaEv" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div><br><br>


                                            <strong>Cantidad - General:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="number" value="<?php echo $verEventos["individualCant"]; ?>" class="form-control form-control-xl" name="indCant" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>
                                            <strong>Valor:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="number" value="<?php echo $verEventos["individualValor"]; ?>" class="form-control form-control-xl" name="indVal" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Descripción General:</strong>
                                            <textarea name="indDesc" class="form-control" rows="3" cols="10"><?php echo $verEventos["individualDesc"]; ?></textarea>
                                            <br> <br>

                                            <strong>Cantidad - Grupos:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="number" value="<?php echo $verEventos["gruposCant"]; ?>" class="form-control form-control-xl" name="grupoCant" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>
                                            <strong>Valor:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="number" value="<?php echo $verEventos["gruposValor"]; ?>" class="form-control form-control-xl" name="grupoVal" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>
                                            <strong>Descripción Grupos:</strong>
                                            <textarea name="grupoDes" class="form-control" rows="3" cols="10"><?php echo $verEventos["gruposDesc"]; ?></textarea>
                                            <br> <br>

                                            <strong>Cantidad - VIP:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="number" value="<?php echo $verEventos["vipCant"]; ?>" class="form-control form-control-xl" name="vipCant" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>
                                            <strong>Valor:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="number" value="<?php echo $verEventos["vipValor"]; ?>" class="form-control form-control-xl" name="vipVal" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Descripción VIP:</strong>
                                            <textarea name="vipDes" class="form-control" rows="3" cols="10"><?php echo $verEventos["vipDesc"]; ?></textarea>
                                            <br> <br>

                                            <strong>Empresa:</strong>
                                            <div>
                                                <label>
                                                    <?php echo $verEventos["nit"]; ?>
                                                </label>
                                            </div><br>
                                            </p>

                                            <p>
                                                <input type="submit" id="submit" class="btn btn-primary btn-lg shadow-lg mt-3 auth-colorBtn" value="Editar evento">
                                            </p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

    </section>