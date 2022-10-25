<div class="page-content">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Empresa</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Empresa</li>
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="row">
        <div class="col-12 col-lg-12">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <strong>Crear Empresa</strong>
                            </p>
                            <form method="post">
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Nit:</span>
                                    <input type="text" name="nit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Nombre o razon social:</span>
                                    <input type="text" name="nombreEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Nombre representante:</span>
                                    <input type="text" name="nombreRep" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Actividad economica:</span>
                                    <input type="text" name="actividadEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Direccion: </span>
                                    <input type="text" name="direccionEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Ciudad: </span>
                                    <input type="text" name="ciudadEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Correo: </span>
                                    <input type="email" name="correoEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Telefono:</span>
                                    <input type="text" name="telefonoEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Redes sociales:</span>
                                    <input type="text" name="redesEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Foto:</span> &nbsp; &nbsp;
                                    <input type="file" name="fotoEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Menu:</span>&nbsp; &nbsp;
                                    <input type="file" name="menuEmp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>



                                <center>
                                    <button type="submit" class="btn btn-outline-info btn-lg">Crear Empresa</button>
                                    <center>
                            </form>


                            <?php
                            $empresas = new ControladorEmpresas();
                            $empresas->ctrRegistrarEmpresa();
                            ?>

                            <div class="btn-group btn-group">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>