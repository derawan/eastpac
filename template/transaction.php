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
  <!--DataTables-->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    
<body class="hold-transition skin-black fixed">
	<div class="wrapper">
		<!--header-->
		<?php include('page-header.html') ?>
		<!--seidebar-->
		<?php include('page-sidebar.html') ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		<!--Table Section-->
			<section class="content" style="padding-left: 30px;padding-right: 30px;">
				<div class="card">
					<div class="row">
						<div class="box box-warning">
							<div class="box-header">
							  <h3 class="box-title">Transaction</h3>
							</div>
							<div class="box-body table-responsive">
								<table id="example" class="display dt-responsive" style="width:100%">
									<thead>
										<tr>
											<th>TxHash</th>
											<th>Block</th>
											<th>Age</th>
											<th>From</th>
											<th>To</th>
											<th>Value</th>
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
	<!-- SlimScroll -->
	<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!--datatable-->
	<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<script>
		$(document).ready(function() {
			var responseObj = [
				{ "txhash": "0xc5b42f52eaab33e..", "block": "90898",  "age":"21 sec ago", "from":"0x3c66e1269ae137..", "to":"0x87sad", "value":"0 ether"},
				{ "txhash": "0xc2fd8a0e3907df7..", "block": "90898",  "age":"22 sec ago", "from":"	0xf20d07900431142..", "to":"0xss4a4", "value":"0.002 ether"},
				{ "txhash": "0x2092d11700bca9..", "block": "90898",  "age":"23 sec ago", "from":"0x52bfab512f937fe4..", "to":"0xsad45", "value":"0 ether"},
				{ "txhash": "0xe1813da5e378a1..", "block": "90898",  "age":"24 sec ago", "from":"0xd2db057a0fac0c5..", "to":"0xasd49", "value":"0 ether"},
				{ "txhash": "0xc9dbded8861ea0..", "block": "90898",  "age":"25 sec ago", "from":"0xba3fd1990281283..", "to":"0xasd54", "value":"0.002 ether"},
				{ "txhash": "0x7d324f67860c574..", "block": "90898",  "age":"26 sec ago", "from":"0x169c796a64a520..", "to":"0xadwa8", "value":"0.002 ether"},
				{ "txhash": "0x9629ccc92bee98..", "block": "90898",  "age":"27 sec ago", "from":"0xc2624420c6aa5e..", "to":"0xzsd45d", "value":"0.1437461 ether"},
			];
			$('#example').dataTable({
				responsive: true,
				"data": responseObj,
				"columns": [
					{ 
						"data": "txhash",
						"render": function(data, type, row, meta){
							if(type === 'display'){
								data = '<a href="txhash.php">' + data + '</a>';
							}
							return data;
						}
					},
					{ 
						"data": "block",
						"render": function(data, type, row, meta){
							if(type === 'display'){
								data = '<a href="block.php">' + data + '</a>';
							}
							return data;
						}
					},
					{ 
						"data": "age",
					},
					{ 
						"data": "from",
						"render": function(data, type, row, meta){
							if(type === 'display'){
								data = '<a href="from.php">' + data + '</a>';
							}
							return data;
						}
					},
					{ 
						"data": "to",
						"render": function(data, type, row, meta){
							if(type === 'display'){
								data = '<a href="to.html">' + data + '</a>';
							}
							return data;
						}
					},
					{ 
						"data": "value",
					}
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