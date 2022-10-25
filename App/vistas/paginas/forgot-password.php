
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="#"><img src="dashboard/vistas/assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Recuperar contraseña</h1>
                    <p class="auth-subtitle mb-5">Ingrese su correo electrónico y le enviaremos un enlace para restablecer la contraseña.</p>

                    <form action="index.html">
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="email" class="form-control form-control-xl" placeholder="e-Mail">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3 auth-colorBtn">Recuperar contraseña</button>
                    </form>
                    <div class="text-center mt-3 text-lg fs-5">
                        <p class='text-gray-600'>¿Recuerdas tu cuenta? <a href="<?php echo $ruta; ?>login" class="font-bold">Entrar</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>