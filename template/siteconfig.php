<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="jquery.dataTables.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!--DataTables-->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">
  <link rel="shortcut icon" href="dist/img/favicon.ico">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    


<body class="hold-transition skin-black fixed">
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!--Table Section-->
    <section class="content" style="padding-left: 30px;padding-right: 30px;">
        <div class="card">
            <div class="row">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Site Config</h3>
                    </div>

                  <div class="box-body table-responsive">
                      <table id="config" class="table table-stripped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>Site Title</b></td>
                                <td>Eastpac</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"  onClick="deleted();"><i class="fa fa-trash"></i></button>
                                </td>    
                            </tr>
                            <tr>
                                <td><b>Theme</b></td>
                                <td>Custom Theme</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"  onClick="deleted();"><i class="fa fa-trash"></i></button>
                                </td>    
                            </tr>
                            <tr>
                                <td><b>Contact Email</b></td>
                                <td>eastpac@digitex.online</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"  onClick="deleted();"><i class="fa fa-trash"></i></button>
                                </td>    
                            </tr>
                            <tr>
                                <td><b>Contact Address</b></td>
                                <td>10 Anson Road#05-01/15 International PlazaSingapore 079903</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"  onClick="deleted();"><i class="fa fa-trash"></i></button>
                                </td>    
                            </tr>
                            <tr>
                                <td><b>Contact Phone Number</b></td>
                                <td>DID +65 6521 6815<br>Hotline +65 6653 1218<br>Fax +65 6226 1209</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"  onClick="deleted();"><i class="fa fa-trash"></i></button>
                                </td>    
                            </tr>
                            <tr>
                                <td><b>Ethereum address</b></td>
                                <td>http://localhost:5000</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"  onClick="deleted();"><i class="fa fa-trash"></i></button>
                                </td>    
                            </tr>
                            <tr>
                                <td><b>D-share Target (EAST)</b></td>
                                <td>0</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"  onClick="deleted();"><i class="fa fa-trash"></i></button>
                                </td>    
                            </tr>
                            <tr>
                                <td><b>D-share Sold (EAST)</b></td>
                                <td>0</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"  onClick="deleted();"><i class="fa fa-trash"></i></button>
                                </td>    
                            </tr>
                        </tbody>
                      </table>
                      <button type="button" class="btn btn-primary" onClick='editconfig()'>Add data</button>
                  </div>
              </div>
            </div>
        </div>
    </section>
    </div>
</div>
<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit data</h4>
              </div>
              <div class="modal-body">
              <div class="input-group" style="margin-bottom:15px;">
                <span class="input-group-addon" style="border-radius:4px 0px 0px 4px;">Title</span>
                <input id="msg" type="text" class="form-control" name="title">
              </div>
              <div class="input-group">
                <span class="input-group-addon" style="border-radius:4px 0px 0px 4px;">Value</span>
                <input id="msg" type="text" class="form-control" name="value">
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onClick='editconfig()'>Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

<!--Footer section-->
<?php include('page-footer.html'); ?>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="bower_components/chart.js/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="bower_components/Flot/jquery.flot.categories.js"></script>
<script src="bower_components/chart.js/amcharts.js"></script>
<script src="bower_components/chart.js/serial.js"></script>
<script src="dist/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function deleted(){
        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Your data has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your data is safe!");
  }
});
    }
    function editconfig(){
        swal({
        title: "Congratulation",
        text: "Your data has been successfully edited",
        icon: "success",
        buttons: true
        })
    }
</script>    
    


</body>
</html>