<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | Form KYC Application</title>
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
  <link rel="stylesheet" href="dist/css/kyc-thank-you.css">
  <!--  <link rel="stylesheet" href="dist/css/contribution.css">-->
    
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-black fixed">
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>
  <!-- Content Wrapper. Contains page content -->

    <!-- Start page-header page-header-kyc -->
    <div class="content-wrapper">
        <div class="page-header page-header-kyc">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7 text-center">
                        <h2 class="page-title">Begin your ID-Verification</h2>
                        <p class="right">Verify your identity to participate in tokensale.</p>
                    </div>
                    <!-- end col-lg-8 col-xl-7 text-center -->
                </div>
                <!-- end row justify-content-center -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page-header page-header-kyc -->

        <!-- start page-content -->
        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">
                        <div class="kyc-status card mx-lg-4">
                            <div class="card-innr">
                                <div class="status status-thank px-md-5">
                                    <div class="status-icon">
                                        <i class="fa fa-check-square-o"></i>
                                    </div>
                                    <!-- end status-icon -->

                                    <span class="status-text large text-dark">You have completed the process of KYC</span>
                                    <p class="px-md-5"><br>We are still waiting for your identity verification. Once our team verified your indentity, you will be notified by email. You can also check your KYC  compliance status from your profile page.</p>
                                    <a href="profile.php" class="btn btn-warning">Back to Profile</a>
                                </div>
                                <!-- end status status-thank px-md-5 -->
                            </div>
                            <!-- end card-innr -->
                        </div>
                        <!-- end kyc-status carf mx-lg-4 -->

                        <p class="text-light text-center mgmt-1x">"If you have any question, please contact our support team<a href="#"> info@east.com</a>."
                        </p>
                    </div>
                    <!-- end col-lg-10 col-xl-9 -->
                </div>
                <!-- end row justify-content-center -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page-content -->
    </div>
    <!-- end content-wrapper -->

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
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>


</body>
</html>