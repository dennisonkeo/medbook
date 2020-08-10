<!doctype html>
<html lang="en">

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/tables-dynamic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2020 08:40:50 GMT -->
<head>
  <title>Patients | MedBook</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- Datatables core css -->
  <link href="admin/assets/plugins/datatables.net-bs4/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

  <!-- Datatables extensions css -->
  <link href="admin/assets/plugins/datatables.net-buttons-bs4/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/plugins/datatables.net-colreorder-bs4/colreorder.bootstrap4.min.html" rel="stylesheet" type="text/css" />

  <!-- Datepicker css -->
  <link href="admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="admin/assets/css/bootstrap-custom.min.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="admin/assets/images/favicon.png">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
            <h1 class="page-title">Patients</h1>
            <p class="page-subtitle">Manage Patients here.</p>

          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Parent</a></li>
              <li class="breadcrumb-item active">Current</li>
            </ol>
          </nav>
        </div>



          <!-- DATATABLE EXPORT -->
          <div class="card">
            <div class="card-header">
              {{-- <h3 class="card-title">Manage Patients</h3> --}}
               <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add Patient</button>
            </div>
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
                      <th>ACTION</th>
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
                      <td>
                        <button class="btn btn-primary" onclick="edit_patient({{ $patient->id }})" href="javascript:void(0);" id="edit">Edit </button>
                        <button class="btn btn-danger" onclick="deletePatient({{ $patient->id }})" id="delete">Delete </i></button>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END DATATABLE EXPORT -->

          
        </div>
      </div>
      <!-- END MAIN CONTENT -->

     

    </div>
    <!-- END MAIN -->

    <div class="clearfix"></div>
    
    <!-- footer -->


    @include('admin.footer')
    <!-- end footer -->

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
      <form method="POST" action="add-patient">
      {{ csrf_field() }}
      <label>Patient Name</label>                       
      <input type="text" class="form-control input-lg" id="name" placeholder="" name="name" required="" autofocus>
      <br>

      <label>Gender</label>                       
      <select class="form-control" name="gender">
                          @foreach($genders as $gender)
                      <option value="{{ $gender->id }}">{{ $gender->name }}</option>

                @endforeach

                        </select>
      <br>

      <label>Date Of Birth</label>                       
      <input data-provide="datepicker" data-date-autoclose="true" name="dob" class="form-control" data-date-format="yyyy-mm-dd">
      <small>e.g 2000-04-01</small>
      <br>

      <label>Type Of Service</label>                       
      <select class="form-control" name="service">
        @foreach($services as $service)
                      <option value="{{ $service->id }}">{{ $service->name }}</option>

                @endforeach

                        </select>
      <br>

      <label>General Comments</label>                       
      <textarea type="text" class="form-control input-lg"  placeholder="" name="comment" required="" autofocus></textarea>
      <br>
      
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"   class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

      <!-- Modal -->
<div class="modal fade" id="upadateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
      <form method="POST" action="add-patient" id="form">
      {{ csrf_field() }}
      <label>Patient Name</label>                       
      <input type="text" class="form-control input-lg" id="name" placeholder="" name="name" required="" autofocus>
      <br>
      <input type="hidden" name="id">

      <label>Gender</label>                       
      <select class="form-control" name="gender">
                          @foreach($genders as $gender)
                      <option value="{{ $gender->id }}">{{ $gender->name }}</option>

                @endforeach

                        </select>
      <br>

      <label>Date Of Birth</label>                       
      <input type="text" class="form-control input-lg" placeholder="" name="dob" required="" autofocus>
      <small>e.g 2000-04-01</small>
      <br>

      <label>Type Of Service</label>                       
      <select class="form-control" name="service">
        @foreach($services as $service)
                      <option value="{{ $service->id }}">{{ $service->name }}</option>

                @endforeach

                        </select>
      <br>

      <label>General Comments</label>                       
      <textarea type="text" class="form-control input-lg"  placeholder="" name="comment" required="" autofocus></textarea>
      <br>
      
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="save()"  class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

  </div>
  <!-- END WRAPPER -->

  <!-- Vendor -->
  <script src="admin/assets/js/vendor.min.js"></script>

  <!-- Datables Core -->
  <script src="admin/assets/plugins/datatables.net/jquery.dataTables.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-bs4/dataTables.bootstrap4.min.js"></script>

  <!-- Datepicker Plugin -->
  <script src="admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

  <!-- Datables Extension -->
  <script src="admin/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="admin/assets/plugins/jszip/jszip.min.js"></script>
  <script src="admin/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/assets/plugins/datatables.net-buttons-bs4/buttons.bootstrap4.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-colreorder/dataTables.colReorder.min.js"></script>
  <script src="admin/assets/plugins/datatables.net-colreorder-bs4/colReorder.bootstrap4.min.js"></script>

  <!-- Datatables Init -->
  <script src="admin/assets/js/pages/tables-dynamic.init.min.js"></script>

  <!-- App -->
  <script src="admin/assets/js/app.min.js"></script>


  <script type="text/javascript">
     function save()
 {

  // if()

      // ajax adding data to database
       Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes!',
                    showLoaderOnConfirm: true,
                  }).then((result) => {
                    if (result.value) {
                         $.ajax({
                              url : "{{ route('update-patient') }}",
                              type: "POST",
                              data: $('#form').serialize(),
                              _token: '{{csrf_token()}}',
                              dataType: "JSON",
                              success: function(data)
                              {              
                                Swal.fire({
                                  title: 'Saved!',
                                  text: "Details have been saved successfully!",
                                  icon: 'success',
                                  closeButtonText: 'No, cancel!',
                                }
                                ).then((result)=>{
                                  location.reload();
                                }
                                );
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                // alert('Error deleting data');
                                Swal.fire({
                                           title: 'Oops...',
                                            text: 'Error saving details!',
                                            icon: 'error',
                                          })
                            }
                        });                     
                    }
                  });
 }

  function deletePatient(id)
    {

       Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes!',
                    showLoaderOnConfirm: true,
                  }).then((result) => {
                    if (result.value) {
                         $.ajax({
                              url : "{{ url('delete-patient') }}/"+id,
                              type: "DELETE",
                              data: {_token: '{{csrf_token()}}'},
                              dataType: "JSON",
                              success: function(data)
                              {               
                                Swal.fire({
                                  title: 'Deleted!',
                                  text: "Record has been deleted successfully!",
                                  icon: 'success',
                                  closeButtonText: 'No, cancel!',
                                }
                                ).then((result)=>{
                                  location.reload();
                                }
                                );
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                // alert('Error deleting data');
                                Swal.fire({
                                           title: 'Oops...',
                                            text: 'Error deleting record!',
                                            icon: 'error',
                                          })
                            }
                        });                     
                    }
                  });
    }

      function edit_patient(id)
    {
      save_method = 'update';
      $('#upadateModal').modal({
                    backdrop: 'static'
    });
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : '{{ route('get-patient') }}',
        type: "GET",
        data: {id: id},
        dataType: "JSON",
        success: function(data)
        {
             $('[name="name"]').val(data.name);
             $('[name="dob"]').val(data.dob);
             $('[name="comment"]').val(data.comment);
            $('[name="id"]').val(data.id);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Scale'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

  </script>
</body>

<!-- Mirrored from demo.thedevelovers.com/dashboard/klorofilpro-v2.0/tables-dynamic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2020 08:40:55 GMT -->
</html>