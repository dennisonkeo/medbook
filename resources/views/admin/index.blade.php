<!doctype html>
<html lang="en">

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2020 08:36:36 GMT -->
<head>
  <title>Dashboard | Klorofil Pro - Bootstrap 4 Admin Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- jQuery UI required by datepicker editable -->
  <link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

  <!-- JQVMap css -->
  <link href="assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet" type="text/css" />

  <!-- Bootstrap Tour css -->
  <link href="assets/plugins/bootstrap-tour/bootstrap-tour-standalone.min.css" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="assets/css/bootstrap-custom.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png">
</head>
<body>
  <!-- WRAPPER -->
  <div id="wrapper">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand fixed-top">
      <div class="navbar-brand d-none d-lg-block">
        <a href="index.html"><img src="assets/images/logo-white.png" alt="Klorofil Pro Logo" class="img-fluid logo"></a>
      </div>
      <div class="container-fluid p-0">
        <button id="tour-fullwidth" type="button" class="btn btn-default btn-toggle-fullwidth"><i class="ti-menu"></i></button>
        <form class="form-inline search-form mr-auto d-none d-sm-block">
          <div class="input-group">
            <input type="text" value="" class="form-control" placeholder="Search dashboard...">
            <div class="input-group-append">
              <button type="button" class="btn"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
        <div id="navbar-menu">
          <ul class="nav navbar-nav align-items-center">
            <li class="nav-item">
              <a href="#" class="dropdown-toggle btn-toggle-rightsidebar">
                <i class="ti-layout-sidebar-right"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                <i class="ti-bell"></i>
                <span class="badge bg-danger">5</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right notifications">
                <li class="dropdown-item">You have 5 new notifications</li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-hdd-o custom-bg-red"></i>
                    <p><span class="text">System space is almost full</span> <span class="timestamp">11 minutes ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-tasks custom-bg-yellow"></i>
                    <p><span class="text">You have 9 unfinished tasks</span> <span class="timestamp">20 minutes ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-book custom-bg-green2"></i>
                    <p><span class="text">Monthly report is available</span> <span class="timestamp">1 hour ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-bullhorn custom-bg-purple"></i>
                    <p><span class="text">Weekly meeting in 1 hour</span> <span class="timestamp">2 hours ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-check custom-bg-green"></i>
                    <p><span class="text">Your request has been approved</span> <span class="timestamp">3 days ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item"><a href="#" class="more">See all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help"></i> <span class="sr-only">Help</span></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#"><i class="ti-direction"></i> Basic Use</a></li>
                <li><a href="#"><i class="ti-server"></i> Working With Data</a></li>
                <li><a href="#"><i class="ti-lock"></i> Security</a></li>
                <li><a href="#"><i class="ti-light-bulb"></i> Troubleshooting</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../../../i.imgur.com/M701HZb.jpg" class="user-picture"" alt="Avatar"> <span>Samuel</span></a>
              <ul class="dropdown-menu dropdown-menu-right logged-user-menu">
                <li><a href="#"><i class="ti-user"></i> <span>My Profile</span></a></li>
                <li><a href="appviews-inbox.html"><i class="ti-email"></i> <span>Message</span></a></li>
                <li><a href="#"><i class="ti-settings"></i> <span>Settings</span></a></li>
                <li><a href="page-lockscreen.html"><i class="ti-power-off"></i> <span>Logout</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <nav>
        <ul class="nav" id="sidebar-nav-menu">
          <li class="menu-group">Main</li>
          <li class="panel">
            <a href="#dashboards" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="true" class="active"><i class="ti-dashboard"></i> <span class="title">Dashboards</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="dashboards" class="collapse show ">
              <ul class="submenu">
                <li><a href="index.html" class="active">Dashboard v1</a></li>
                <li><a href="dashboard2.html" class="">Dashboard v2</a></li>
                <li><a href="dashboard3.html" class="">Dashboard v3</a></li>
                <li><a href="dashboard4.html" class="">Dashboard v4</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#subLayouts" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="" class=""><i class="ti-layout"></i> <span class="title">Layouts</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="subLayouts"  class="collapse  ">
              <ul class="submenu">
                <li><a href="layout-topnav.html" class="">Top Navigation</a></li>
                <li><a href="layout-minified.html" class="">Minified</a></li>
                <li><a href="layout-fullwidth.html" class="">Fullwidth</a></li>
                <li><a href="layout-default.html" class="">Default</a></li>
                <li><a href="layout-grid.html">Grid</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#forms" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="" class=""><i class="ti-receipt"></i> <span class="title">Forms</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="forms" class="collapse  ">
              <ul class="submenu">
                <li><a href="forms-inputs.html" class="">Inputs</a></li>
                <li><a href="forms-multiselect.html" class="">Multiselect</a></li>
                <li><a href="forms-input-pickers.html" class="">Input Pickers</a></li>
                <li><a href="forms-input-sliders.html" class="">Input Sliders</a></li>
                <li><a href="forms-select2.html" class="">Select2</a></li>
                <li><a href="forms-inplace-editing.html" class="">In-place Editing</a></li>
                <li><a href="forms-dragdropupload.html" class="">Drag and Drop Upload</a></li>
                <li><a href="forms-layouts.html" class="">Form Layouts</a></li>
                <li><a href="forms-validation.html" class="">Form Validation</a></li>
                <li><a href="forms-texteditor.html" class="">Text Editor</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#appViews" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="" class=""><i class="ti-layout-tab-window"></i> <span class="title">App Views</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="appViews" class="collapse  ">
              <ul class="submenu">
                <li><a href="appviews-project-detail.html" class="">Project Details</a></li>
                <li><a href="appviews-projects.html" class="">Projects</a></li>
                <li><a href="appviews-inbox.html" class="">Inbox <span class="badge badge-danger">8</span></a></li>
                <li><a href="appviews-file-manager.html" class="">File Manager</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#tables" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="" class=""><i class="ti-layout-grid2"></i> <span class="title">Tables</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="tables" class="collapse  ">
              <ul class="submenu">
                <li><a href="tables-static.html" class="">Static Tables</a></li>
                <li><a href="tables-dynamic.html" class="">Dynamic Tables</a></li>
              </ul>
            </div>
          </li>
          <li class="menu-group">Components</li>
          <li class="panel">
            <a href="#uiElements" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="" class=""><i class="ti-panel"></i> <span class="title">UI Elements</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="uiElements" class="collapse  ">
              <ul class="submenu">
                <li><a href="ui-sweetalert.html" class="">Sweet Alert 2</a></li>
                <li><a href="ui-treeview.html" class="">Tree View</a></li>
                <li><a href="ui-wizard.html" class="">Wizard</a></li>
                <li><a href="ui-dragdrop-panel.html" class="">Drag &amp; Drop Panel</a></li>
                <li><a href="ui-nestable.html" class="">Nestable</a></li>
                <li><a href="ui-gauge.html" class="">Gauge <span class="badge badge-success">NEW</span></a></li>
                <li><a href="ui-panels.html" class="">Panels</a></li>
                <li><a href="ui-progressbars.html" class="">Progress Bars</a></li>
                <li><a href="ui-tabs.html" class="">Tabs</a></li>
                <li><a href="ui-buttons.html" class="">Buttons <span class="badge badge-info">UPDATED</span></a></li>
                <li><a href="ui-bootstrap.html" class="">Bootstrap UI</a></li>
                <li><a href="ui-social-buttons.html" class="">Social Buttons</a></li>
                <li><a href="ui-icons.html" class="">Icons</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#charts" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="" class=""><i class="ti-pie-chart"></i> <span class="title">Charts</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="charts" class="collapse  ">
              <ul class="submenu">
                <li><a href="charts-chartjs.html" class="">Chart.js</a></li>
                <li><a href="charts-chartist.html" class="">Chartist</a></li>
                <li><a href="charts-flot.html" class="">Flot Chart</a></li>
                <li><a href="charts-sparkline.html" class="" >Sparkline Chart</a></li>
              </ul>
            </div>
          </li>
          <li><a href="widgets.html" class=""><i class="ti-widget"></i> <span class="title">Widgets</span></a></li>
          <li><a href="notifications.html" aria-expanded="" class=""><i class="ti-bell"></i> <span class="title">Notifications</span> <span class="badge badge-danger">15</span></a></li>
          <li class="panel">
            <a href="#maps" data-toggle="collapse" data-parent="#sidebar-nav-menu" class=""><i class="ti-map"></i> <span class="title">Maps</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="maps" class="collapse  ">
              <ul class="submenu">
                <li><a href="maps-jqvmap.html" class="">JQVMap</a></li>
                <li><a href="maps-mapael.html" class="">Mapael</a></li>
              </ul>
            </div>
          </li>
          <li class="menu-group">Extras</li>
          <li class="panel">
            <a href="#subPages" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="" class=""><i class="ti-files"></i> <span class="title">Pages</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="subPages" class="collapse  ">
              <ul class="submenu">
                <li><a href="page-profile.html" class="">Profile</a></li>
                <li><a href="page-login.html">Login</a></li>
                <li><a href="page-register.html">Register</a></li>
                <li><a href="page-lockscreen.html">Lockscreen</a></li>
                <li><a href="page-forgot-password.html">Forgot Password</a></li>
                <li><a href="page-404.html">Page 404</a></li>
                <li><a href="page-500.html">Page 500</a></li>
                <li><a href="page-blank.html" class="">Blank Page</a></li>
              </ul>
            </div>
          </li>
          <li><a href="typography.html" class=""><i class="ti-paragraph"></i> <span class="title">Typography</span></a></li>
          <li class="panel">
            <a href="#" data-toggle="collapse" data-target="#submenuDemo" data-parent="#sidebar-nav-menu"><i class="ti-menu"></i> <span class="title">Multilevel Menu</span><i class="icon-submenu ti-angle-left"></i></a>
            <div id="submenuDemo" class="collapse">
              <ul class="submenu">
                <li class="panel">
                  <a href="#" data-toggle="collapse" data-target="#submenuDemoLv2">Submenu 1 <i class="icon-submenu ti-angle-left"></i></a>
                  <div id="submenuDemoLv2" class="collapse">
                    <ul class="submenu">
                      <li><a href="#">Another menu level</a></li>
                      <li><a href="#" class="active">Another menu level</a></li>
                      <li><a href="#">Another menu level</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">Submenu 2</a></li>
                <li><a href="#">Submenu 3</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
      </nav>
    </div>
    <!-- END LEFT SIDEBAR -->

    <!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <div class="content-heading">
          <div class="heading-left">
            <h1 class="page-title">Welcome to Klorofil Pro</h1>
            <p class="page-subtitle">Bootstrap admin dashboard template with drag and drop panel.</p>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Parent</a></li>
              <li class="breadcrumb-item active">Current</li>
            </ol>
          </nav>
        </div>

        <div class="container-fluid">
          <!-- TOP METRICS -->
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-metric_1 animate">
                <span class="icon-wrapper custom-bg-orange"><i class="fa fa-area-chart"></i></span>
                <div class="right">
                  <span class="value">$3642 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                  <span class="title">PROFIT <span class="change text-indicator-green">(+ $254)</span></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-metric_1 animate">
                <span class="icon-wrapper custom-bg-lightseagreen"><i class="fa fa-shopping-cart"></i></span>
                <div class="right">
                  <span class="value">$8740 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                  <span class="title">REVENUE <span class="change text-indicator-green">(+ $364)</span></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-metric_1 animate">
                <span class="icon-wrapper custom-bg-blue2"><i class="fa fa-user"></i></span>
                <div class="right">
                  <span class="value">132567 <i class="change-icon change-down fa fa-sort-down text-indicator-red"></i></span>
                  <span class="title">TOTAL USER <span class="change text-indicator-red">(- 23)</span></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-metric_1 animate">
                <span class="icon-wrapper custom-bg-purple"><i class="fa fa-envelope"></i></span>
                <div class="right">
                  <span class="value">56.72% <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                  <span class="title">CLICK <span class="change text-indicator-green">(+ 12.64%)</span></span>
                </div>
              </div>
            </div>
          </div>
          <!-- END TOP METRICS -->

          <div class="row sortable-grid">
            <div class="col-lg-8 sortable-item">
              <!-- CUSTOMER DEMOGRAPHIC -->
              <div class="card card-sidebar sidebar-right">
                <h3 class="card-header">US Customer Demographic</h3>
                <div class="card-body">
                  <div class="left p-0">
                    <div id="us-customers-map" style="height: 502px;"></div>
                  </div>
                  <div class="right">
                    <div class="sidebar-section">
                      <h3 class="section-title">Top Locations</h3>
                      <table class="table table-borderless table-sm mb-0">
                        <thead class="sr-only">
                          <tr><th>No.</th><th>Location</th><th class="text-right">Count</th></tr>
                        </thead>
                        <tbody>
                          <tr><td>1.</td><td>Alabama</td><td class="text-right">2936</td></tr>
                          <tr><td>2.</td><td>California</td><td class="text-right">2812</td></tr>
                          <tr><td>3.</td><td>Florida</td><td class="text-right">2735</td></tr>
                        </tbody>
                      </table>
                      <a href="#" class="font-13">See all locations</a>
                    </div>
                    <div class="sidebar-section">
                      <h3 class="section-title">Gender</h3>
                      <div class="progress">
                        <div class="progress-bar custom-bg-blue2" style="width: 35%">
                          <span class="sr-only">35%</span>
                        </div>
                        <div class="progress-bar custom-bg-blue3" style="width: 65%">
                          <span class="sr-only">65%</span>
                        </div>
                      </div>
                      <div class="square-legend">
                        <ul class="list-unstyled list-inline mb-0">
                          <li class="list-inline-item"><span class="custom-bg-blue2"></span> 35% Male </li>
                          <li class="list-inline-item"><span class="custom-bg-blue3"></span> 65% Female </li>
                        </ul>
                      </div>
                    </div>
                    <div class="sidebar-section mb-0">
                      <h3 class="section-title">Age</h3>
                      <div class="demo-flot-chart" id="age-chart" style="height:160px"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CUSTOMER DEMOGRAPHIC -->
            </div>

            <div class="col-lg-4 sortable-item">
              <!-- RESOURCE ACTIVITY -->
              <div class="card">
                <h3 class="card-header">Resource Activity</h3>
                <div class="card-body">
                  <div class="activity-gauge">
                    <div id="gauge" class="d-block mx-auto"></div>
                  </div>
                </div>
              </div>
              <!-- END RESOURCE ACTIVITY -->

              <!-- SALES CHART -->
              <div class="card">
                <h3 class="card-header">Weekly Sales</h3>
                <div class="card-body">
                  <div class="widget-metric_11">
                    <div id="sales-chart" style="height:105px"></div>
                    <div class="bottom d-flex align-items-center justify-content-between">
                      <div class="left">
                        <span class="value">$70,183</span>
                        <span class="change"><span class="text-indicator-green"><i class="fa fa-caret-up"></i> 18%</span> vs. last week</span>
                      </div>
                      <div class="right">
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-file-text-o"></i> View Sales Report</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SALES CHART -->
            </div>
          </div>

          <div class="row sortable-grid">
            <!-- CHAT SUPPORT -->
            <div class="col-md-12 sortable-item">
              <div class="card">
                <h3 class="card-header">Live Chat Support</h3>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div id="online-visitors-dashboard" class="online-visitors">
                        <div class="count" id="tour-online-count">
                          <span class="number">70</span>
                          <span>Visitors online</span>
                        </div>
                        <div class="progress traffic-sources">
                          <div class="progress-bar source referral" style="width: 10%">
                            <span>10%</span>
                          </div>
                          <div class="progress-bar source organic" style="width: 40%">
                            <span>40%</span>
                          </div>
                          <div class="progress-bar source direct" style="width: 27%">
                            <span>27%</span>
                          </div>
                          <div class="progress-bar source email" style="width: 23%">
                            <span>23%</span>
                          </div>
                        </div>
                        <div class="square-legend">
                          <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><span class="referral"></span> Referral</li>
                            <li class="list-inline-item"><span class="organic"></span> Organic</li>
                            <li class="list-inline-item"><span class="direct"></span>  Direct</li>
                            <li class="list-inline-item"><span class="email"></span> Email</li class="list-inline-item">
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <table class="table table-minimal table-chat-support datatable mb-0">
                        <thead>
                          <tr><th>VISITOR</th><th>PAGE</th><th>DEVICE</th><th>BROWSER</th><th>ACTION</th></tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover" data-visitor-name="Bruce Evans" data-visitor-img="assets/images/people/male1.png"><i class="fa fa-vcard-o"></i></span> <a href="#">Bruce</a></td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/men/shoes">Shoes | Men Apparels</span></td>
                            <td><i class="fa fa-desktop"></i></td>
                            <td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
                            <td><button class="btn btn-success btn-sm">RESPOND CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/how-to/shop">How to shop | FAQ | Help</span></td>
                            <td><i class="fa fa-desktop"></i></td>
                            <td><i class="fa fa-edge edge-color"></i> Edge</td>
                            <td><button class="btn btn-outline-light btn-sm">INITIALIZE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover" data-visitor-name="Joey Felicia" data-visitor-img="assets/images/people/female1.png"><i class="fa fa-vcard-o"></i></span> <a href="#">Joey</a></td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/men/dress">Dress | Women Apparels</span></td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><i class="fa fa-chrome chrome-color"></i> Chrome</td>
                            <td><button class="btn btn-danger btn-sm">CLOSE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/men/shoes">Shoes | Men Apparels</span></td>
                            <td><i class="fa fa-desktop"></i></td>
                            <td><i class="fa fa-safari safari-color"></i> Safari</td>
                            <td><button class="btn btn-success btn-sm">RESPOND CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span></td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><i class="fa fa-window-maximize"></i> Other Browser</td>
                            <td><button class="btn btn-danger btn-sm">CLOSE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/how-to/pay">Payment Method | FAQ</span></td>
                            <td><i class="fa fa-desktop"></i></td>
                            <td><i class="fa fa-edge edge-color"></i> Edge</td>
                            <td><button class="btn btn-outline-light btn-sm">INITIALIZE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span></td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
                            <td><button class="btn btn-outline-light btn-sm">INITIALIZE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span></td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
                            <td><button class="btn btn-outline-light btn-sm">INITIALIZE CHAT</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END CHAT SUPPORT -->
          </div>

          <div class="row sortable-grid">
            <div class="col-lg-7 sortable-item">
              <!-- SALES STATISTIC -->
              <div class="card" id="tour-sales-stat">
                <h3 class="card-header">Sales Statistic</h3>
                <div class="card-body">
                  <div class="d-md-flex justify-content-between align-items-center">
                    <div class="d-md-flex">
                      <div class="chart-metric">
                        <span class="title"><span class="data-legend custom-bg-orange2"></span> Earnings</span>
                        <span class="value">$5,423</span> <span class="change up"><i class="ti-arrow-up"></i> 16%</span>
                      </div>
                      <div class="chart-metric ml-md-3 mt-2 mt-md-0">
                        <span class="title"><span class="data-legend custom-bg-blue3"></span> Sales</span>
                        <span class="value">1563</span> <span class="change down"><i class="ti-arrow-down"></i> 7%</span>
                      </div>
                    </div>
                    <div class="text-md-right ml-md-3 mt-2 mt-md-0">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-light btn-sm">Day</button>
                        <button type="button" class="btn btn-outline-light btn-sm active">Week</button>
                        <button type="button" class="btn btn-outline-light btn-sm">Month</button>
                      </div>
                    </div>
                  </div>
                  <div style="height: 250px;" id="sales-stat" class="mt-4"></div>
                </div>
              </div>
              <!-- END SALES STATISTIC -->
            </div>
            <div class="col-lg-5 sortable-item">
              <!-- SHARES GOAL -->
              <div class="card">
                <h3 class="card-header">Shares Goal</h3>
                <div class="card-body">
                  <div id="progress-share" class="progress-semicircle" data-max="500">
                    <div class="bar-overflow">
                      <div class="bar"></div>
                    </div>
                    <span class="content">
                      <i class="fa fa-share-alt icon"></i>
                      <span class="value">380</span>

                      <h4 class="heading">Share more products!</h4>
                      <p class="text-muted">Get free product if you reach 500 shares goal</p>
                      <button type="button" class="btn btn-primary">Share Now</button>
                    </span>
                  </div>
                </div>
              </div>
              <!-- END SHARES GOAL -->
            </div>
          </div>

          <div class="row sortable-grid">
            <div class="col-lg-6 sortable-item">
              <!-- PROFILE COMPLETENESS METER -->
              <div class="card">
                <h3 class="card-header">Profile Completeness Meter</h3>
                <div class="card-body">
                  <div class="completeness-meter mb-4">
                    <p class="complete-info">Your profile is almost awesome</p>
                    <div class="progress mb-4">
                      <div class="progress-bar bg-info" role="progressbar" data-from="0" data-to="60">0%</div>
                    </div>
                    <p>Please provide information below:</p>
                    <ul class="list-unstyled fa-ul list-complete-profile">
                      <li class="done"><i class="fa-li fa fa-check-circle"></i> Confirm your email</li>
                      <li class="done"><i class="fa-li fa fa-check-circle"></i> Setup two-way authentication</li>
                      <li>
                        <i class="fa-li fa fa-circle-o"></i>
                        <div class="editable-wrapper">
                          <span class="editable editable-phone">Add your phone number</span>
                        </div>
                      </li>
                      <li>
                        <i class="fa-li fa fa-circle-o"></i>
                        <div class="editable-wrapper">
                          <span class="editable editable-select">Select sex</span>
                        </div>
                      </li>
                      <li>
                        <i class="fa-li fa fa-circle-o"></i>
                        <div class="editable-wrapper">
                          <span class="editable editable-dob">Select date of birth</span>
                        </div>
                      </li>
                      <li>
                        <i class="fa-li fa fa-circle-o"></i>
                        <div class="editable-wrapper">
                          <span class="editable editable-nickname">Add your nickname</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- END PROFILE COMPLETENESS METER -->
            </div>
            <div class="col-lg-6 sortable-item">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Customer Review</h3>
                  <div class="right">
                    <span class="link"><a href="#">View all reviews (251)</a></span>
                  </div>
                </div>
                <div class="card-body">
                  <div class="customer-review">
                    <div class="rating mb-4 margin-bottom-30">
                      <span class="number">4.7</span>
                      <span class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-full"></i>
                      </span>
                    </div>
                    <p class="review-text text-muted">Sit odio nostrud admodum eu, eu duo rationibus reprimique, sit ut feugiat expetendis interesset. Ut usu wisi malorum, cu eam dolore admodum salutatus. Volumus denique epicurei ex mel, ut eius mandamus nam, alterum detraxit assueverit in cum. Ne quem scribentur eum, summo integre ius ei. Vim in summo ludus. Has ut ferri evertitur. His ut nulla noluisse inciderint.</p>

                    <div class="review-data">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="footer-info">
                            <span class="title">Reviewed by:</span>
                            <img src="assets/images/people/female2.png" class="picture img-circle" alt="">
                            <div class="right">
                              <span class="primary-info">Donna Jensen</span>
                              <span class="secondary-info">Jul 20, 2017</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="footer-info">
                            <span class="title">Review for:</span>
                            <span class="primary-info">Classy Wool Jacket</span>
                            <span class="secondary-info">Order #: <a href="#">764537346</a></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="controls">
                      <span><i class="fa fa-reply"></i> <a href="#">Respond</a></span>
                      <span><i class="fa fa-share-alt"></i> <a href="#">Share</a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row sortable-grid">
            <div class="col-lg-3">
              <div class="card">
                <h3 class="card-header">Last Campaign</h3>
                <div class="card-body p-0">
                  <ul class="list-unstyled list-widget-vertical" id="last-campaign-metric">
                    <li>
                      <div class="widget-metric_2 animate">
                        <i class="fa fa-envelope-o icon"></i>
                        <div class="right">
                          <span class="title">EMAIL SENT</span>
                          <span class="value">64889</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="widget-metric_2 animate">
                        <i class="fa fa-envelope-open-o icon"></i>
                        <div class="right">
                          <span class="title">OPENED</span>
                          <span class="value">28652</span>
                          <span class="percentage custom-text-orange2">44.15%</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="widget-metric_2 animate">
                        <i class="fa fa-hand-pointer-o icon"></i>
                        <div class="right">
                          <span class="title">CLICKED</span>
                          <span class="value">9643</span>
                          <span class="percentage custom-text-orange2">14.86%</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="card">
                <h3 class="card-header">Email Opens by Location</h3>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <h3 class="h6">Top Countries</h3>
                      <table class="table table-minimal table-no-border m-0">
                        <thead>
                          <tr>
                            <th>COUNTRY</th>
                            <th>OPENS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>United States</td>
                            <td>2936</td>
                          </tr>
                          <tr>
                            <td>Algeria</td>
                            <td>2812</td>
                          </tr>
                          <tr>
                            <td>Russia</td>
                            <td>2735</td>
                          </tr>
                          <tr>
                            <td>France</td>
                            <td>2674</td>
                          </tr>
                          <tr>
                            <td>Mexico</td>
                            <td>2584</td>
                          </tr>
                          <tr>
                            <td>Germany</td>
                            <td>1986</td>
                          </tr>
                          <tr>
                            <td>Brazil</td>
                            <td>1921</td>
                          </tr>
                          <tr>
                            <td>Canada</td>
                            <td>1865</td>
                          </tr>
                          <tr>
                            <td>Indonesia</td>
                            <td>1352</td>
                          </tr>
                          <tr>
                            <td>China</td>
                            <td>1322</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-9">
                      <div id="map-email-opens" style="height: 400px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- MINI BAR CHARTS -->
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-mini-bar">
                <div id="mini-bar-chart1" class="mini-bar-chart">38,28,45,30,42,70,100</div>
                <span>5323 LIKES</span>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-mini-bar">
                <div id="mini-bar-chart2" class="mini-bar-chart">43,45,78,23,80,100,90</div>
                <span>65K FOLLOWERS</span>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-mini-bar">
                <div id="mini-bar-chart3" class="mini-bar-chart">22,42,65,53,77,44,80</div>
                <span>20K SUBSCRIBERS</span>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-mini-bar">
                <div id="mini-bar-chart4" class="mini-bar-chart">43,76,34,55,86,45,77</div>
                <span>500K USERS</span>
              </div>
            </div>
          </div>
          <!-- END MINI BAR CHARTS -->

          <!-- PERFORMANCE INDEX -->
          <div class="widget">
            <ul class="list-unstyled list-widget-horizontal row">
              <li class="col-md-3">
                <div class="widget-metric_3">
                  <span class="title text-muted">Your Performance Index</span>
                  <span class="value">8.73</span>
                  <span class="note">
                    <span class="text-indicator-green">+13.42%</span> since last month</span>
                </div>
              </li>
              <li class="col-md-3">
                <div class="widget-metric_4">
                  <span class="title text-muted">Sales Performance</span>
                  <span class="chart inlinesparkline" id="sales-performance">20,70,100,55,80,40,64,90,150</span>
                  <span class="note">
                    <span class="text-indicator-red">-3.74%</span> since last month</span>
                </div>
              </li>
              <li class="col-md-3">
                <div class="widget-metric_5">
                  <span class="title text-muted">Customer Satisfaction</span>
                  <ul class="list-inline list-value">
                    <li class="list-inline-item">
                      <i class="fa fa-frown-o"></i>
                      <span class="percentage text-indicator-red">10%</span>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-meh-o"></i>
                      <span class="percentage">13%</span>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-smile-o"></i>
                      <span class="percentage text-indicator-green">77%</span>
                    </li>
                  </ul>
                  <span class="note">See detailed scoring <a href="#">here</a></span>
                </div>
              </li>
              <li class="col-md-3">
                <div class="widget-metric_3">
                  <span class="title text-muted">Avg. Handle Time</span>
                  <span class="value">1m:24s</span>
                  <span class="note">Min: 30s &nbsp; Max: 2m:15s</span>
                </div>
              </li>
            </ul>
          </div>
          <!-- END PERFORMANCE INDEX -->
        </div>
      </div>
      <!-- END MAIN CONTENT -->

      <!-- RIGHT SIDEBAR -->
      <div id="sidebar-right" class="right-sidebar">
        <div class="sidebar-widget">
          <h4 class="widget-heading"><i class="fa fa-calendar"></i> TODAY</h4>
          <p class="date">Wednesday, 22 December</p>

          <div class="row mt-4">
            <div class="col-4">
              <a href="#">
                <div class="icon-transparent-area custom-color-blue first">
                  <i class="fa fa-tasks"></i> <span>Tasks</span>
                  <span class="badge">5</span>
                </div>
              </a>
            </div>
            <div class="col-4">
              <a href="#">
                <div class="icon-transparent-area custom-color-green">
                  <i class="fa fa-envelope"></i> <span>Mail</span>
                  <span class="badge">12</span>
                </div>
              </a>
            </div>
            <div class="col-4">
              <a href="#">
                <div class="icon-transparent-area custom-color-orange last">
                  <i class="fa fa-user-plus"></i> <span>Users</span>
                  <span class="badge">24</span>
                </div>
              </a>
            </div>
          </div>
        </div>
  
        <div class="sidebar-widget">
          <div class="widget-header">
            <h4 class="widget-heading">YOUR APPS</h4>
            <a href="#" class="show-all">Show all</a>
          </div>
          <div class="row">
            <div class="col-3">
              <a href="#" class="icon-app" title="Dropbox" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-dropbox dropbox-color"></i>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="icon-app" title="WordPress" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-wordpress wordpress-color"></i>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="icon-app" title="Drupal" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-drupal drupal-color"></i>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="icon-app" title="Github" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-github github-color"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="sidebar-widget">
          <div class="widget-header">
            <h4 class="widget-heading">MY PROJECTS</h4>
            <a href="#" class="show-all">Show all</a>
          </div>
          <ul class="list-unstyled list-project-progress">
            <li>
              <a href="#" class="project-name">Project XY</a>
              <div class="progress progress-transparent custom-color-orange">
                <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%;"></div>
              </div>
              <span class="percentage">67%</span>
            </li>
            <li>
              <a href="#" class="project-name">Growth Campaign</a>
              <div class="progress progress-transparent custom-color-blue">
                <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%"></div>
              </div>
              <span class="percentage">23%</span>
            </li>
            <li>
              <a href="#" class="project-name">Website Redesign</a>
              <div class="progress progress-transparent custom-color-green">
                <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%"></div>
              </div>
              <span class="percentage">87%</span>
            </li>
          </ul>
        </div>

        <div class="sidebar-widget">
          <div class="widget-header">
            <h4 class="widget-heading">MY FILES</h4>
            <a href="#" class="show-all">Show all</a>
          </div>
          <ul class="list-unstyled list-justify list-file-simple">
            <li><a href="#"><i class="fa fa-file-word-o"></i>Proposal_draft.docx</a> <span>4 MB</span></li>
            <li><a href="#"><i class="fa fa-file-pdf-o"></i>Manual_Guide.pdf</a> <span>20 MB</span></li>
            <li><a href="#"><i class="fa fa-file-zip-o"></i>all-project-files.zip</a> <span>315 MB</span></li>
            <li><a href="#"><i class="fa fa-file-excel-o"></i>budget_estimate.xls</a> <span>1 MB</span></li>
          </ul>
        </div>

        <p class="text-center"><a href="#" class="btn btn-primary btn-sm">More Widgets</a></p>
      </div>
      <!-- END RIGHT SIDEBAR -->

    </div>
    <!-- END MAIN -->

    <div class="clearfix"></div>
    
    <!-- footer -->
    <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; 2020 <a href="https://www.themeineed.com/" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- end footer -->

    <!-- DEMO PANEL -->
    	<!-- for demo purpose only, you should remove it on your project directory -->
    	<script type="text/javascript">
    		var toggleDemoPanel = function(e) {
    			e.preventDefault();

    			var panel = document.getElementById( 'demo-panel' );
    			if ( panel.className ) panel.className = '';
    			else panel.className = 'active';
    		}
    	</script>

    	<div id="demo-panel">
    		<a href="#" onclick="toggleDemoPanel(event);"><i class="fa fa-cog fa-spin"></i></a>
    		<iframe src="demo-panel.html"></iframe>
    	</div>
    	<!-- END DEMO PANEL -->

  </div>
  <!-- END WRAPPER -->

  <!-- Vendor -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- Plugins -->
  <script src="assets/plugins/jquery-jeditable/jquery.jeditable.min.js"></script>
  <script src="assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>
  <script src="assets/plugins/jquery-jeditable/jquery.jeditable.masked.min.js"></script>
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script> <!-- required by datepicker plugin -->
  <script src="assets/plugins/jquery-jeditable/jquery.jeditable.datepicker.min.js"></script>
  <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
  <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="assets/plugins/flot/jquery.canvaswrapper.js"></script>
  <script src="assets/plugins/flot/jquery.colorhelpers.js"></script>
  <script src="assets/plugins/flot/jquery.flot.js"></script>
  <script src="assets/plugins/flot/jquery.flot.saturated.js"></script>
  <script src="assets/plugins/flot/jquery.flot.browser.js"></script>
  <script src="assets/plugins/flot/jquery.flot.drawSeries.js"></script>
  <script src="assets/plugins/flot/jquery.flot.uiConstants.js"></script>
  <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
  <script src="assets/plugins/flot/jquery.flot.legend.js"></script>
  <script src="assets/plugins/flot/jquery.flot.hover.js"></script>
  <script src="assets/plugins/flot/jquery.flot.time.js"></script>
  <script src="assets/plugins/jquery.flot.tooltip/jquery.flot.tooltip.min.js"></script>
  <script src="assets/plugins/justgage/raphael.min.js"></script>
  <script src="assets/plugins/justgage/justgage.min.js"></script>
  <script src="assets/plugins/datatables.net/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatables.net-bs4/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
  <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="assets/plugins/bootstrap-tour/bootstrap-tour-standalone.js"></script>

  <!-- Init -->
  <script src="assets/js/pages/dashboard.init.js"></script>
  <script src="assets/js/pages/ui-dragdroppanel.init.min.js"></script>

  <!-- App -->
  <script src="assets/js/app.min.js"></script>
</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2020 08:38:01 GMT -->
</html>