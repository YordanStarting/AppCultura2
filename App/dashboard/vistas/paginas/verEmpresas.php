<?php 
if($usuario["rol"] != "admin"){
  echo '<script>
  window.location = "'.$ruta.'inicio";
  </script>';
  return;
}

$editaEmpresa = new ControladorEmpresas();
$editaEmpresa -> ctrEditarEmpresa(); 


$item = null;
$valor = null;
$empresas = ControladorEmpresas::ctrMostrarEmpresas($item, $valor);


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
                    <h3>Lista de empresas</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Lista de empresas</li>
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
            <table id="table_id" class="table table-bordered table-striped"> 
              <thead>
                <tr>  
                  <th>N°</th>
                  <th>Nit</th>
                  <th>Razon social</th>
                  <th>Representante legal</th>
                  <th>Actividad Economica</th>
                  <th>Direccion</th>
                  <th>Ciudad</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Redes Sociales</th>
                  <th>Foto</th>
                  <th>Menu</th>
                  <th>Fecha registro</th>
                  <th>Editar empresa</th>
                  <th>Crear evento</th>
                </tr>
              </thead>

              <tbody>
            <?php foreach ($empresas as $key => $value): ?>

                 <tr>
                  <td><?php echo($key+1); ?></td>
                  <td><?php echo $value["nit"]?></td> 
                  <td><?php echo $value["nombre"]?></td>
                  <td><?php echo $value["nombreRep"]?></td>
                  <td><?php echo $value["actividadEco"]?></td>
                  <td><?php echo $value["direccion"]?></td>
                  <td><?php echo $value["ciudad"]?></td>
                  <td><?php echo $value["correo"]?></td>
                  <td><?php echo $value["telefono"]?></td>
                  <td><?php echo $value["redesSociales"]?></td>
                  <td><?php echo $value["fotoEmp"]?></td>
                  <td><?php echo $value["menu"]?></td>
                  <td><?php echo $value["fechaR"]?></td>
                  <td>
                     <form method="post" action="editarEmpresa">
                      <input type="hidden" name="idEm" value="<?php echo $value["id"]; ?>">
                      <button type="submit" class="btn btn-sm btn-primary">Editar</button>
                    </form>
                  </td>
                 <td>
                    <form method="post" action="eventos">
                      <input type="hidden" name="idEmpE" value="<?php echo $value["id"]; ?>">
                      <button type="submit" class="btn btn-sm btn-primary">Crear</button>
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
