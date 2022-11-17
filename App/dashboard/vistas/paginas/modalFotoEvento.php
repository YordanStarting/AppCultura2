<div class="modal-dialog" role="document">
    <div class="modal-content">
         <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel1">Editar foto de evento</h5>
              <button type="button" class="close rounded-pill"
                  data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x"></i>
              </button>
          </div>
            <div class="modal-body">

            <div class="card sobraCrearLink">
                <div class="card-body"> 
                     <form method="post" enctype="multipart/form-data" action="editarEvento">
                            <div class="mb-3">
                                <label for="formFile" class="form-label"><b>Subir foto</b></label>
                                <input class="form-control" type="file" id="formFile" name="nuevaImagen" required="">
                            </div>
                            <input type="hidden" value="<?php echo $_POST["id2"]; ?>" name="idEventoImagen"/>
                            <input type="hidden" name="pagina" value="<?php echo $_POST["id"]; ?>">
                            <input type="hidden" name="idEv" value="<?php echo $_POST["id2"]; ?>">
                           
                        </P>
                           
                            <input type="submit" class="btn btn-block btn-outline-info btn-lg" value="Editar foto">
                      </form>
                     
                </div>
            </div>

            </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-outline-info ml-1" data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Cerrar</span>
            </button>                                
          </div>  
                                        
    </div>
                                   
</div>  