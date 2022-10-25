
<div id="sidebar" class="active" >
            <div class="sidebar-wrapper active" style="background-color:#2C2C2C;">
                <div class="sidebar-header" style="background-color:#2C2C2C;">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="inicio"><strong><span class="logoUno">P</span><span class="logoDos">ARLO</span></strong></a>
                            <!--  <a href="inicio"><img src="vistas/assets/images/logo/logo-Energine-Automation-VBA.png" alt="Logo" srcset=""></a> -->
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title" style="color:#FFFFFF;">Menu</li>

                        <?php if($usuario["rol"] == "admin") { ?>
                        <li class="sidebar-item">
                            <a href="inicio" class='sidebar-link'>
                                <i class="bi bi-house"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="historial" class='sidebar-link'>
                                <i class="bi bi-folder-symlink"></i>
                                <span>Historial</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="boletos" class='sidebar-link'>
                                <i class="bi bi-person-circle"></i>
                                <span>Boletos</span>
                            </a>
                        </li>                            
                        <li class="sidebar-item">
                            <a href="verEventos" class='sidebar-link'>
                                <i class="bi bi-calendar-event"></i>
                                <span>Eventos</span>
                            </a>
                        </li>                       
                        <li class="sidebar-item">
                            <a href="empresas" class='sidebar-link'>
                                <i class="bi bi-building"></i>
                                <span>Registrar empresa</span>
                            </a>
                        </li>                                      
                        <li class="sidebar-item">
                            <a href="verEmpresas" class='sidebar-link'>
                                <i class="bi bi-list-check"></i>
                                <span>Ver empresas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="perfil" class='sidebar-link'>
                                <i class="bi bi-person-circle"></i>
                                <span>Perfil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="usuarios" class='sidebar-link'>
                                <i class="bi bi-person-plus-fill"></i>
                                <span>Usuarios</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a href="salir" class='sidebar-link'>
                                <i class="bi bi-door-closed"></i>
                                <span>Salir</span>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if($usuario["rol"] == "cliente") { ?>
                            <li class="sidebar-item">
                            <a href="inicio" class='sidebar-link'>
                                <i class="bi bi-house"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="boletos" class='sidebar-link'>
                                <i class="bi bi-person-circle"></i>
                                <span>Boletos</span>
                            </a>
                        </li> 
                        <li class="sidebar-item">
                            <a href="perfil" class='sidebar-link'>
                                <i class="bi bi-person-circle"></i>
                                <span>Perfil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="salir" class='sidebar-link'>
                                <i class="bi bi-door-closed"></i>
                                <span>Salir</span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>