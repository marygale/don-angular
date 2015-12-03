{{--@include('layouts.header')
@include('layouts.sidebar')
<div class="container">
    @yield('content')
</div>--}}
{{--
@include('partials.footer')--}}



<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> SmartAdmin </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Use the correct meta names below for your web application
         Ref: http://davidbcalhoun.com/2010/viewport-metatag

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.css">

    <!-- SmartAdmin RTL Support is under construction
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

</head>
<body class="">
<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
            <div class="btn-group btn-group-justified" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/mail.html">
                    Msgs (14) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/notifications.html">
                    notify (3) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/tasks.html">
                    Tasks (4) </label>
            </div>

            <!-- notification content -->
            <div class="ajax-notifications custom-scroll">

                <div class="alert alert-transparent">
                    <h4>Click a button to show messages here</h4>
                    This blank page message helps protect your privacy, or you can show the first message here automatically.
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

            </div>
            <!-- end notification content -->

            <!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
                            <i class="fa fa-refresh"></i>
                        </button> </span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown -->
    <div id="project-context">

        <span class="label">Projects:</span>
        <span id="project-selector" class="popover-trigger-element dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

        <!-- Suggestion: populate this list with fetch and push technique -->
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
            </li>
            <li>
                <a href="javascript:void(0);">Notes on pipeline upgradee</a>
            </li>
            <li>
                <a href="javascript:void(0);">Assesment Report for merchant account</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
            </li>
        </ul>
        <!-- end dropdown-menu-->

    </div>
    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="login.html" title="Sign Out"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- input: search field -->
        <form action="#search.html" class="header-search pull-right">
            <input type="text" placeholder="Find reports and more" id="search-fld">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
        </form>
        <!-- end input: search field -->

        <!-- multiple lang dropdown : find all flags in the image folder -->
        <ul class="header-dropdown-list hidden-xs">
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img alt="" src="img/flags/us.png"> <span> US </span> <i class="fa fa-angle-down"></i> </a>
                <ul class="dropdown-menu pull-right">
                    <li class="active">
                        <a href="javascript:void(0);"><img alt="" src="img/flags/us.png"> US</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img alt="" src="img/flags/es.png"> Spanish</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img alt="" src="img/flags/de.png"> German</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- end multiple lang -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut">
                        <img src="img/avatars/sunny.png" alt="me" class="online" />
						<span>
							john.doe
						</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive

    To make this navigation dynamic please make sure to link the node
    (the reference to the nav > ul) after page load. Or the navigation
    will not initialize.
    -->
    <nav>
        <!-- NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional hre="" links. See documentation for details.
        -->

        <ul>
            <li>
                <a href="index.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Inbox</span><span class="badge pull-right inbox-badge">14</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
                <ul>
                    <li>
                        <a href="flot.html">Flot Chart</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris Charts</a>
                    </li>
                    <li>
                        <a href="inline-charts.html">Inline Charts</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
                <ul>
                    <li>
                        <a href="table.html">Normal Tables</a>
                    </li>
                    <li>
                        <a href="datatables.html">Data Tables</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
                <ul>
                    <li>
                        <a href="form-elements.html">Smart Form Elements</a>
                    </li>
                    <li>
                        <a href="form-templates.html">Smart Form Layouts</a>
                    </li>
                    <li>
                        <a href="validation.html">Smart Form Validation</a>
                    </li>
                    <li>
                        <a href="bootstrap-forms.html">Bootstrap Form Elements</a>
                    </li>
                    <li>
                        <a href="plugins.html">Form Plugins</a>
                    </li>
                    <li>
                        <a href="wizard.html">Wizards</a>
                    </li>
                    <li>
                        <a href="other-editors.html">Bootstrap Editors</a>
                    </li>
                    <li>
                        <a href="dropzone.html">Dropzone <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
                <ul>
                    <li>
                        <a href="general-elements.html">General Elements</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="#">Icons</a>
                        <ul>
                            <li class="active">
                                <a href="fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
                            <li>
                                <a href="glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons </a>
                        </ul>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                    <li>
                        <a href="treeview.html">Tree View</a>
                    </li>
                    <li>
                        <a href="nestable-list.html">Nestable Lists</a>
                    </li>
                    <li>
                        <a href="jqui.html">JQuery UI</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-folder-open"></i> <span class="menu-item-parent">6 Level Navigation</span></a>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> 2nd Level</a>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> 4th Level</a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> 5th Level</a>
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> Folder</a>

                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i> <span class="menu-item-parent">Calendar</span></a>
            </li>
            <li>
                <a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
            </li>
            <li>
                <a href="gallery.html"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
            </li>
            <li>
                <a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">Google Map Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span></a>
                <ul>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="pricing-table.html">Pricing Tables</a>
                    </li>
                    <li>
                        <a href="invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="login.html" target="_top">Login</a>
                    </li>
                    <li>
                        <a href="register.html" target="_top">Register</a>
                    </li>
                    <li>
                        <a href="lock.html" target="_top">Locked Screen</a>
                    </li>
                    <li>
                        <a href="error404.html">Error 404</a>
                    </li>
                    <li>
                        <a href="error500.html">Error 500</a>
                    </li>
                    <li>
                        <a href="blank_.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="email-template.html">Email Template</a>
                    </li>
                    <li>
                        <a href="search.html">Search Page</a>
                    </li>
                    <li>
                        <a href="ckeditor.html">CK Editor</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-file"></i> <span class="menu-item-parent">Other Pages</span></a>
                <ul>
                    <li>
                        <a href="forum.html">Forum Layout</a>
                    </li>
                    <li>
                        <a href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="timeline.html">Timeline</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        <span class="ribbon-button-alignment"> <span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true"><i class="fa fa-refresh"></i></span> </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>
                UI Elements
            </li>
            <li>
                Icons
            </li>
            <li>
                Font Awesome
            </li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark"><i class="fa fa-desktop fa-fw "></i>
                    UI Elements
							<span>>
							 Icons > Font Awesome
							</span>
                </h1>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                <ul id="sparks" class="">
                    <li class="sparks-info">
                        <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                        <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                            1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                        <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                        <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <div class="well well-sm">
                <div class="input-group">
                    <input class="form-control input-lg" type="text" id="fa-icon-search" placeholder="Search for an icon...">
                    <span class="input-group-addon"><i class="fa fa-fw fa-lg fa-search"></i></span>
                </div>
            </div>

            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-sm-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false">
                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->
                        <header>
                            <span class="widget-icon"> <i class="fa fa-comments"></i> </span>
                            <h2>Font Awesome 4.0 </h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body" id="all-icons-demo">


                                <div class="alert alert-info">
                                    <i class="fa fa-exclamation"></i> Please note: As of the latest version of Font Awesome 4.0. All icons now require a base class of <code>
                                        fa</code> as well as individual icon classes. For example <code> fa fa-adjust</code>
                                </div>

                                <div>
                                    <h2>Web Application Icons</h2>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-adjust"></i> fa-adjust
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-anchor"></i> fa-anchor
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-archive"></i> fa-archive
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-asterisk"></i> fa-asterisk
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-ban"></i> fa-ban
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bar-chart-o"></i> fa-bar-chart-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-barcode"></i> fa-barcode
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-beer"></i> fa-beer
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bell"></i> fa-bell
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bell-o"></i> fa-bell-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bolt"></i> fa-bolt
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-book"></i> fa-book
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bookmark"></i> fa-bookmark
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bookmark-o"></i> fa-bookmark-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-briefcase"></i> fa-briefcase
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bug"></i> fa-bug
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-building"></i> fa-building
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bullhorn"></i> fa-bullhorn
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bullseye"></i> fa-bullseye
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-calendar"></i> fa-calendar
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-calendar-o"></i> fa-calendar-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-camera"></i> fa-camera
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-camera-retro"></i> fa-camera-retro
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-certificate"></i> fa-certificate
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-check"></i> fa-check
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-check-circle"></i> fa-check-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-check-circle-o"></i> fa-check-circle-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-check-square"></i> fa-check-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-check-square-o"></i> fa-check-square-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-circle"></i> fa-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-circle-o"></i> fa-circle-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-clock-o"></i> fa-clock-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-cloud"></i> fa-cloud
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-cloud-download"></i> fa-cloud-download
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-cloud-upload"></i> fa-cloud-upload
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-code"></i> fa-code
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-code-fork"></i> fa-code-fork
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-coffee"></i> fa-coffee
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-cog"></i> fa-cog
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-cogs"></i> fa-cogs
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-collapse-o"></i> fa-collapse-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-comment"></i> fa-comment
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-comment-o"></i> fa-comment-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-comments"></i> fa-comments
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-comments-o"></i> fa-comments-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-compass"></i> fa-compass
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-credit-card"></i> fa-credit-card
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-crop"></i> fa-crop
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-crosshairs"></i> fa-crosshairs
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-cutlery"></i> fa-cutlery
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-desktop"></i> fa-desktop
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-dot-circle-o"></i> fa-dot-circle-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-download"></i> fa-download
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-ellipsis-horizontal"></i> fa-ellipsis-horizontal
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-ellipsis-vertical"></i> fa-ellipsis-vertical
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-envelope"></i> fa-envelope
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-envelope-o"></i> fa-envelope-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-eraser"></i> fa-eraser
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-exchange"></i> fa-exchange
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-exclamation"></i> fa-exclamation
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-exclamation-circle"></i> fa-exclamation-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-expand-o"></i> fa-expand-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-external-link"></i> fa-external-link
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-external-link-square"></i> fa-external-link-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-eye"></i> fa-eye
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-eye-slash"></i> fa-eye-slash
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-female"></i> fa-female
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-fighter-jet"></i> fa-fighter-jet
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-film"></i> fa-film
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-filter"></i> fa-filter
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-fire"></i> fa-fire
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-flag"></i> fa-flag
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-flag-checkered"></i> fa-flag-checkered
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-flag-o"></i> fa-flag-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-flask"></i> fa-flask
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-folder"></i> fa-folder
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-folder-o"></i> fa-folder-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-folder-open"></i> fa-folder-open
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-folder-open-o"></i> fa-folder-open-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-frown-o"></i> fa-frown-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-gamepad"></i> fa-gamepad
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-gavel"></i> fa-gavel
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-gift"></i> fa-gift
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-glass"></i> fa-glass
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-globe"></i> fa-globe
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-group"></i> fa-group
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-hdd-o"></i> fa-hdd-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-headphones"></i> fa-headphones
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-heart"></i> fa-heart
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-heart-o"></i> fa-heart-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-home"></i> fa-home
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-inbox"></i> fa-inbox
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-info"></i> fa-info
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-info-circle"></i> fa-info-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-key"></i> fa-key
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-keyboard-o"></i> fa-keyboard-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-laptop"></i> fa-laptop
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-leaf"></i> fa-leaf
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-lemon-o"></i> fa-lemon-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-level-down"></i> fa-level-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-level-up"></i> fa-level-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-lightbulb-o"></i> fa-lightbulb-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-location-arrow"></i> fa-location-arrow
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-lock"></i> fa-lock
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-magic"></i> fa-magic
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-magnet"></i> fa-magnet
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-mail-reply-all"></i> fa-mail-reply-all
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-male"></i> fa-male
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-map-marker"></i> fa-map-marker
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-meh-o"></i> fa-meh-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-microphone"></i> fa-microphone
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-microphone-slash"></i> fa-microphone-slash
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-minus"></i> fa-minus
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-minus-circle"></i> fa-minus-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-minus-square"></i> fa-minus-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-minus-square-o"></i> fa-minus-square-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-mobile"></i> fa-mobile
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-money"></i> fa-money
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-moon-o"></i> fa-moon-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-move"></i> fa-move
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-music"></i> fa-music
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-pencil"></i> fa-pencil
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-pencil-square"></i> fa-pencil-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-pencil-square-o"></i> fa-pencil-square-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-phone"></i> fa-phone
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-phone-square"></i> fa-phone-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-picture-o"></i> fa-picture-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-plane"></i> fa-plane
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-plus"></i> fa-plus
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-plus-circle"></i> fa-plus-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-plus-square"></i> fa-plus-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-power-off"></i> fa-power-off
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-print"></i> fa-print
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-puzzle-piece"></i> fa-puzzle-piece
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-qrcode"></i> fa-qrcode
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-question"></i> fa-question
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-question-circle"></i> fa-question-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-quote-left"></i> fa-quote-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-quote-right"></i> fa-quote-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-random"></i> fa-random
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-refresh"></i> fa-refresh
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-reorder"></i> fa-reorder
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-reply"></i> fa-reply
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-reply-all"></i> fa-reply-all
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-resize-horizontal"></i> fa-resize-horizontal
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-resize-vertical"></i> fa-resize-vertical
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-retweet"></i> fa-retweet
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-road"></i> fa-road
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rocket"></i> fa-rocket
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rss"></i> fa-rss
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rss-square"></i> fa-rss-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-search"></i> fa-search
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-search-minus"></i> fa-search-minus
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-search-plus"></i> fa-search-plus
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-share"></i> fa-share
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-share-square"></i> fa-share-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-share-square-o"></i> fa-share-square-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-shield"></i> fa-shield
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-shopping-cart"></i> fa-shopping-cart
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sign-in"></i> fa-sign-in
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sign-out"></i> fa-sign-out
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-signal"></i> fa-signal
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sitemap"></i> fa-sitemap
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-smile-o"></i> fa-smile-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort"></i> fa-sort
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-asc"></i> fa-sort-asc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-desc"></i> fa-sort-desc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-spinner"></i> fa-spinner
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-square"></i> fa-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-square-o"></i> fa-square-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-star"></i> fa-star
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-star-half"></i> fa-star-half
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-star-half-o"></i> fa-star-half-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-star-o"></i> fa-star-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-subscript"></i> fa-subscript
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-suitcase"></i> fa-suitcase
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-sun-o"></i> fa-sun-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-superscript"></i> fa-superscript
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-tablet"></i> fa-tablet
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-tachometer"></i> fa-tachometer
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-tag"></i> fa-tag
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-tags"></i> fa-tags
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-tasks"></i> fa-tasks
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-terminal"></i> fa-terminal
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-thumb-tack"></i> fa-thumb-tack
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-thumbs-down"></i> fa-thumbs-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-thumbs-up"></i> fa-thumbs-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-ticket"></i> fa-ticket
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-times"></i> fa-times
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-times-circle"></i> fa-times-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-times-circle-o"></i> fa-times-circle-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-tint"></i> fa-tint
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-trash-o"></i> fa-trash-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-trophy"></i> fa-trophy
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-truck"></i> fa-truck
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-umbrella"></i> fa-umbrella
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-unlock"></i> fa-unlock
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-unlock-o"></i> fa-unlock-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-upload"></i> fa-upload
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-user"></i> fa-user
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-video-camera"></i> fa-video-camera
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-volume-down"></i> fa-volume-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-volume-off"></i> fa-volume-off
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-volume-up"></i> fa-volume-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-wheelchair"></i> fa-wheelchair
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-wrench"></i> fa-wrench
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2>Form Control Icons</h2>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-check-square"></i> fa-check-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-check-square-o"></i> fa-check-square-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-circle"></i> fa-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-circle-o"></i> fa-circle-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-dot-circle-o"></i> fa-dot-circle-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-minus-square"></i> fa-minus-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-minus-square-o"></i> fa-minus-square-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-square"></i> fa-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-square-o"></i> fa-square-o
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2>Currency Icons</h2>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-btc"></i> fa-btc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-eur"></i> fa-eur
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-gbp"></i> fa-gbp
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-inr"></i> fa-inr
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-jpy"></i> fa-jpy
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-krw"></i> fa-krw
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-money"></i> fa-money
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rub"></i> fa-rub
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-try"></i> fa-try
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-usd"></i> fa-usd
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2>Text Editor Icons</h2>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-align-center"></i> fa-align-center
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-align-justify"></i> fa-align-justify
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-align-left"></i> fa-align-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-align-right"></i> fa-align-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bold"></i> fa-bold
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chain-broken"></i> fa-chain-broken
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-clipboard"></i> fa-clipboard
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-columns"></i> fa-columns
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-eraser"></i> fa-eraser
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-file"></i> fa-file
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-file-o"></i> fa-file-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-file-text"></i> fa-file-text
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-file-text-o"></i> fa-file-text-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-files-o"></i> fa-files-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-floppy-o"></i> fa-floppy-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-font"></i> fa-font
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-indent"></i> fa-indent
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-italic"></i> fa-italic
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-link"></i> fa-link
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-list"></i> fa-list
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-list-alt"></i> fa-list-alt
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-list-ol"></i> fa-list-ol
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-list-ul"></i> fa-list-ul
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-outdent"></i> fa-outdent
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-paperclip"></i> fa-paperclip
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-repeat"></i> fa-repeat
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-scissors"></i> fa-scissors
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-strikethrough"></i> fa-strikethrough
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-table"></i> fa-table
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-text-height"></i> fa-text-height
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-text-width"></i> fa-text-width
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-th"></i> fa-th
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-th-large"></i> fa-th-large
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-th-list"></i> fa-th-list
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-underline"></i> fa-underline
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-undo"></i> fa-undo
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2>Directional Icons</h2>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-angle-double-down"></i> fa-angle-double-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-angle-double-left"></i> fa-angle-double-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-angle-double-right"></i> fa-angle-double-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-angle-double-up"></i> fa-angle-double-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-angle-down"></i> fa-angle-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-angle-left"></i> fa-angle-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-angle-right"></i> fa-angle-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-angle-up"></i> fa-angle-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-down"></i> fa-arrow-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-left"></i> fa-arrow-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-right"></i> fa-arrow-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-arrow-up"></i> fa-arrow-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-down"></i> fa-caret-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-left"></i> fa-caret-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-right"></i> fa-caret-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-caret-up"></i> fa-caret-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chevron-down"></i> fa-chevron-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chevron-left"></i> fa-chevron-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chevron-right"></i> fa-chevron-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-chevron-up"></i> fa-chevron-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-hand-o-down"></i> fa-hand-o-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-hand-o-left"></i> fa-hand-o-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-hand-o-right"></i> fa-hand-o-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-hand-o-up"></i> fa-hand-o-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-long-arrow-down"></i> fa-long-arrow-down
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-long-arrow-left"></i> fa-long-arrow-left
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-long-arrow-right"></i> fa-long-arrow-right
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-long-arrow-up"></i> fa-long-arrow-up
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2>Video Player Icons</h2>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-backward"></i> fa-backward
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-eject"></i> fa-eject
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-fast-backward"></i> fa-fast-backward
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-fast-forward"></i> fa-fast-forward
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-forward"></i> fa-forward
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-fullscreen"></i> fa-fullscreen
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-pause"></i> fa-pause
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-play"></i> fa-play
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-play-circle"></i> fa-play-circle
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-play-circle-o"></i> fa-play-circle-o
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-resize-full"></i> fa-resize-full
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-resize-small"></i> fa-resize-small
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-step-backward"></i> fa-step-backward
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-step-forward"></i> fa-step-forward
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-stop"></i> fa-stop
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-youtube-play"></i> fa-youtube-play
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2>Brand Icons</h2>
                                    <div class="alert alert-success">
                                        <ul class="margin-bottom-none padding-left-lg">
                                            <li>
                                                All brand icons are trademarks of their respective owners.
                                            </li>
                                            <li>
                                                The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-adn"></i> fa-adn
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-android"></i> fa-android
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-apple"></i> fa-apple
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bitbucket"></i> fa-bitbucket
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bitbucket-square"></i> fa-bitbucket-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span>
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-btc"></i> fa-btc
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-css3"></i> fa-css3
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-dribbble"></i> fa-dribbble
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-dropbox"></i> fa-dropbox
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-facebook"></i> fa-facebook
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-facebook-square"></i> fa-facebook-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-flickr"></i> fa-flickr
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-foursquare"></i> fa-foursquare
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-github"></i> fa-github
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-github-alt"></i> fa-github-alt
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-github-square"></i> fa-github-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-gittip"></i> fa-gittip
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-google-plus"></i> fa-google-plus
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-google-plus-square"></i> fa-google-plus-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-html5"></i> fa-html5
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-instagram"></i> fa-instagram
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-linkedin"></i> fa-linkedin
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-linkedin-square"></i> fa-linkedin-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-linux"></i> fa-linux
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-maxcdn"></i> fa-maxcdn
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-pagelines"></i> fa-pagelines
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-pinterest"></i> fa-pinterest
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-pinterest-square"></i> fa-pinterest-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-renren"></i> fa-renren
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-skype"></i> fa-skype
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-stack-exchange"></i> fa-stack-exchange
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-stack-overflow"></i> fa-stack-overflow
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-trello"></i> fa-trello
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-tumblr"></i> fa-tumblr
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-tumblr-square"></i> fa-tumblr-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-twitter"></i> fa-twitter
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-twitter-square"></i> fa-twitter-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-vimeo-square"></i> fa-vimeo-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-vk"></i> fa-vk
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-weibo"></i> fa-weibo
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-windows"></i> fa-windows
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-xing"></i> fa-xing
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-xing-square"></i> fa-xing-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-youtube"></i> fa-youtube
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-youtube-play"></i> fa-youtube-play
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-youtube-square"></i> fa-youtube-square
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2>Medical Icons</h2>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-ambulance"></i> fa-ambulance
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-h-square"></i> fa-h-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-hospital"></i> fa-hospital
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-medkit"></i> fa-medkit
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-plus-square"></i> fa-plus-square
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-stethoscope"></i> fa-stethoscope
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-user-md"></i> fa-user-md
                                        </div>
                                        <div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
                                            <i class="fa fa-wheelchair"></i> fa-wheelchair
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- WIDGET END -->

            </div>

            <!-- end row -->

            <!-- row -->

            <div class="row">

            </div>

            <!-- end row -->

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id="shortcut">
    <ul>
        <li>
            <a href="#inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
            <a href="#calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
        </li>
        <li>
            <a href="#gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
            <a href="#invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
        </li>
        <li>
            <a href="#gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>
<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="js/notification/SmartNotification.min.js"></script>

<!-- JARVIS WIDGETS -->
<script src="js/smartwidgets/jarvis.widget.min.js"></script>

<!-- EASY PIE CHARTS -->
<script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

<!-- SPARKLINES -->
<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- FastClick: For mobile devices -->
<script src="js/plugin/fastclick/fastclick.js"></script>

<!--[if IE 7]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="js/demo.js"></script>

<!-- MAIN APP JS FILE -->
<script src="js/app.js"></script>

<!-- PAGE RELATED PLUGIN(S)
<script src="..."></script>-->

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();

        function hide_divs(search) {
            $(".demo-icon-font").hide(); // hide all divs
            $("#all-icons-demo h2").hide();
            $("#all-icons-demo .alert").hide();
            $('.demo-icon-font > i[class*="'+search+'"]').parent().show(); // show the ones that match
        }

        function show_all() {
            $(".demo-icon-font").show()
            $("#all-icons-demo h2").show();
            $("#all-icons-demo .alert").show();
        }


        $("#fa-icon-search").keyup(function() {
            var search = $.trim(this.value);
            if (search === "") {
                show_all();
            }
            else {
                hide_divs(search);
            }
        });

    })

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>

</html>