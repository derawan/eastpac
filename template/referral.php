<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | Referral</title>
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
  <link rel="stylesheet" href="dist/css/contribution.css">
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    


<!-- Start body hold-transition skin-black fixed -->
<body class="hold-transition skin-black fixed">
<!-- Start wrapper -->
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>
  <!-- Start Content Wrapper. Contains page content -->
<div class="content-wrapper">

        <!-- Start section -->
        <section class="content" style="padding-left: 30px;padding-right: 30px;">
        <!-- start card -->
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <!-- Start box box-warning -->
                    <div class="box box-warning">
                          <div class="box-header">
                            <h3 class="box-title">Referral</h3>
                          </div>
                          <!-- Start box-body -->
                          <div class="box-body">
                                <h4>Invite your friends and family and recive free tokens</h4><br>
                                <p>The referral link may be used during a token contribution, in the pre-sale and the ICO.</p>
                                <p align="justify">Imagine giving your unique referral link to your crypto-friend and he or she contributes tokens using your link, the bonus will be sent to your account automatically. The strategy is simple: the more links you send to your collagues, family and friends - the more tokens you may earn!</p>
                                <hr>
                                <h6>My unique referral link</h6>
                                <!-- Start refferal-info -->
                                <div class="refferal-info">
                                    <div class="input-group input-group-sm">
                                      <input type="text" class="form-control" style="border:1px solid #f39c12" value="https://demo.eastpac.io/ico?ref=7d264f90653733592">
                                      <span class="input-group-btn">
                                        <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-copy"></i></button>
                                      </span>
                                    </div>
                                </div><!-- .refferal-info --> 
                              
                                <h6>Share with</h6>
                                <!-- Start referal-info -->
                                <div class="refferal-info">
                                    <div class="input-group input-group-sm col-md-12">
                                        <select class="form-control" style="border:1px solid #f39c12;  max-width: 100%;" >
                                            <option>Facebook</option>
                                            <option>Web/Blog</option>
                                            <option>Translate Whitepaper</option>
                                        </select>
                                    </div>
                                </div><!-- End .share with --> 
                                
                                <h6>Share link</h6>
                                 <div class="refferal-info">
                                    <div class="input-group input-group-sm col-md-12">
                                      <input type="text" class="form-control" style="border:1px solid #f39c12">
                                    </div>
                                </div><!-- .share link --> 
                                <br>
                                <button class="btn btn-sm btn-warning">Submit</button>
                          </div>
                          <!-- End box-body -->
                    </div>
                      <!-- End box box-warning -->
                </div>
                <!-- End Col -->

                <div class="col-md-6">
                     <!--Table Section-->
                     <!-- Start box box-warning -->
                    <div class="box box-warning">
                          <div class="box-header">
                            <h3 class="box-title">Referral List</h3>
                          </div> 
                          <!-- End box box-warning header -->
                            <!-- Start box-body -->
                            <div class="box-body">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Link</th>
                                            <th>Channel</th>
                                            <th>Status</th>                                                                  
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- End box-body -->
                    </div>
                    <!-- End box box-warning -->
                </div>
                <!-- End col -->
            </div>
            <!-- End row card -->
        </div>
        <!-- End card -->
        </section>
        <!-- End section -->
</div>
<!-- content-wrapper -->
</div>
<!-- End wrapper -->

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
<script>


$(document).ready(function() {
  var responseObj = [
    { "link": "https://demo.eastpac.io/ico?ref=7d264f90653733592", "channel":"Facebook", "status":"Pending"},
    { "link": "https://demo.eastpac.io/ico?ref=7d264f90653733592", "channel":"Facebook", "status":"Pending"},
    { "link": "https://demo.eastpac.io/ico?ref=7d264f90653733592", "channel":"Facebook", "status":"Approved"},
    { "link": "https://demo.eastpac.io/ico?ref=7d264f90653733592", "channel":"Facebook", "status":"Approved"},
    { "link": "https://demo.eastpac.io/ico?ref=7d264f90653733592", "channel":"Facebook", "status":"Approved"}
];
$('#example').dataTable({
   "data": responseObj,
   "columns": [
     
      { "data": "link"},
      { "data": "channel"},
      { "data": "status"}
     
   ]
});




});

</script>
<script src="bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="bower_components/Flot/jquery.flot.categories.js"></script>
<script src="bower_components/chart.js/amcharts.js"></script>
<script src="bower_components/chart.js/serial.js"></script>
</body>
</html>