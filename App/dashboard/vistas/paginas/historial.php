<div class="page-content">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Historial </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Historial</li>
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
                    <div class="card sobraCrearLink">
                        <div class="card-body">
                            <strong> </strong>


                            <?php
                            //$hash = $_POST['passRegistro'];

                            $pass = "123456"; //password que viene del formulario
                            $hashPassword = password_hash($pass, PASSWORD_DEFAULT); //password encriptado

                            if (password_verify($pass, $hashPassword)) // se compara el password encriptado que biene de la base de datos
                            //  con el que viene del formulario
                            {
                                echo "<p>";
                                echo $pass;
                                echo "</p>";
                                echo "<p>";
                                echo 'Password is valido';
                                echo "</p>";
                                echo "<p>";
                                echo $hashPassword;
                                echo "</p>";
                            } else {
                                echo 'Password is not valido!';
                            }

                            ?>




                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-lg-4">
                    <div class="card sobraCrearLink">
                        <div class="card-body">
                            <div class="centrarAvatar">
                                <div class="avatar avatar-xl me-3">

                                </div>


                            </div>

                        </div>
                        <div class="centrar">




                        </div>

                        <div class="my-4">

                        </div>



                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-8">

                <div class="card sobraCrearLink">

                    <div class="card-header">
                        <form method="post">
                            <div class="buttons">

                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        ddd
                    </div>
                </div>
            </div>


        </div>
    </section>
</div>