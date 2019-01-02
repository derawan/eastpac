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
  <link rel="stylesheet" href="dist/css/contribution.css">
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    

<style>
#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 20px;

}

#clockdiv > div{
	padding: 10px;
	border-radius: 5px;
	background: #00d4eb;
	display: inline-block;
    margin-left: 10px;
}

#clockdiv div > span{
    padding: 10px;
    border-radius: 5px;
    background: #030c27;
    display: inline-block;
}

.smalltext{
	padding-top: 5px;
	font-size: 10px;
}
</style>

<body class="hold-transition skin-black fixed">
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


<section class="content" style="min-height: 25px;">
<div class="box box-warning">
    <div class="user-panel">
        <div class="row">
            <div class="col-md-6">
                <div class="tile-item tile-primary">
                    <div class="tile-bubbles"></div>
                    <h6 class="tile-title">EAST TOKEN BALANCE</h6>
                    <h1 class="tile-info">120,000,000 EAST</h1>
                    <ul class="tile-list-inline">
                        <li class="pull-right">19.043 ETH</li>
                    </ul>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="tile-item tile-light">
                    <div class="tile-bubbles"></div>
                    <h6 class="tile-title">YOUR CONTRIBUTION</h6>
                    <ul class="tile-info-list pull-right">
                        <li><span>1.646</span>ETH</li>
                    </ul>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
        <div class="info-card info-card-bordered">
            <div class="row align-items-center">
                <div class="col-sm-3">
                    <div class="info-card-image">
                        <img src="dist/img/vector-a.png" alt="vector">
                    </div>
                <div class="gaps-2x d-md-none"></div>
                </div>
                <div class="col-sm-9">
                    <h4>Thank you for your interest towards to our ICO Crypto Projects</h4>
                    <p>You can contribute ICOX tokens in <a href="#">Contributions</a> section.</p>
                    <p>You can get a quick response to any questions, and chat with the project in our Telegram: <a href="htts://t.me/icocrypto">htts://t.me/icocrypto</a></p>
                    <p>Don’t hesitate to invite your friends! If your invited referral purchased token then both of you get 10% bonus.</p>
                </div>
            </div>
        </div><!-- .info-card -->
        <div class="token-card">
            <div class="token-info">
                <span class="token-smartag">ICO Phase 2</span>
                <h2 class="token-bonus">20% <span>Current Bonus</span></h2>
                    <ul class="token-timeline">
                        <li><span>START DATE</span>14 Jul 2018</li>
                        <li><span>END DATE</span>25 Aug 2018</li>
                    </ul>
            </div>
            <div class="token-countdown">
                <span class="token-countdown-title">THE BONUS END IN</span>
                 <div id="clockdiv">
                     <div>
                      <span class="days"></span>
                      <div class="smalltext">Days</div>
                     </div>
                     <div>
                      <span class="hours"></span>
                      <div class="smalltext">Hours</div>
                     </div>
                     <div>
                      <span class="minutes"></span>
                      <div class="smalltext">Minutes</div>
                     </div>
                     <div>
                      <span class="seconds"></span>
                      <div class="smalltext">Seconds</div>
                     </div>
                 </div>
            </div>
         </div><!-- .token-card -->
<!--
                        <div class="progress-card">
                            <h4>Token Sale Progress</h4>
                            <ul class="progress-info">
                                <li><span>Raised -</span> 2,758 ICOX</li>
                                <li><span>TOTAL -</span> 1,500,000 ICOX</li>
                            </ul>
                            <div class="progress-bar">
                                <div class="progress-hcap" style="width:90%">
                                    <div>Hard cap <span>1,400,000</span></div>
                                </div>
                                <div class="progress-scap" style="width:34%">
                                    <div>Soft cap <span>40,000</span></div>
                                </div>
                                <div class="progress-psale" style="width:12%">
                                    <div>Pre Sale <span>10,000</span></div>
                                </div>
                                <div class="progress-percent" style="width:25%"></div>
                            </div>
                        </div>
-->
        <div class="gaps-3x">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Presale</th>
                        <th>Sale Stage 1</th>
                        <th>Sale Stage 2</th>
                    </tr>
                </thead>
            </table>
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

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>
<script>


$(document).ready(function() {
  var responseObj = [
    { "presale": "03 Jan 2019", "sale1": "15 Aug 2019",  "sale2":"28 Oct 2019"},
   
   
];
$('#example').dataTable({
   "data": responseObj,
   "columns": [
      { "data": "presale"},
      { "data": "sale1"},
      { "data": "sale2"},

   ]
});




  });

</script>
</body>
</html>