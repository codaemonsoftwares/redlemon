<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Red Lemon Media
        </title>

        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>public/css/blue-theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>public/css/styles.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>public/css/icons.min.css" rel="stylesheet" type="text/css">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/charts/sparkline.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/uniform.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/inputmask.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/autosize.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/inputlimit.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/listbox.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/multiselect.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/validate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/tags.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/switch.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/uploader/plupload.full.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/uploader/plupload.queue.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/forms/wysihtml5/toolbar.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/fancybox.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/moment.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/jgrowl.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/datatables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/fullcalendar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/interface/collapsible.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/application.js"></script>
    </head>

    <body class="sidebar-wide">
        <!-- Navbar -->

        <div class="navbar navbar-inverse" role="navigation">

            <div class="navbar-header"><a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>public/images/redlemon.png"
                                                                             alt="Red Lemon Media" height="30"></a><a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">

                    <span class="sr-only">Toggle right icons
                    </span><i class="icon-grid"></i></button><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <span class="sr-only">Toggle menu
                    </span><i class="icon-paragraph-justify2"></i></button><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">

                    <span class="sr-only">Toggle sidebar
                    </span><i class="icon-indent-decrease"></i></button>
            </div>
            <ul class="nav navbar-nav collapse" id="navbar-menu">

                <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify2"></i> 
                        <span>Campaigns & Partners
                        </span> <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="form_components.html">Overview</a></li>
                        <li><a href="form_layouts.html">Create Campaign</a></li>
                        <li><a href="form_grid.html">Edit Campaign</a></li>
                        <li><a href="wysiwyg.html">Delete Campaign</a></li>
                        <li><a href="validation.html">Add Partner</a></li>
                        <li><a href="file_uploader.html">Edit Partner</a></li>
                        <li><a href="form_snippets.html">Delete Partner</a></li>
                        <li><a href="form_snippets.html">Emails</a></li>
                    </ul></li>
                <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-grid"></i> 

                        <span>User Management
                        </span> <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                         <li><a href="<?php echo base_url() ?>">User Management</a></li>
                        <li><a href="visuals.html">Reports</a></li>
                        <li><a href="<?php echo base_url() . "user/search_user"; ?>">Search User</a></li>
                        <li><a href="panel_options.html">Delete User</a></li>
                        <li><a href="navbars.html">User Classification based on Responsiveness</a></li>
                    </ul></li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-copy"></i> 

                        <span>Data Validation & Management
                        </span> <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="sidebar_wide_left.html">Reports</a></li>
                        <li><a href="sidebar_wide_right.html">Suspicious Records</a></li>
                        <li><a href="sidebar_narrow_left.html">Blacklists</a></li>
                        <li><a href="#" class="expand">Overview</a></li>
                        <li><a href="sidebar_narrow_right.html">Add Blacklist</a></li>
                        <li><a href="sidebar_icons_left.html">Blacklist-CSV Import</a></li>
                        <li><a href="sidebar_collapsed.html">Badwords</a></li>
                        <li><a href="sidebar_collapsed.html">Add Badwords</a></li>
                        <li><a href="sidebar_collapsed.html">Badwords-CSV Import</a></li>
                    </ul></li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-copy"></i> 

                        <span>Sweeptakes
                        </span> <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="sidebar_wide_left.html">Overview</a></li>
                        <li><a href="sidebar_wide_right.html">Create Sweeptakes</a></li>
                        <li><a href="sidebar_narrow_left.html">Edit Sweeptakes</a></li>
                        <li><a href="sidebar_narrow_right.html">Delete Sweeptakes</a></li>
                        <li><a href="sidebar_icons_left.html">Domain Setup</a></li>
                        <li><a href="sidebar_collapsed.html">Global Variables</a></li>
                        <li><a href="layout_fixed_navbar.html">Emails</a></li>
                    </ul></li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-copy"></i> 

                        <span>Statistics
                        </span> <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="sidebar_wide_left.html">User Registration</a></li>
                    </ul></li>

            </ul>
            <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
                <li class="user dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url() ?>public/images/demo/users/face1.png" alt="">

                        <span>Jay Suryawanshi
                        </span><i class="caret"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right icons-right">
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>
                        <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-exit"></i> Logout</a></li>
                    </ul></li>
            </ul>
        </div>
        <!-- /navbar -->
        <!-- Page container --> 

        <div class="page-container">
            <!-- Sidebar -->

            <div class="sidebar collapse">

                <div class="sidebar-content">
                    <!-- Main navigation -->
                    <ul class="navigation">
                        <li><a href="index-2.html">
                                <span>Dashboard
                                </span> <i class="icon-screen2"></i></a></li>
                        <li><a href="search.html">
                                <span>Sales
                                </span> <i class="icon-search3"></i></a></li>

                        <li><a href="search.html">
                                <span>Export
                                </span> <i class="icon-download4"></i></a></li>

                        <li><a href="search.html">
                                <span>Clients
                                </span> <i class="icon-user2"></i></a></li>

                        <li><a href="search.html">
                                <span>Products
                                </span> <i class="icon-archive"></i></a></li>

                    </ul>
                    <!-- /main navigation -->
                </div>
            </div>
            <!-- /sidebar -->
            <!-- Page content --> 

            <div class="page-content">
                <!-- Page header -->
                <div class="page_container">