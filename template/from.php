<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | Block Info</title>
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
    

<body class="hold-transition skin-black fixed">
<div class="wrapper">
<?php include('page-header.html');?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include('page-sidebar');?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"  style="background-image: url(dist/img/bg-min.png);">

    <!--Table Section-->
    <section class="content" style="padding-left: 30px;padding-right: 30px;">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-responsive"> 
                            <table class="table table-striped">
                                    <tr>
                                        <td width="30%"><b>Overview</b></td>
                                        <td align="right"><i class="fa fa-qrcode"></i></td>
                                    </tr> 
                                    <tr>
                                        <td>Balance :</td>
                                        <td>920.664412602482920793 Ether</td>
                                    </tr>
                                    <tr>
                                        <td>Ether Value :</td>
                                        <td>$125,606.25 <small>(@ $136.43/ETH)</small></td>
                                    </tr>
                                    <tr>
                                        <td>Transactions :</td>
                                        <td>564365 txns</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped">
                                    <tr>
                                        <td width="30%"><b>Misc:</b></td>
                                        <td align="right"><button class="btn btn-sm btn-primary">Loan</button> <i class="fa fa-reorder"></i></td>
                                    </tr> 
                                    <tr>
                                        <td>Address Watch :</td>
                                        <td><button class="btn btn-sm btn-warning">Add to watch list</button></td>
                                    </tr>
                                    <tr>
                                        <td>Token Balance :</td>
                                        <td><select><option>View ($11,085,201.05)</option></select></td>
                                    </tr>
                               
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Transactions</a></li>
                  <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Erc20 Token Txns</a></li>
                  <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Comments</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                        <p>Latest 25 transactions from a total of 564365 transactions</p>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                        <th>TxHash</th>
                                        <th>Block</th>
                                        <th>Age</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Value</th>
                                        <th><small>[TxFee]</small></th>
                                </tr>
                            </thead>
                        </table>
                  </div>
                  
                  <div class="tab-pane" id="tab_2">
                        <p>Latest 25 EAST Token Transfer Events</p>
                        <table id="example2" class="display" style="width:100%">
                            <thead>
                                <tr>
                                        <th>TxHash</th>
                                        <th>Block</th>
                                        <th>Age</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Value</th>
                                        <th>Token</th>
                                </tr>
                            </thead>
                        </table>
                  </div>
                  <div class="tab-pane" id="tab_3">
                    <p>Make sure to use the "Vote Down" button for any spammy posts, and the "Vote Up" for interesting conversations.</p><br>
                    <div class="row">
                        <div class="col-sm-1">
                            <img src="dist/img/user.png" width="70px" style="margin-left: 10%">
                        </div>
                        <div class="col-sm-11">
                            <input class="form-control input-lg" id="allocation" name="allocation" type="text" placeholder="Start the discussion" style="height: 70px; border-radius: 5px; margin-right: 50%">
                         </div>

                     </div> 
                      <br>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
</div>
<!--Footer section-->
<?php include('page-from.php');?>

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
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>


$(document).ready(function() {
  var responseObj = [
    { "txhash": "0x7db008e6afd4fd3..", "block": "90898",  "age":"21 sec ago", "from":"0xba826fec90cefdf6..", "to":"0x39bb6..", "value":"0 ether", "txfee":"0.002774760856"},
    { "txhash": "0xc2fd8a0e3907df7..", "block": "90898",  "age":"22 sec ago", "from":"	0xf20d07900431142..", "to":"0xss4a4..", "value":"0.002 ether","txfee":"0.002771491994"},
    { "txhash": "0x2092d11700bca9..", "block": "90898",  "age":"23 sec ago", "from":"0x52bfab512f937fe4..", "to":"0xsad45..", "value":"0 ether","txfee":"0.003279862883"},
    { "txhash": "0xe1813da5e378a1..", "block": "90898",  "age":"24 sec ago", "from":"0xd2db057a0fac0c5..", "to":"0xasd49..", "value":"0 ether","txfee":"0.002718561576"},
    { "txhash": "0xc9dbded8861ea0..", "block": "90898",  "age":"25 sec ago", "from":"0xba3fd1990281283..", "to":"0xasd54..", "value":"0.002 ether","txfee":"0.002774760856"},
    { "txhash": "0x7d324f67860c574..", "block": "90898",  "age":"26 sec ago", "from":"0x169c796a64a520..", "to":"0xadwa8..", "value":"0.002 ether","txfee":"0.002771491994"},
    { "txhash": "0x9629ccc92bee98..", "block": "90898",  "age":"27 sec ago", "from":"0xc2624420c6aa5e..", "to":"0xzsd45d..", "value":"0.1437461 ether","txfee":"0.002802231868"},
   
];
$('#example').dataTable({
   "data": responseObj,
   "columns": [
     
      { 
         "data": "txhash",
         "render": function(data, type, row, meta){
            if(type === 'display'){
                data = '<a href="txhash.html">' + data + '</a>';
            }
            
            return data;
         }
      },
      { 
         "data": "block",
         "render": function(data, type, row, meta){
            if(type === 'display'){
                data = '<a href="block.html">' + data + '</a>';
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
                data = '<a href="from.html">' + data + '</a>';
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

      },
       { 

         "data": "txfee",

      }
      
   ]
});


var responseObj2 = [
    { "txhash": "0x7db008e6afd4fd3..", "block": "90898",  "age":"21 sec ago", "from":"0xba826fec90cefdf6..", "to":"0x39bb6..", "value":"0 ether", "txfee":"Edgeless"},
    { "txhash": "0xc2fd8a0e3907df7..", "block": "90898",  "age":"22 sec ago", "from":"	0xf20d07900431142..", "to":"0xss4a4..", "value":"0.002 ether","txfee":"Storj"},
    { "txhash": "0x2092d11700bca9..", "block": "90898",  "age":"23 sec ago", "from":"0x52bfab512f937fe4..", "to":"0xsad45..", "value":"0 ether","txfee":"Ziliqa"},
    { "txhash": "0xe1813da5e378a1..", "block": "90898",  "age":"24 sec ago", "from":"0xd2db057a0fac0c5..", "to":"0xasd49..", "value":"0 ether","txfee":"Polymath"},
    { "txhash": "0xc9dbded8861ea0..", "block": "90898",  "age":"25 sec ago", "from":"0xba3fd1990281283..", "to":"0xasd54..", "value":"0.002 ether","txfee":"Simple Token"},
    { "txhash": "0x7d324f67860c574..", "block": "90898",  "age":"26 sec ago", "from":"0x169c796a64a520..", "to":"0xadwa8..", "value":"0.002 ether","txfee":"Pundi X Token"},
    { "txhash": "0x9629ccc92bee98..", "block": "90898",  "age":"27 sec ago", "from":"0xc2624420c6aa5e..", "to":"0xzsd45d..", "value":"0.1437461 ether","txfee":"Simple Token"},
   
];
$('#example2').dataTable({
   "data": responseObj2,
   "columns": [
     
      { 
         "data": "txhash",
         "render": function(data, type, row, meta){
            if(type === 'display'){
                data = '<a href="txhash.html">' + data + '</a>';
            }
            
            return data;
         }
      },
      { 
         "data": "block",
         "render": function(data, type, row, meta){
            if(type === 'display'){
                data = '<a href="block.html">' + data + '</a>';
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
                data = '<a href="from.html">' + data + '</a>';
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

      },
       { 

         "data": "txfee",

      }
      
   ]
});

});

</script>
</body>
</html>