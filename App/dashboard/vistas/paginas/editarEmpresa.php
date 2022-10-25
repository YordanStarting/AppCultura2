<div class="page-content">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Editar empresa </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Editar empresa</li>
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="row">
        <div class="col-8 col-lg-8">

            <div class="row">
                <div class="col-12">
                    <div class="card sobraCrearLink">
                        <div class="card-body">
                            <strong> </strong>
                            <?php
                            $item = "id";
                            $valor = $_POST['idEm'];
                            $verEmpresas = ControladorEmpresas::ctrMostrarEmpresaID($item, $valor);
                            ?>
                            <form method="post" action="verEmpresas">
                                <input type="hidden" name="idEm" value="<?php echo $verEmpresas["id"]; ?>">

                                <div class="col-6">
                                    <div class="row">
                                        <p>
                                        <div class="col-md-12">
                                            <strong>Nit de la empresa: </strong>
                                            <div>
                                                <label>
                                                    <?php echo $verEmpresas["nit"]; ?>
                                                </label>
                                            </div>
                                            </p>

                                            <strong>Nombre de la empresa:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEmpresas["nombre"]; ?>" class="form-control form-control-xl" name="nombreE" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Actividad economica:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEmpresas["actividadEco"]; ?>" class="form-control form-control-xl" name="actividadE" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Representante legal:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEmpresas["nombreRep"]; ?>" class="form-control form-control-xl" name="nombreR" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Dirección:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEmpresas["direccion"]; ?>" class="form-control form-control-xl" name="direccionE" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Ciudad:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEmpresas["ciudad"]; ?>" class="form-control form-control-xl" name="ciudadE" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Correo:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEmpresas["correo"]; ?>" class="form-control form-control-xl" name="correoE" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Telefono:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEmpresas["telefono"]; ?>" class="form-control form-control-xl" name="telefonoE" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Redes sociales:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" value="<?php echo $verEmpresas["redesSociales"]; ?>" class="form-control form-control-xl" name="redesE" required="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Foto empresa:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="file" class="form-control form-control-md" name="fotoE">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <strong>Menu empresa:</strong>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="file" class="form-control form-control-md" name="menuE">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>

                                            <input type="submit" id="submit" class="btn btn-primary btn-lg shadow-lg mt-3 auth-colorBtn" value="Editar Empresa">


                                        </div>
                                    </div>
                                </div>
                                <p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


    </section>
</div>