<!doctype html>
<html lang="en">

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/ui-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2020 08:41:01 GMT -->
<head>
  <title>Wizard | Klorofil Pro - Bootstrap 4 Admin Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- App css -->
  <link href="admin/assets/css/bootstrap-custom.min.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="admin/assets/images/favicon.png">
</head>
<body>
  <!-- WRAPPER -->
  <div id="wrapper">


    <!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <div class="content-heading">
          <div class="heading-left">
            <h1 class="page-title">Wizard</h1>
            <p class="page-subtitle">A wizard divides a complex goal into multiple steps by separating sub-tasks or content into panes.</p>
          </div>
        </div>

        <div class="container-fluid">
          <div id="demo-wizard" class="wizard">
            <!-- steps container -->
            <div class="steps-container">
              <ul class="steps">
                <li data-step="1" class="active"><span class="badge badge-info">1</span>Account Type<span class="chevron"></span></li>
                <li data-step="2"><span class="badge">2</span>User Account<span class="chevron"></span></li>
                <li data-step="3"><span class="badge">3</span>Options<span class="chevron"></span></li>
                <li data-step="4" class="last"><span class="badge">4</span>Create Account</li>
              </ul>
            </div>
            <!-- end steps container -->

            <!-- steps content -->
            <div class="step-content">
              <div class="step-pane active" data-step="1">
                <form id="form1" data-parsley-validate novalidate>
                  <p>Choose your account type:</p>
                  <div class="fancy-radio">
                    <label>
                      <input type="radio" name="account-type" value="personal" required data-parsley-errors-container="#error-step1">
                      <span><i></i>Personal</span>
                    </label>
                  </div>
                  <div class="fancy-radio">
                    <label class="fancy-radio">
                      <input type="radio" name="account-type" value="business" >
                      <span><i></i>Business</span>
                    </label>
                  </div>
                  <div class="fancy-radio">
                    <label class="fancy-radio">
                      <input type="radio" name="account-type" value="enterprise">
                      <span><i></i>Enterprise</span>
                    </label>
                  </div>
                  <p id="error-step1"></p>
                </form>
              </div>
              <div class="step-pane" data-step="2">
                <form id="form2" data-parsley-validate novalidate>
                  <p>Please provide email, username and password<br/>
                    <em><small>Field marked * is required</small></em>
                  </p>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label" for="email">Email *</label>
                        <input type="email" id="email" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="password">Password *</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="password2">Repeat Password *</label>
                        <input type="password" id="password2" name="password2" class="form-control" required data-parsley-equalto="#password" data-parsley-equalto-message="Password doesn't match.">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="step-pane" data-step="3">
                <form id="form3" data-parsley-validate novalidate>
                  <div class="fancy-checkbox">
                    <label><input type="checkbox" name="newsletter"><span>Subscribe to monthly newsletter</span></label>
                  </div>
                  <div class="fancy-checkbox">
                    <label><input type="checkbox" name="terms"><span>I accept the <a href="#">Terms &amp; Agreements</a></span></label>
                  </div>
                </form>
              </div>
              <div class="step-pane" data-step="4">
                <p class="lead"><i class="fa fa-check-circle text-success"></i> All is well! Click "Create My Account" to complete.</p>
              </div>
            </div>
            <!-- end steps content -->

            <!-- actions -->
            <div class="actions">
              <button type="button" class="btn btn-outline-light btn-prev"><i class="fa fa-arrow-left"></i> Prev</button>
              <button type="button" class="btn btn-primary btn-next">Next <i class="fa fa-arrow-right"></i></button>
            </div>
            <!-- end actions -->
          </div>
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
  <script src="admin/assets/js/vendor.min.js"></script>

  <!-- Wizard Plugin -->
  <script src="admin/assets/plugins/fuelux/fuelux.min.js"></script>

  <!-- Sweet Alerts Plugin -->
  <script src="admin/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>

  <!-- Parsleyjs Validation Plugin -->
  <script src="admin/assets/plugins/parsleyjs/parsley.min.js"></script>

  <!-- Wizard Init -->
  <script src="admin/assets/js/pages/wizard.init.min.js"></script>

  <!-- App -->
  <script src="admin/assets/js/app.min.js"></script>
</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/ui-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2020 08:41:07 GMT -->
</html>