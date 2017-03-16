<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <?php include('imports.php');?>
    </head>
    <body>
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>

            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                
                            <?php include('menu.php');?>
                           

                <!-- Main Container -->
                <div id="main-container">
                    <header class="navbar navbar-default">
                        <ul class="nav navbar-nav-custom">
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Quick Stats -->
                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" onclick="$('#modal-insertar').modal('show');" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Añadir nueva</strong> Asignatura</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-danger">
                                        <h4 class="widget-content-light"><strong>Numero de</strong> asignaturas</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-danger animation-expandOpen"><?php echo $this->db->count_all_results('Asignaturas'); ?></span></div>
                                </a>
                            </div>
                           
                           
                        </div>
                        <!-- END Quick Stats -->

                        <!-- All Products Block -->
                        <div class="block full">
                            <!-- All Products Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                </div>
                                <h2><strong>Asignaturas</strong></h2>
                            </div>
                            <!-- END All Products Title -->

                            <!-- All Products Content -->
                            <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 70px;">ID</th>
                                        <th class="text-center" >Nombre</th>
                                        <th class="text-center">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data as $listarasignaturas){ ?>
                                    <tr>
                                        <td class="text-center"><strong><?php echo $listarasignaturas['id_asignatura']; ?></strong></td>
                                        <td class="text-center"><?php echo $listarasignaturas['Asignatura']; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url()?>index.php/asignaturas/actualizarAsignatura/<?php echo $listarasignaturas['id_asignatura']; ?>"><button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button></a>
                                            
                                            <button class="btn btn-sm btn-default" onclick="$('#modal-agrupar').modal('show'); editar(<?php echo $listarasignaturas['id_asignatura']; ?>);"><i class="fa fa-wrench"></i></button>
                                          
<<<<<<< HEAD
                                            <a href="<?php echo base_url()?>index.php/tareas/upload/DoUpload/<?php echo $listarasignaturas['id_asignatura']; ?>"><button class="btn btn-sm btn-info"><i class="fa fa-upload"></i></button></a>

=======
											<!--  <a href="<?php echo base_url()?>index.php/tareas/upload/DoUpload/<?php echo $listarasignaturas['id_asignatura']; ?>"><button class="btn btn-sm btn-info"><i class="fa fa-upload"></i></button></a> -->
                                            <a href="<?php echo base_url()?>index.php/asignaturas/tareas/<?php echo $listarasignaturas['id_asignatura']; ?>"><button class="btn btn-sm btn-info"><i class="fa fa-upload"></i></button></a>
>>>>>>> daa7b536c5ea5869ad7cab95e33a7b89171e9a0f
                                            <a href="<?php echo base_url()?>index.php/asignaturas/eliminarAsignaturas/<?php echo $listarasignaturas['id_asignatura']; ?>"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></a>
                                        </td>
                                    </tr>
                                <?php } // Cerramos foreach ?>  
                                </tbody>
                            </table>
                            <!-- END All Products Content -->
                        </div>
                        <!-- END All Products Block -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.6</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->

                    
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- Modal para insertar datos  -->
       <div id="modal-insertar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Crear Asignatura</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="asignaturas/insertarAsignaturas" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            <fieldset>
                                <legend></legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Asignatura">Asignatura<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input type="text" id="Asignatura" name="Asignatura" class="form-control" placeholder="Introduce una asignatura">
                                                
                                            </div>
                                        </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Aceptar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                    
                    
                </div>
            </div>
        </div>
        <!-- END del Modal para insertar -->
         <div id="modal-agrupar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i>Insertar alumnos</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="asignaturas/insertarAAsigntauras" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            <fieldset>
                                <div class="form-group">
                                                <input type = "hidden" name = "valor_id" id="valor_id"/>
                                                <label class="col-md-4 control-label" for="a-alumnos">Insertar alumnos</label>
                                                <div class="col-md-6">
                                                    <select id="a-alumnos" name="a-alumnos[]" class="select-chosen" data-placeholder="Selecciona los usuarios" style="width: 250px;" multiple>
                                                    <?php foreach($usuario as $llistarusuarios){ ?>
                                                        <option value="<?php echo $llistarusuarios['id_usuario']; ?>"><?php echo $llistarusuarios['Nombre']; ?> <?php echo $llistarusuarios['Apellidos']; ?></option>

                                                   <?php } ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Aceptar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                    
                    
                </div>
            </div>
        </div>

       
    </body>

    <script type="text/javascript" language="javascript">
            function editar(id) {
             document.getElementById("valor_id").value = id;
            }
        </script>
</html>
