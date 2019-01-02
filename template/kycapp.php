<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | KYC Application</title>
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


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    

<style>
.status {
    padding: 40px 20px;
    border-radius: 4px;
    text-align: center;
    border: 1px solid #dce6f5;
}
.status-empty .status-icon {
    background: #eff6ff;
    border-color: #c8d8f0;
}

.status-icon {
    position: relative;
    height: 100px;
    width: 100px;
    background: #fff;
    border-radius: 50%;
    text-align: center;
    margin: 0 auto 10px;
/*    border: 2px solid #c8d8f0;*/
}
    
.imgicon{
  margin-top: 20%;      
}
    
.btn-primary {
    background: #2b56f5;
    border-color: #2b56f5;
    box-shadow: 0px 2px 18px 2px rgba(43, 86, 245, 0.25);
}
</style>

<body class="hold-transition skin-black fixed">
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-sm-12" style="margin-top: 10px">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h2 class="box-title">Identity Verification - KYC</h2>
                    <div class="box-body">
                        <p>To comply with regulation each participant will have to go through indentity verification (KYC). So please complete our fast and secure verification process to participate in our token sale. You can proceed from here to verify your identity and also you can check your application status if you submit already.</p>

                          <div class="status status-empty">
                                <div class="status-icon">
                                    <img class="imgicon" src="dist/img/document.png">
                                </div>
                                <h4 class="status-text" >You have not submitted your KYC Application</h4>
                                <a href="kycapp-form.php" class="btn btn-primary">Click to Proceed</a>
                          </div>

                    </div>
              </div>
                
           
          </div>
        </div>
      </div>
      
</section>

</div>
</div>
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



</body>
</html>