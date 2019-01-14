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
  <link rel="shortcut icon" href="dist/img/favicon.ico">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/contribution.css">
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    

<style>
.card-innr{
    border: 2px solid #dce6f5;
	padding: 15px;
}

/*countdown timer*/
#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display: contents;
  font-weight: 100;
  text-align: center;
  font-size: 20px;

}
#clockdiv td > div{
  padding: 3px;
  border-radius: 5px;
/*  background: #701296;*/
  display:table-cell;
  margin-left: 0px;
}
#clockdiv table{
	margin: auto;
}
#clockdiv table td{
	padding: 1px;
}
#clockdiv td div > span{
    padding: 5px;
    border-radius: 5px;
    background: #b060d0;
}
.smalltext{
  padding-top: 5px;
  font-size: 10px;
}
.token-countdown{
  background: #f39c12;
  padding: 0px;
}
.token-countdown-title{
  color: #fff;
  margin-bottom: 10px;
}

/*progress-bar*/
.progress-info{
	padding-left: 0px;
}
.progress-info li{
	list-style: none;
	font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    color: #495463;
    line-height: 1.4;
}
.progress-info li span {
    color: #758698;
    display: block;
    font-size: 12px;
}
</style>

<body class="hold-transition skin-black fixed">
	<div class="wrapper">
		<!--header-->
		<?php include('page-header.html') ?>
		<!--sidebar-->
		<?php include('page-sidebar.html') ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content" style="min-height: 25px;">
				<div class="box box-warning">
					<div class="user-panel">
						<div class="row">
							<div class="col-md-4"><!--start east token-->
								<div class="tile-item tile-primary">
									<div class="tile-bubbles"></div>
									<h6 class="tile-title">EAST TOKEN BALANCE</h6>
									<h1 class="tile-info">120,000,000 EAST</h1>
								</div>
							</div><!-- end east token -->
							<div class="col-md-4"><!-- start eth contribution -->
								<div class="tile-item tile-primary">
									<div class="tile-bubbles"></div>
									<h6 class="tile-title">YOUR CONTRIBUTION</h6>
									<h1 class="tile-info">1256 ETH</h1>
								</div>
							</div><!-- end eth contribution -->
							<div class="col-md-4"><!-- start exchange -->
								<div class="tile-item tile-primary">
									<div class="tile-bubbles"></div>
									<h1 class="tile-title">1 ETH = 100 EAST</h1>
									<h6 class="tile-info">1 ETH = 156.89 USD</h6>
								</div>
							</div><!-- end exchange -->
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="info-card info-card-bordered">
									<div class="row align-items-center">
										<div class="col-sm-10">
											<div class="input-group input-group-lg">
                        <input type="text" class="form-control" style="border:1px solid #f39c12" id="eth">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-warning btn-flat">ETH</button>
                        </span>
                      </div>
										</div>
										<div class="col-sm-2">
											<button type="submit" class="btn btn-lg btn-warning pull-right">Process</button>
										</div>
									</div>
								</div><!-- .info-card -->
							</div>
							<div class="col-md-4"><!--calculation-->
						   	<!-- Start box box-solid box-warning  -->
							 	<div class="box box-solid box-warning">
                  <!-- Start boz-header -->
                  <div class="box-header with-border">
                    <div class="box-title"><h3>Latest News</h3></div>
                  </div>
                  <!-- End Box-header -->
                  <!-- Start box-body -->
                  <div class="box-body" style="text-align:justify">
                    <p>The global economy looks poised to slow moderately from 3.8% in 2018 to 3.5% next year in Goldman Sachs Research’s view, led by deceleration in the US and further softening in China <a href="#">Read more...</a> 
                    </p>
                  </div>
                  <!-- End Box-body -->
                </div>
                <!-- End box box-solid box-warning -->    
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
		//countdown timer
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
	//table
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

	<script>
	  //chart
	  var ctxL = document.getElementById("lineChart").getContext('2d');
	  var myLineChart = new Chart(ctxL, {
		type: 'line',
		data: {
		  labels: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14"],
		  datasets: [{
			  label: "Tokens Sale Graph",
			  data: [65, 59, 80, 81, 56, 55, 40, 24, 46, 94, 53, 25, 64, 37],
			  backgroundColor: [
				'rgba(105, 0, 132, .2)',
			  ],
			  borderColor: [
				'rgba(200, 99, 132, .7)',
			  ],
			  borderWidth: 2
			},
		  ]
		},
		options: {
		  responsive: true
		}
	  });
	</script>
</body>
</html>