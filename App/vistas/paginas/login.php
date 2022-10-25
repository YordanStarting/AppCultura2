    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="#"><img src="dashboard/vistas/assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h4 class="auth-title">Ingresar</h4>

                    <form method="post">
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="email" class="form-control form-control-xl" name="emailIngreso" placeholder="e-Mail" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="password" class="form-control form-control-xl" name="passIngreso" placeholder="Contraseña" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>" name="navegadorU">
                        <input type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" name="ipU">
                        
                        <?php
                            $ingreso = new ControladorUsuarios();
                            $ingreso -> ctrIngresoUsuario();
                        ?>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3 auth-colorBtn">Entrar</button>
                    </form>
                    <div class="text-center mt-3 text-lg fs-5">
                        <p class="text-gray-600">¿Aún no tienes una cuenta? <a href="<?php echo $ruta; ?>register" class="font-bold">Crear cuenta</a>.</p>
                        <p><a class="font-bold" href="<?php echo $ruta; ?>forgot-password">Recuperar contraseña</a>.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
