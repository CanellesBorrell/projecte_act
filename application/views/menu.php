                    <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="index.html" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Pro</strong>UI</span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="page_ready_user_profile.html">
                                        <img src="<?php echo base_url();?>assets/img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name"><?php echo $sesio['Nombre'];?> <?echo $sesio['Apellidos'];?></div>
                                <div class="sidebar-user-links">
                                 <!-- Enllaç a usuari  -->   <a href="<?php echo base_url();?>index.php/perfil" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <a href="<?php echo base_url();?>index.php/logout" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/Principal/index" class=" active"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Panel de control</span></a>
                                </li>
                               
                               <?php if ($sesio['id_rol'] !=4){ ?>
                                <li class="sidebar-header">
                                   
                                    <span class="sidebar-header-title">Gestión de usuarios</span>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/usuarios/insertarUsuarios"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Insertar usuarios</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/usuarios"><i class="gi gi-share_alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Listado de usuarios</span></a>
                                </li>
								<?php } ?>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-title">Escuela</span>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url();?>index.php/grupos"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Gestión de Grupos</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/asignaturas"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Gestión de Asignaturas</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Gestión de Tareas</span></a>
                                </li>
                                 <li>
                                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Gestión de Foros</span></a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url();?>index.php/grupos/index_front"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Grupos</span></a>
                                </li>
                                
                                <li class="sidebar-header">
                                    <span class="sidebar-header-title">Comunicación</span>
                                </li>
                               <li>
                                    <a href="<?php echo base_url();?>index.php/foros"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Foro</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Mensajeria</span></a>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-title">Administrar</span>
                                </li>
                               <li>
                                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Escuelas</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">CD-Keys</span></a>
                                </li>
                            </ul>
                             </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>  
