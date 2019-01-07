<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | D-Share</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="jquery.dataTables.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <!--DataTables-->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/contribution.css">

  <!--sweetalert -->    
<!--  <link rel="stylesheet" href="dist/css/skins/skin-black.css">-->
 
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    
<style>
#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display:;
  font-weight: 100;
  text-align: center;
  font-size: 20px;

}

#clockdiv > div{
  padding: 5px;
  border-radius: 5px;
  background: #701296;
  display: inline-block;
  margin-left: auto;

}

#clockdiv div > span{
    padding: 5px;
    border-radius: 5px;
    background: #b060d0;
    display: inline-block;
}
.smalltext{
  padding-top: 5px;
  font-size: 10px;
}
.token-countdown{
  background: #f39c12;
  padding: 10px;
}
.token-countdown-title{
  color: #fff;
  margin-bottom: 10px;
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
        <div class="box-header">
            <h3 class="box-title">D - Share</h3>
        </div>
        <div class="user-panel">
            <div class="row">
                <div class="col-md-9" border="1">
                    <div class="box box-solid box-warning">
                      <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="tile-item tile-primary">
                                    <div class="tile-bubbles"></div>
                                    <h6 class="tile-title">YOUR D-SHARE BALANCE</h6>
                                    <h4 class="tile-info">1250</h4>
                                </div>
                            </div><!-- .col -->
                               
                            <div class="col-md-4">
                                <div class="tile-item tile-primary">
                                    <div class="tile-bubbles"></div>
                                    <h6 class="tile-title">YOUR EAST BALANCE</h6>
                                    <h4 class="tile-info">120,000 EAST</h4>
                                </div>
                             </div><!-- .col -->
                            <div class="col-md-4">
                                <div class="tile-item tile-primary">
                                    <div class="tile-bubbles"></div>
                                    <h6 class="tile-title">YOUR CONTRIBUTION</h6>
                                    <h4 class="tile-info">1246 ETH</h4>
                                </div>
                            </div><!-- .col -->
                          </div><hr>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group input-group-lg">
                                <input type="text" class="form-control" style="border:1px solid #f39c12">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-warning btn-flat">EAST</button>
                                </span>
                              </div>
                            </div>
                            <div class="col-md-1" style=" text-align: center; margin-top:10px"><i class="fa fa-exchange"></i></div>
                             <div class="col-md-4">
                              <div class="input-group input-group-lg">
                                <input type="text" class="form-control" style="border:1px solid #f39c12">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-warning btn-flat">D-SHARE</button>
                                </span>
                              </div>
                            </div>
                            <div class="col-md-2"><button class="btn btn-lg btn-warning pull-right" onclick="processExchange()">Process</button></div>
                          </div><hr>
                          <div class="row">
                                <div class="col-md-12">
                                    <h4>Transaction</h4>
                                    <table id="example" class="display" style="width:100%">
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
                </div>
                <!--company news-->
                <div class="col-md-3" border="1px">
                  <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                      <div class="box-title"><h3>D-Share Sale</h3></div>
                    </div>
                    <div class="box-body">
<!--
                        <h6>D-SHARE PRICE</h6>
                        <h4>1 D-SHARE = 10 EAST</h4>
                        <hr>
-->
                        <h6>EXCHANGE RATE</h6>
                        <h4>1 ETH = 10 EAST = 1 D-SHARE</h4>
                        <hr>
                        <!-- countdown-->
                        
                               
                    </div>
                  </div>
              <div class="token-countdown">
                  <span class="token-countdown-title">SALE END IN</span>
                    <div id="clockdiv"><div>
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

                  <br>
                  <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                      <div class="box-title"><h3>Latest News</h3></div>
                    </div>
                    <div class="box-body" style="text-align:justify">
                        <p>The global economy looks poised to slow moderately from 3.8% in 2018 to 3.5% next year in Goldman Sachs Research’s view, led by deceleration in the US and further softening in China <a href="#">Read more...</a> 
                        </p>
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

<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>


<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/sweetalert/dist/sweetalert.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
// Set the date we're counting down to
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



/*datatable*/
$(document).ready(function() {
  var responseObj = [
    { "txhash": "0xc5b42f52eaab33e..", "block": "90898",  "age":"21 sec ago", "from":"0x3c66e1269ae137..", "to":"0x87sad", "value":"0 ether"},
    { "txhash": "0xc2fd8a0e3907df7..", "block": "90898",  "age":"22 sec ago", "from":"	0xf20d07900431142..", "to":"0xss4a4", "value":"0.002 ether"},
    { "txhash": "0x2092d11700bca9..", "block": "90898",  "age":"23 sec ago", "from":"0x52bfab512f937fe4..", "to":"0xsad45", "value":"0 ether"},
    { "txhash": "0xe1813da5e378a1..", "block": "90898",  "age":"24 sec ago", "from":"0xd2db057a0fac0c5..", "to":"0xasd49", "value":"0 ether"},
    { "txhash": "0xc9dbded8861ea0..", "block": "90898",  "age":"25 sec ago", "from":"0xba3fd1990281283..", "to":"0xasd54", "value":"0.002 ether"}
   
];
$('#example').dataTable({
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

</body>
</html>