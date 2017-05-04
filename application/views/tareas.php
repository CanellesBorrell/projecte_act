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
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="gi gi-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-options">
                                    <li class="dropdown-header text-center">Header Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                        </div>
                                    </li>
                                    <li class="dropdown-header text-center">Page Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Alternative Sidebar Toggle Button -->
                            <li>
                                <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                    <i class="gi gi-share_alt"></i>
                                    <span class="label label-primary label-indicator animation-floating">4</span>
                                </a>
                            </li>
                            <!-- END Alternative Sidebar Toggle Button -->

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Account</li>
                                    <li>
                                        <a href="page_ready_timeline.html">
                                            <i class="fa fa-clock-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">10</span>
                                            Updates
                                        </a>
                                        <a href="page_ready_inbox.html">
                                            <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">5</span>
                                            Messages
                                        </a>
                                        <a href="page_ready_pricing_tables.html"><i class="fa fa-magnet fa-fw pull-right"></i>
                                            <span class="badge pull-right">3</span>
                                            Subscriptions
                                        </a>
                                        <a href="page_ready_faq.html"><i class="fa fa-question fa-fw pull-right"></i>
                                            <span class="badge pull-right">11</span>
                                            FAQ
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="page_ready_user_profile.html">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                        <a href="#modal-user-settings" data-toggle="modal">
                                            <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                                        <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                    </li>
                                    <li class="dropdown-header text-center">Activity</li>
                                    <li>
                                        <div class="alert alert-success alert-alt">
                                            <small>5 min ago</small><br>
                                            <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                        </div>
                                        <div class="alert alert-info alert-alt">
                                            <small>10 min ago</small><br>
                                            <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                        </div>
                                        <div class="alert alert-warning alert-alt">
                                            <small>3 hours ago</small><br>
                                            <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                        </div>
                                        <div class="alert alert-danger alert-alt">
                                            <small>Yesterday</small><br>
                                            <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)" class="alert-link">New bug submitted</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Files Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="gi gi-file"></i>Files<br><small>Manage your files</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Pages</li>
                            <li><a href="">Files</a></li>
                        </ul>
                        <!-- END Files Header -->

                        <!-- Main Row -->
                        <div class="row">
                            <div class="col-md-4 col-lg-3">
                                <!-- Navigation Block -->
                                <!-- END Navigation Block -->

                                <!-- Upload Block -->
                                <div class="block full hidden-xs">
                                    <!-- Upload Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><i class="fa fa-cloud-upload"></i> Upload <strong>File</strong></h2>
                                    </div>
                                    <!-- END Upload Title -->

                                    <!-- Upload Content -->
                                    <form action="<?php echo site_url('tareas/DoUpload/4'); ?>">
                                    <div class="input-group">
										<span class="input-group-addon"><i class="gi gi-envelope"></i></span>
										<input type="text" id="nombre-tarea" name="nombre-tarea" class="form-control input-lg" placeholder="Nombre de la tarea">
					                </div>
					                <br>
					                <div class="input-group">
										<span class="input-group-addon"><i class="gi gi-envelope"></i></span>
										<input type="text" id="Fecha" name="Fecha" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="Fecha límite (yyyy-mm-dd)">
                                    </div>
                                    <br>
                                    <div class="input-group">
										<label for="comment">Comment:</label>
										<textarea class="form-control" rows="5" id="comment"></textarea>     
									</div>
									<br>
                                    <label for="file"> Selecciona un fitxer</label>
										<p>
										<input type="file" name="Tareas" value="Envia" size="50" /></p>
                                    <br>
									<p><button type="submit" class="btn btn-success" name="foto">Acceptar</button></p>
									</form>
                                    <!-- END Upload Content -->
                                </div>
                                <!-- END Upload Block -->
                            </div>
                            <div class="col-md-8 col-lg-9">
                                <!-- Files Block -->
                                <div class="block">
                                    <!-- Files Content -->
                                    <!-- Add the category value for each item in its data-category attribute (for the filter functionality to work) -->
                                    <div class="row media-filter-items">
										
										<!--comensem a llistar -->
										<?php foreach($data as $listartareas){ ?>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="book">
                                                <div class="media-items-options text-left">
													<a href="<?php echo $listartareas['Archivo']; ?>" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-mp3 fa-5x text-info"></i>
                                                </div>
                                                <h4>
                                                    <strong><?php echo $listartareas['Nombre'];?></strong><br>
                                                    <small>5 min | 7.3MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <?php } // Cerramos foreach ?>  
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="photo">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a href="img/placeholders/photos/photo7.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-jpg fa-5x text-success"></i>
                                                </div>
                                                <h4>
                                                    <strong>Food</strong>.jpg<br>
                                                    <small>5.3MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="photo">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a href="img/placeholders/photos/photo2.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-jpg fa-5x text-success"></i>
                                                </div>
                                                <h4>
                                                    <strong>Bubble</strong>.jpg<br>
                                                    <small>3.2MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="photo">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a href="img/placeholders/photos/photo1.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-jpg fa-5x text-success"></i>
                                                </div>
                                                <h4>
                                                    <strong>Mountain</strong>.jpg<br>
                                                    <small>6.4MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="movie">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-mov fa-5x text-danger"></i>
                                                </div>
                                                <h4>
                                                    <strong>The Movie</strong>.mov<br>
                                                    <small>190 min | 1.8GB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="movie">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-mov fa-5x text-danger"></i>
                                                </div>
                                                <h4>
                                                    <strong>Mountain Trip</strong>.mov<br>
                                                    <small>75 min | 0.5GB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="movie">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-mov fa-5x text-danger"></i>
                                                </div>
                                                <h4>
                                                    <strong>Blockbuster</strong>.mov<br>
                                                    <small>180 min | 1.2GB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="book">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-pdf fa-5x text-warning"></i>
                                                </div>
                                                <h4>
                                                    <strong>HTML Tutorials</strong>.pdf<br>
                                                    <small>500 Pages | 6.2MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="music">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-mp3 fa-5x text-info"></i>
                                                </div>
                                                <h4>
                                                    <strong>Soundtrack</strong>.mp3<br>
                                                    <small>4 min | 4.9MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="book">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-pdf fa-5x text-warning"></i>
                                                </div>
                                                <h4>
                                                    <strong>The Scary Path</strong>.pdf<br>
                                                    <small>300 Pages | 1.5MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="photo">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a href="img/placeholders/photos/photo16.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-jpg fa-5x text-success"></i>
                                                </div>
                                                <h4>
                                                    <strong>Bridge</strong>.jpg<br>
                                                    <small>3.9MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="media-items animation-fadeInQuickInv" data-category="music">
                                                <div class="media-items-options text-left">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="media-items-content">
                                                    <i class="fi fi-mp3 fa-5x text-info"></i>
                                                </div>
                                                <h4>
                                                    <strong>New Sun</strong>.mp3<br>
                                                    <small>3 min | 3.5MB</small>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Files Content -->
                                </div>
                                <!-- END Files Block -->
                            </div>
                        </div>
                        <!-- END Main Row -->
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
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/readyFiles.js"></script>
        <script>$(function(){ ReadyFiles.init(); });</script>
    </body>
</html>
