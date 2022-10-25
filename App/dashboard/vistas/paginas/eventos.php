<div class="page-content">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Eventos </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Eventos</li>
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="row">

        <?php
        $item = "id";
        $valor = $_POST["idEmpE"];
        $verEmp = ControladorEmpresas::ctrMostrarEmpresaID($item, $valor);

        ?>
        <div class="col-12 col-lg-12">

            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <strong>Crear Evento </strong>
                            </p>
                        <div class="col-md-10">
                            
                            <form method="post" action="verEventos">
                                <input type="hidden" name="idEmp" value="<?php echo $verEmp["id"]; ?>">
                                <input type="hidden" name="nitEmp" value="<?php echo $verEmp["nit"]; ?>">
                            
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Nombre evento: </span>
                                    <input type="text" name="nombreE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Descripción: </span>
                                    <textarea name="descE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required=""></textarea>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Dirección: </span>
                                    <input type="text" name="lugarE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Ciudad: </span>
                                    <input type="text" name="ciudadE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Tipo de evento: </span>
                                    &nbsp; &nbsp;
                                    <select name="tipoE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                        <option value="Deportivo">Deportivo</option>
                                        <option value="Cultural">Cultural</option>
                                        <option value="Gastronomico">Gastronomico</option>
                                    </select>

                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Fecha evento: </span>
                                    <input type="date" name="fechaE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Hora evento: </span>
                                    <input type="time" name="horaE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div><br>
                                <p class="card-text"><b>INDIVIDUAL</b></p>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Cantidad ticket: </span>
                                    <input type="number" name="indCant" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Valor: </span>
                                    <input type="number" name="indVal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Descripción: </span>
                                    <textarea name="indDesc" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required=""></textarea>
                                </div><br>
                                <p class="card-text"><b>GRUPOS</b></p>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Cantidad ticket: </span>
                                    <input type="number" name="gruposCant" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Valor: </span>
                                    <input type="number" name="gruposVal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Descripción: </span>
                                    <textarea name="gruposDesc" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required=""></textarea>
                                </div><br>
                                <p class="card-text"><b>VIP</b></p>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Cantidad ticket: </span>
                                    <input type="number" name="vipCant" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Valor: </span>
                                    <input type="number" name="vipVal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Descripción: </span>
                                    <textarea name="vipDesc" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required=""></textarea>
                                </div><br><br>

                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Foto:</span> &nbsp; &nbsp;
                                    <input type="file" name="fotoEve" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Empresa:</span>
                                    &nbsp; &nbsp; <label> <?php echo $verEmp["nombre"]; ?></label>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text btn-outline" id="inputGroup-sizing-default">Nit:</span>
                                    &nbsp; &nbsp;<label> <?php echo $verEmp["nit"]; ?> </label>
                                </div>


                                <center>
                                    <button type="submit" class="btn btn-outline-info btn-lg">Crear Evento</button>
                                    <center>
                            </form>
                        </div>
                            <div class="btn-group btn-group">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>