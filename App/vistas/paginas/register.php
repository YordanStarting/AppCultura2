
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="#"><img src="dashboard/vistas/assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Crear cuenta</h1>
                    
                        <form method="post" onsubmit="return validarPoliticas()"> 
                            <input type="hidden" value="clienteRegistro" name="usuarioRegistro">
        
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="email" class="form-control form-control-xl" name="emailRegistro"placeholder="e-Mail" required="">
                           <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="text" class="form-control form-control-xl" name="nombreRegistro" placeholder="Nombre" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="password" class="form-control form-control-xl" name="passRegistro" placeholder="Contraseña" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input type="checkbox" id="politicas" class="form-check-input me-2">
                            <label class="form-check-label text-gray-600" for="politicas">
                                Aceptar las<a href="#"> políticas de privacidad </a>
                            </label>
                            <span></span>
                        </div>
                        
                        
                        <?php
                            $registro = new ControladorUsuarios();
                            $registro -> ctrRegistroUsuario();
                        ?>
                        
                        <input type="submit" id="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-3 auth-colorBtn" value="Crear Cuenta">
                    </form>
                    <div class="text-center mt-3 text-lg fs-5">
                        <p class='text-gray-600'>¿Ya tienes una cuenta? <a href="<?php echo $ruta; ?>login"
                                class="font-bold">Entrar</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
