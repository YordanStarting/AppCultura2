


<?php

  $us = $usuario["rol"];
  $nombre = $usuario["nombre"];

  if ($us == "cliente") {
    $item = 'idUsuario';
    $valor = $usuario["id"];
  }   else {
        $item = null;
        $valor = null;
  }


$boletos = ControladorEventos::ctrMostrarBoletos($item, $valor,$us);

?>

<div class="content-wrapper" style="height: 1058.31px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
          <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Lista de boletos</h3>
                    <h4><?php echo $nombre; ?></h4>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Boletos</li>
                            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
          </div>


      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12 col-lg-12">          
        <div class="card sobraCrearLink">        
          <div class="card-body">
            <div class="table-responsive">
             <table id="table_id" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Evento</th>
                  <th>Categoria</th>
                  <th>Cantidad</th>
                  <th>Total</th>
                  <th>Metodo de pago</th>
                  <th>Fecha de registro</th>
                </tr>
              </thead>
              <tbody>
                
         
           <?php foreach ($boletos as $key => $value): ?>
                 <tr>
                  <th><?php echo($key+1); ?></th>               
                  <td><?php echo $value["idEvento"]?></td>
                  <td><?php echo $value["categoria"]?></td>
                  <td><?php echo $value["cantidad"]?></td>
                  <td><?php echo $value["valor"]?></td>
                  <td><?php echo $value["metodoPago"]?></td>
                  <td><?php echo $value["fechaR"]?></td>
                </tr>
              <?php endforeach ?>         
              </tbody>  
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
     
  </section>
  <!-- /.content -->
</div>

