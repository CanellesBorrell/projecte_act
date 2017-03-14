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
                
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <?php include('menu.php');?>
                <!-- END Main Sidebar -->

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
                            
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                       
                            <!-- END Alternative Sidebar Toggle Button -->

                           
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                       

                        <!-- Customer Content -->
                        <div class="row">
                            <div class="col-lg-4">
                                <!-- Customer Info Block -->
                                <div class="block">
                                    <!-- Customer Info Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-file-o"></i> <strong>Perfil</strong> Usuario</h2>
                                    </div>
                                    <!-- END Customer Info Title -->

                                    <!-- Customer Info -->
                                    <div class="block-section text-center">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar4@2x.jpg" alt="avatar" class="img-circle">
                                        </a>
                                        <h3>
                                            <strong><?php echo $sesio['Nombre'];?> <?echo $sesio['Apellidos'];?></strong><br><small></small>
                                        </h3>
                                    </div>
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Birthdate</strong></td>
                                                <td>November 20, 1984</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Registration</strong></td>
                                                <td>15/10/2014 - 12:25</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Last Visit</strong></td>
                                                <td>06/11/2014 - 09:41</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Language</strong></td>
                                                <td>English (UK)</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Registrations</strong></td>
                                                <td><span class="label label-primary">Newsletter</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Status</strong></td>
                                                <td><span class="label label-success"><i class="fa fa-check"></i> Active</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Customer Info -->
                                </div>
                                <!-- END Customer Info Block -->

                                <!-- Quick Stats Block -->
                                <div class="block">
                                    <!-- Quick Stats Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-line-chart"></i> <strong>Información</strong> del Juego</h2>
                                    </div>
                                    <!-- END Quick Stats Title -->

                                    <!-- Quick Stats Content -->
                                    <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                                        <div class="widget-simple">
                                            <div class="widget-icon pull-right themed-background">
                                                <i class="fa fa-truck"></i>
                                            </div>
                                            <h4 class="text-left">
                                                <strong>4</strong><br><small>Orders in Total</small>
                                            </h4>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                                        <div class="widget-simple">
                                            <div class="widget-icon pull-right themed-background-success">
                                                <i class="fa fa-usd"></i>
                                            </div>
                                            <h4 class="text-left text-success">
                                                <strong>$ 2.125,00</strong><br><small>Orders Value</small>
                                            </h4>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                                        <div class="widget-simple">
                                            <div class="widget-icon pull-right themed-background-warning">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <h4 class="text-left text-warning">
                                                <strong>3</strong> ($ 517,00)<br><small>Products in Cart</small>
                                            </h4>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                                        <div class="widget-simple">
                                            <div class="widget-icon pull-right themed-background-info">
                                                <i class="fa fa-group"></i>
                                            </div>
                                            <h4 class="text-left text-info">
                                                <strong>2</strong><br><small>Referred Members</small>
                                            </h4>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                                        <div class="widget-simple">
                                            <div class="widget-icon pull-right themed-background-danger">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <h4 class="text-left text-danger">
                                                <strong>15</strong><br><small>Favorite Products</small>
                                            </h4>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                                        <div class="widget-simple">
                                            <div class="widget-icon pull-right themed-background-muted">
                                                <i class="fa fa-ticket"></i>
                                            </div>
                                            <h4 class="text-left text-muted">
                                                <strong>2</strong><br><small>Tickets</small>
                                            </h4>
                                        </div>
                                    </a>
                                    <!-- END Quick Stats Content -->
                                </div>
                                <!-- END Quick Stats Block -->
                            </div>
                            <div class="col-lg-8">
                                <!-- Orders Block -->
                                <div class="block">
                                    <!-- Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                           
                                        </div>
                                        <h2><i class="fa fa-truck"></i> <strong>Tareas </strong>pendientes</h2>
                                    </div>
                                    <!-- END Orders Title -->

                                    <!-- Orders Content -->
                                    <table class="table table-bordered table-striped table-vcenter">
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_order_view.html"><strong>ORD.685199</strong></a></td>
                                                <td class="hidden-xs" style="width: 15%;"><a href="javascript:void(0)">5 Products</a></td>
                                                <td class="text-right hidden-xs" style="width: 10%;"><strong>$585,00</strong></td>
                                                <td><span class="label label-warning">Processing</span></td>
                                                <td class="hidden-xs">Paypal</td>
                                                <td class="hidden-xs text-center">16/11/2014</td>
                                                <td class="text-center" style="width: 70px;">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="page_ecom_order_view.html" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685198</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">2 Products</a></td>
                                                <td class="text-right hidden-xs"><strong>$958,00</strong></td>
                                                <td><span class="label label-info">For delivery</span></td>
                                                <td class="hidden-xs">Credit Card</td>
                                                <td class="hidden-xs text-center">03/10/2014</td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="page_ecom_order_view.html" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685197</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">3 Products</a></td>
                                                <td class="text-right hidden-xs"><strong>$318,00</strong></td>
                                                <td><span class="label label-success">Delivered</span></td>
                                                <td class="hidden-xs">Bank Wire</td>
                                                <td class="hidden-xs text-center">17/06/2014</td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="page_ecom_order_view.html" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685196</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">6 Products</a></td>
                                                <td class="text-right hidden-xs"><strong>$264,00</strong></td>
                                                <td><span class="label label-success">Delivered</span></td>
                                                <td class="hidden-xs">Paypal</td>
                                                <td class="hidden-xs text-center">27/01/2014</td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="page_ecom_order_view.html" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Orders Content -->
                                </div>
                                <!-- END Orders Block -->
                                <div class="block">
                                    <!-- Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                           
                                        </div>
                                        <h2><i class="fa fa-truck"></i> <strong>Asignaturas </strong>Matriculadas</h2>
                                    </div>
                                    <!-- END Orders Title -->

                                    <!-- Orders Content -->
                                    <table class="table table-bordered table-striped table-vcenter">
                                        <tbody>
                                         <?php foreach($data as $listarasignaturas){ ?>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><strong><?php echo $listarasignaturas['Asignatura']; ?></td></strong></a></td>
                                                
                                                <td class="text-center" style="width: 70px;">
                                                    <a href=""><button class="btn btn-sm btn-info"><i class="hi hi-eye-open"></i></button></a>
                                                </td>
                                            </tr>
                                        <?php } // Cerramos foreach ?>
                                        </tbody>
                                    </table>
                                    <!-- END Orders Content -->
                                </div>
                                <!-- Products in Cart Block -->
                                <div class="block">
                                    <!-- Products in Cart Title -->
                                    <div class="block-title col-md-13">
                                        <div class="block-options pull-right">
                                           
                                        </div>
                                        <h2><i class="fa fa-shopping-cart"></i> <strong>Calendario</strong> Escolar</h2>
                                         <div id="calendar"></div>
                                    </div>
                                    <!-- END Products in Cart Title -->

 


                               
                                <!-- END Private Notes Block -->
                            </div>
                        </div>
                        <!-- END Customer Content -->
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

        <script src="<?php echo base_url();?>assets/js/pages/compCalendar.js"></script>
        <script>CompCalendar.init();</script>
    </body>
</html>