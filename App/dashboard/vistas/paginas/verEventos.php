<?php 
if($usuario["rol"] != "admin"){
  echo '<script>
  window.location = "'.$ruta.'inicio";
  </script>';
  return;
}

$editaEvento = new ControladorEventos();
$editaEvento -> ctrEditarEvento(); 

$item = null;
$valor = null;
$eventos = ControladorEventos::ctrMostrarEventos($item, $valor);

$eventosR = new ControladorEventos();
$eventosR -> ctrRegistrarEvento();

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
                    <h3>Lista de eventos</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Eventos</li>
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
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Direccion</th>
                  <th>Ciudad</th>
                  <th>Tipo</th>
                  <th>Fecha evento</th>
                  <th>Hora</th>
                  <th>Cantidad Individual</th>
                  <th>Valor</th>
                  <th>Descripcion General</th>
                  <th>Cantidad Grupos</th>
                  <th>Valor</th>
                  <th>Descripcion Grupos</th>
                  <th>Cantidad VIP</th>
                  <th>Valor</th>
                  <th>Descripcion VIP</th>
                  <th>Fecha registro</th>
                  <th>Empresa</th>
                  <th>Foto</th>
                </tr>
              </thead>
              <tbody>
            <?php foreach ($eventos as $key => $value): ?>

                 <tr>
                  <td><?php echo($key+1); ?></td>
                  <td><?php echo $value["nombreEvento"]?></td> 
                  <td><?php echo $value["descripcion"]?></td> 
                  <td><?php echo $value["lugar"]?></td>
                  <td><?php echo $value["ciudad"]?></td>
                  <td><?php echo $value["tipo"]?></td>
                  <td><?php echo $value["fechaEvento"]?></td>
                  <td><?php echo $value["hora"]?></td>
                  <td><?php echo $value["individualCant"]?></td>
                  <td><?php echo $value["individualValor"]?></td>
                  <td><?php echo $value["individualDesc"]?></td>
                  <td><?php echo $value["gruposCant"]?></td>
                  <td><?php echo $value["gruposValor"]?></td>
                  <td><?php echo $value["gruposDesc"]?></td>
                  <td><?php echo $value["vipCant"]?></td>
                  <td><?php echo $value["vipValor"]?></td> 
                  <td><?php echo $value["vipDesc"]?></td> 
                  <td><?php echo $value["fechaR"]?></td>
                  <td><?php echo $value["nit"]?></td>
                  <td> <a href=""> <img src="<?php echo $value["fotoEvento"]?>" class="img-fluid me-3" width="150px"> </a></td>
                  <td>
                     <form method="post" action="editarEvento">
                      <input type="hidden" name="idEv" value="<?php echo $value["id"]; ?>">
                      <button type="submit" class="btn btn-sm btn-primary">Editar</button>
                    </form>
                  </td>
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

