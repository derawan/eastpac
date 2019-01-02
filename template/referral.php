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
    



<body class="hold-transition skin-black fixed">
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

        <section class="content" style="padding-left: 30px;padding-right: 30px;">
        <div class="card">
            <div class="row">
                <div class="box box-warning">
                    <div class="box-header">
                      <h3 class="box-title">Referral</h3>
                    </div>

                  <div class="box-body">
                    <div class="user-panel">
                       
                        <h4>Invite your friends and family and recive free tokens</h4><br>
                        <p><strong>Each member recives a unique referral link to share with friends and family and recive a bonus - 5% of the value of their contribution.</strong></p>
                        <p>The referral link may be used during a token contribution, in the pre-sale and the ICO.</p>
                        <p>Imagine giving your unique referral link to your crypto-friend and he or she contributes tokens using your link, the bonus will be sent to your account automatically. The strategy is simple: the more links you send to your collagues, family and friends - the more tokens you may earn!</p><br>
                        <h6>My unique referral link</h6>
                        <div class="refferal-info">
                            <span class="refferal-copy-feedback copy-feedback"></span>
                            <i class="fa fa-link"></i>
                            <input type="text" class="refferal-address" value="https://demo.themenio.com/ico?ref=7d264f90653733592" disabled="">
                            <button class="refferal-copy copy-clipboard" data-clipboard-text="https://demo.themenio.com/ico?ref=7d264f90653733592"><i class="fa fa-copy"></i></button>
                        </div><!-- .refferal-info --> <!-- @updated on v1.0.1 -->
                        <div class="gaps-2x"></div>
                        <ul class="share-links">
                            <li>Share with : </li>
                            <li><a href="#"><i class="fa fa-at"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
<!--                            <li><a href="#"><i class="fa fa-viber"></i></a></li>-->
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        </ul><!-- .share-links -->
                        <div class="gaps-1x"></div>
                        <h4>Refferal Statistics</h4>
                        <div class="refferal-statistics">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="refferal-statistics-item">
                                        <h6>Visit Count</h6>
                                        <span>420</span>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-4">
                                    <div class="refferal-statistics-item">
                                        <h6>Signin Count</h6>
                                        <span>31</span>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-4">
                                    <div class="refferal-statistics-item">
                                        <h6>Total Bonus</h6>
                                        <span>155</span>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .refferal-statistics -->        
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </section>
    <!--Table Section-->
    <section class="content" style="padding-left: 30px;padding-right: 30px;">
        <div class="card">
            <div class="row">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Referral List</h3>
                    </div>

                  <div class="box-body">
                      <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Referee</th>
                                <th>Bought Token</th>
                                <th>Bonus</th>
                                <th>Date</th>
                                <th>Channel</th>
                            </tr>
                        </thead>
                      </table>
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
<script>


$(document).ready(function() {
  var responseObj = [
    { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
    { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
    { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
    { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
    { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
    { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
   
   
];
$('#example').dataTable({
   "data": responseObj,
   "columns": [
     
      { "data": "referee"},
      { "data": "btoken"},
      { "data": "bonus"},
      { "data": "date"},
      { "data": "channel"},
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