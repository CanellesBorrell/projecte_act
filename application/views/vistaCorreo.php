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
        <?php include('imports.php'); ?>
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
                
            <?php include('menu.php'); ?>
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

                        <!-- Search Form -->
                        
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Alternative Sidebar Toggle Button -->
                            
                            <!-- END Alternative Sidebar Toggle Button -->

                            <!-- User Dropdown -->
                           
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Inbox Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1><i class="fa fa-eye"></i> View Message<br><small>Your Message Center</small></h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Pages</li>
                            <li>Message Center</li>
                            <li><a href="">View Message</a></li>
                        </ul>
                        <!-- END Inbox Header -->

                        <!-- Inbox Content -->
                        <div class="row">
                            <!-- Inbox Menu -->
                            <div class="col-sm-4 col-lg-3">
                                <!-- Menu Block -->
                                <div class="block full">
                                    <!-- Menu Title -->
                                    <div class="block-title clearfix">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
                                        </div>
                                        <div class="block-options pull-left">
                                            <a href="page_ready_inbox_compose.html" class="btn btn-alt btn-sm btn-default"><i class="fa fa-pencil"></i> Compose Message</a>
                                        </div>
                                    </div>
                                    <!-- END Menu Title -->

                                    <!-- Menu Content -->
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            <a href="page_ready_inbox.html">
                                                <span class="badge pull-right">5</span>
                                                <i class="fa fa-angle-right fa-fw"></i> <strong>Inbox</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">10</span>
                                                <i class="fa fa-angle-right fa-fw"></i> <strong>Starred</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-angle-right fa-fw"></i> <strong>Sent</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">2</span>
                                                <i class="fa fa-angle-right fa-fw"></i> <strong>Drafts</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-angle-right fa-fw"></i> <strong>Archive</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-angle-right fa-fw"></i> <strong>Spam</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-angle-right fa-fw"></i> <strong>Trash</strong>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Menu Content -->
                                </div>
                                <!-- END Menu Block -->

                                <!-- Tags Block -->
                                <div class="block full">
                                    <!-- Tags Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Add Tag"><i class="fa fa-plus"></i></a>
                                        </div>
                                        <h2> <i class="fa fa-tags"></i> User <strong>Tags</strong></h2>
                                    </div>
                                    <!-- END Tags Title -->

                                    <!-- Tags Content -->
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">1680</span>
                                                <i class="fa fa-tag fa-fw text-success"></i> <strong>Work</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">350</span>
                                                <i class="fa fa-tag fa-fw text-warning"></i> <strong>Friends</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">651</span>
                                                <i class="fa fa-tag fa-fw text-danger"></i> <strong>Projects</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">156</span>
                                                <i class="fa fa-tag fa-fw text-info"></i> <strong>For Later</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">296</span>
                                                <i class="fa fa-tag fa-fw text-muted"></i> <strong>Sites</strong>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Tags Content -->
                                </div>
                                <!-- END Tags Block -->

                                <!-- Account Stats Block -->
                                <div class="block">
                                    <!-- Account Status Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <span class="label label-warning">70%</span>
                                        </div>
                                        <h2><i class="fa fa-user"></i> Account <strong>Status</strong></h2>
                                    </div>
                                    <!-- END Account Status Title -->

                                    <!-- Account Stats Content -->
                                    <div class="row block-section text-center">
                                        <div class="col-xs-12">
                                            <div class="pie-chart block-section" data-percent="70" data-line-width="2" data-bar-color="#e67e22" data-track-color="#ffffff">
                                                <img src="img/placeholders/avatars/avatar8.jpg" alt="avatar" class="pie-avatar img-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <tbody>
                                            <tr>
                                                <td class="text-right" style="width: 50%;"><strong>Active Plan</strong></td>
                                                <td>Business <a href="page_ready_pricing_tables.html" data-toggle="tooltip" title="Upgrade to VIP"><i class="fa fa-arrow-up"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Plan Valid</strong></td>
                                                <td><span class="text-danger"><strong>5</strong> days left</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Storage Usage</strong></td>
                                                <td class="text-warning"><strong>21</strong> of <strong>30</strong> GB</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Account Status Content -->
                                </div>
                                <!-- END Account Status Block -->

                                <!-- Online Users Block -->
                                <div class="block">
                                    <!-- Online Users Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-circle text-success"></i> Online <strong>Users</strong></h2>
                                    </div>
                                    <!-- END Online Users Title -->

                                    <!-- Online Users Content -->
                                    <div class="row text-center">
                                        <div class="col-xs-6 block-section">
                                            <a href="page_ready_user_profile.html">
                                                <img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 block-section">
                                            <a href="page_ready_user_profile.html">
                                                <img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 block-section">
                                            <a href="page_ready_user_profile.html">
                                                <img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 block-section">
                                            <a href="page_ready_user_profile.html">
                                                <img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Online Users Content -->
                                </div>
                                <!-- END Online Users Block -->
                            </div>
                            <!-- END Inbox Menu -->

                            <!-- View Message -->
                            <div class="col-sm-8 col-lg-9">
                                <!-- View Message Block -->
                                <div class="block full">
                                    <!-- View Message Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                                        </div>
                                        <h2><strong>The project is live!</strong> <small><span class="label label-success">Work</span></small></h2>
                                    </div>
                                    <!-- END View Message Title -->

                                    <!-- Message Meta -->
                                    <table class="table table-borderless table-vcenter remove-margin">
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 80px;">
                                                    <a href="page_ready_user_profile.html" class="pull-left">
                                                        <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                                                    </a>
                                                </td>
                                                <td class="hidden-xs">
                                                    <a href="page_ready_user_profile.html"><strong>Explorer</strong></a> to <a href="page_ready_user_profile.html"><strong>Me</strong></a>
                                                </td>
                                                <td class="text-right"><strong>June 5, 2014 - 09:10 am</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <!-- END Message Meta -->

                                    <!-- Message Body -->
                                    <p>Hey <strong>Admin</strong>,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                                    <p>Best Regards</p>
                                    <hr>
                                    <!-- END Message Body -->

                                    <!-- Attachments Row -->
                                    <div class="row block-section">
                                        <div class="col-xs-4 col-sm-2 text-center">
                                            <a href="img/placeholders/photos/photo1.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="photo" class="img-responsive push-bit">
                                            </a>
                                            <span class="text-muted">IMG0001.JPG</span>
                                        </div>
                                        <div class="col-xs-4 col-sm-2 text-center">
                                            <a href="img/placeholders/photos/photo2.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo2.jpg" alt="photo" class="img-responsive push-bit">
                                            </a>
                                            <span class="text-muted">IMG0002.JPG</span>
                                        </div>
                                        <div class="col-xs-4 col-sm-2 text-center">
                                            <a href="img/placeholders/photos/photo3.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo3.jpg" alt="photo" class="img-responsive push-bit">
                                            </a>
                                            <span class="text-muted">IMG0003.JPG</span>
                                        </div>
                                    </div>
                                    <!-- END Attachments Row -->

                                    <!-- Quick Reply Form -->
                                    <form action="page_ready_inbox_message.html" method="post" onsubmit="return false;">
                                        <textarea id="message-quick-reply" name="message-quick-reply" rows="5" class="form-control push-bit" placeholder="Your message.."></textarea>
                                        <button class="btn btn-sm btn-primary"><i class="fa fa-share"></i> Quick Reply</button>
                                    </form>
                                    <!-- END Quick Reply Form -->
                                </div>
                                <!-- END View Message Block -->
                            </div>
                            <!-- END View Message -->
                        </div>
                        <!-- END Inbox Content -->
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