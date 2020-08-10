<!doctype html>
<html lang="en">

<head>
  <title>Dashboard | MedBook</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- Chartist css -->
  <link href="admin/assets/plugins/chartist/chartist.min.css" rel="stylesheet" type="text/css" />

  <!-- Chart.js css -->
  <link href="admin/assets/plugins/chart.js/Chart.min.css" rel="stylesheet" type="text/css" />

  <!-- Datatables core css -->
  <link href="admin/assets/plugins/datatables.net-bs4/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

  <!-- Datatables extensions css -->
  <link href="admin/assets/plugins/datatables.net-buttons-bs4/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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

    <!-- NAVBAR -->
    @include('admin.navBar')
    <!-- END NAVBAR -->

    <!-- LEFT SIDEBAR -->
    @include('admin.sideBar')
    <!-- END LEFT SIDEBAR -->

    <!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <div class="content-heading">
          <div class="heading-left">
            <h1 class="page-title">Medbook</h1>
            <p class="page-subtitle">Admin dashboard.</p>
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
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Overview</h3>
                  <div class="right">
                    {{-- <span class="card-info">Period: Oct 14, 2016 - Oct 21, 2016</span> --}}
                  </div>
                </div>
                <div class="card-body">
                  <!-- METRICS -->
                  <div class="row mb-5">
                    <div class="col-md-6 col-6">
                      <div class="widget-metric_6 animate">
                        <span class="icon-wrapper custom-bg-yellow"><i class="fa fa-user"></i></span>
                        <div class="right">
                          <span class="value">{{ count($total_patients) }}</span>
                          <span class="title">Patients</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-6">
                      <div class="widget-metric_6 animate">
                        <span class="icon-wrapper custom-bg-orange"><i class="fas fa-list"></i></span>
                        <div class="right">
                          <span class="value">{{ count($services) }}</span>
                          <span class="title">Services</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
            <h3 class="card-header">Recent Patients</h3>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable-export" class="table table-striped">
                  <thead class="thead-light">
                    <tr>
                      <th>Name</th>
                      <th>Date Of Birth</th>
                      <th>Gender</th>
                      <th>Type Of Service</th>
                      <th>General comments</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($patients as $patient)
                    <tr>
                      <td>{{ $patient->name }}</td>
                      <td>{{ $patient->dob }}</td>
                      <td>{{ $patient->gender->name }}</td>
                      <td>{{ $patient->service->name }}</td>
                      <td>{{ $patient->comment }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
                  <!-- END METRICS -->

                  <!-- HEADLINE CHART -->
{{--                   <form id="headlinechart-controls" class="mt-3 mb-5">
                    <span class="fancy-checkbox custom-bgcolor-blue">
                      <label><input type="checkbox" id="toggleWeeklyAvg"><span>Include Weekly Average</span></label>
                    </span>
                    <span class="fancy-checkbox custom-bgcolor-blue">
                      <label><input type="checkbox" id="toggleTension"><span>Straight Chart</span></label>
                    </span>
                  </form>
                  <canvas id="headline-chart" height="120"></canvas> --}}
                  <!-- END HEADLINE CHART -->
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      <!-- END MAIN CONTENT -->

      
      <!-- END RIGHT SIDEBAR -->

    </div>
    <!-- END MAIN -->

    <div class="clearfix"></div>
    
    <!-- footer -->
    @include('admin.footer')
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

    	{{-- <div id="demo-panel">
    		<a href="#" onclick="toggleDemoPanel(event);"><i class="fa fa-cog fa-spin"></i></a>
    		<iframe src="demo-panel.html"></iframe>
    	</div> --}}
    	<!-- END DEMO PANEL -->

  </div>
  <!-- END WRAPPER -->

  <!-- Vendor -->
  <script src="admin/assets/js/vendor.min.js"></script>

  <!-- Plugins -->
  <script src="admin/assets/plugins/chart.js/Chart.min.js"></script>
  <script src="admin/assets/plugins/chartist/chartist.min.js"></script>
  <script src="admin/assets/plugins/flot/jquery.canvaswrapper.js"></script>
  <script src="admin/assets/plugins/flot/jquery.colorhelpers.js"></script>
  <script src="admin/assets/plugins/flot/jquery.flot.js"></script>
  <script src="admin/assets/plugins/flot/jquery.flot.saturated.js"></script>
  <script src="admin/assets/plugins/flot/jquery.flot.browser.js"></script>
  <script src="admin/assets/plugins/flot/jquery.flot.drawSeries.js"></script>
  <script src="admin/assets/plugins/flot/jquery.flot.uiConstants.js"></script>
  <script src="admin/assets/plugins/flot/jquery.flot.resize.js"></script>
  <script src="admin/assets/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="admin/assets/plugins/datatables.net/jquery.dataTables.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-bs4/dataTables.bootstrap4.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="admin/assets/plugins/jszip/jszip.min.js"></script>
  <script src="admin/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/assets/plugins/datatables.net-buttons-bs4/buttons.bootstrap4.min.js"></script>

  <!-- Init -->
  <script src="admin/assets/js/pages/dashboard3.init.js"></script>

  <!-- App -->
  <script src="admin/assets/js/app.min.js"></script>
</body>

</html>