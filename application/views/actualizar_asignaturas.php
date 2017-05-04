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

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <?php include('imports.php');?>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
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
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
            -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                
                <!-- END Main Sidebar -->
                <?php include('menu.php');?>
                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Search Results Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="gi gi-search"></i>Search Results<br><small>UI for Projects, Images, Users and Classic search results!</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Pages</li>
                            <li><a href="">Search Results</a></li>
                        </ul>
                        <!-- END Search Results Header -->

                        <!-- Search Styles Block -->
                        <div class="block">
                            <!-- Search Styles Title -->
                            <div class="block-title">
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li class="active"><a href="#informacion">Información</a></li>
                                    <li><a href="#foro">Foro</a></li>
                                    <li><a href="#tareas">Tareas</a></li>
                                </ul>
                            </div>
                            <!-- END Search Styles Title -->

                            <!-- Search Styles Content -->
                            <div class="tab-content">
                                <!-- Projects Search -->
                                <div class="tab-pane active" id="informacion">
                                 <form id="form-validation" action="insertarUsuarios" method="post" class="form-horizontal form-bordered">
                                        <fieldset>
                                            <legend><i class="fa fa-angle-right"></i>Modificar Asignatura</legend>
                                             <div class="form-group">
                                                <label class="col-md-4 control-label" for="Email">Asignatura <span class="text-danger">*</span></label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="text" id="Email" name="Email" class="form-control" placeholder="Introduce un correo electronico">
                                                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Contraseña">Contraseña <span class="text-danger">*</span></label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="password" id="Contraseña" name="Contraseña" class="form-control" placeholder="Contraseña">
                                                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="confirma_contraseña">Confirmar la contraseña <span class="text-danger">*</span></label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="password" id="confirma_contraseña" name="confirma_contraseña" class="form-control" placeholder="Confirma la Contraseña">
                                                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                <label class="col-md-4 control-label" for="example-chosen">Asigna un profesor<span class="text-danger">*</span></label>
                                                <div class="col-md-6">
                                                    <select id="Rol" name="Rol" class="select-chosen" data-placeholder="Elige un rol" style="width: 250px;">
                                                        <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                         <?php foreach($profesores as $listarprofesores){ ?>
                                                        <option value="<?php echo $listarprofesores['id_usuario']; ?>"><?php echo $listarprofesores['Email']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                             
                                        
                                         <div class="form-group form-actions">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-arrow-right"></i> Aceptar</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Vaciar</button>
                                            </div>
                                        </div>
                                        </form>
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
                                <?php foreach($data as $listarusuarios){ ?>
                                    <tr>
                                        <td class="text-center"><strong><?php echo $listarusuarios['id_Usuarios_Asignaturas']; ?></strong></td>
                                        <td class="text-center"><?php echo $listarusuarios['Email']; ?></td>
                                       
                                        <td class="text-center">
                                            <button onclick="$('#modal-user-settings').modal('show');" data-toggle="tooltip" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                <?php } // Cerramos foreach ?>  
                                </tbody>
                            </table>
                            <!-- END All Products Content -->
                        </div>
                                 
                                </div>
                                <!-- END Projects Search -->

                                <!-- Images Search -->
                                <div class="tab-pane" id="foro">
                                    <!-- Search Info - Pagination -->
                                    <div class="block-section clearfix">
                                        <ul class="pagination remove-margin pull-right">
                                            <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                        <ul class="pagination remove-margin">
                                            <li class="active"><span><strong>28</strong> Results</span></li>
                                        </ul>
                                    </div>
                                    <!-- END Search Info - Pagination -->

                                    <!-- Images Results -->
                                    <div class="gallery" data-toggle="lightbox-gallery">
                                        <div class="row">
                                            <div class="col-sm-3 gallery-image">
                                                <img src="img/placeholders/photos/photo15.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo15.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 gallery-image">
                                                <img src="img/placeholders/photos/photo10.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo10.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 gallery-image">
                                                <img src="img/placeholders/photos/photo11.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo11.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 gallery-image">
                                                <img src="img/placeholders/photos/photo12.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo12.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 gallery-image">
                                                <img src="img/placeholders/photos/photo13.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo13.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 gallery-image">
                                                <img src="img/placeholders/photos/photo14.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo14.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 gallery-image">
                                                <img src="img/placeholders/photos/photo15.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo15.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 gallery-image">
                                                <img src="img/placeholders/photos/photo5.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo5.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 gallery-image">
                                                <img src="img/placeholders/photos/photo16.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo16.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 gallery-image">
                                                <img src="img/placeholders/photos/photo17.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo17.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 gallery-image">
                                                <img src="img/placeholders/photos/photo18.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo18.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 gallery-image">
                                                <img src="img/placeholders/photos/photo22.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo22.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 gallery-image">
                                                <img src="img/placeholders/photos/photo3.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo3.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 gallery-image">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="image">
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="img/placeholders/photos/photo1.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Images Results -->

                                    <!-- Bottom Navigation -->
                                    <div class="block-section text-right">
                                        <ul class="pagination remove-margin">
                                            <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END Bottom Navigation -->
                                </div>
                                <!-- END Images Search -->

                                <!-- Users Search -->
                                <div class="tab-pane" id="tareas">
                                    <!-- Search Info - Pagination -->
                                    <div class="block-section clearfix">
                                        <ul class="pagination remove-margin pull-right">
                                            <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                        <ul class="pagination remove-margin">
                                            <li class="active"><span><strong>30</strong> Results</span></li>
                                        </ul>
                                    </div>
                                    <!-- END Search Info - Pagination -->

                                    <!-- Users Results -->
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th style="width: 150px;" class="text-center"><i class="gi gi-user"></i></th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Subscription</th>
                                                    <th style="width: 150px;" class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user1</a></td>
                                                    <td>user1@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-warning">Trial</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user2</a></td>
                                                    <td>user2@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user3</a></td>
                                                    <td>user3@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user4</a></td>
                                                    <td>user4@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user5</a></td>
                                                    <td>user5@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user6</a></td>
                                                    <td>user6@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user7</a></td>
                                                    <td>user7@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-warning">Trial</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user8</a></td>
                                                    <td>user8@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user9</a></td>
                                                    <td>user9@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                                    <td><a href="page_ready_user_profile.html">user10</a></td>
                                                    <td>user10@example.com</td>
                                                    <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-xs">
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Users Results -->

                                    <!-- Bottom Navigation -->
                                    <div class="block-section text-right">
                                        <ul class="pagination remove-margin">
                                            <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END Bottom Navigation -->
                                </div>
                                <!-- END Users Search -->
                            </div>
                            <!-- END Search Styles Content -->
                        </div>
                        <!-- END Search Styles Block -->
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

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
   
    </body>
</html>