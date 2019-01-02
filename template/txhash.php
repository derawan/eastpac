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


  <!-- Left side column. contains the logo and sidebar -->
<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!--Table Section-->
    <section class="content" style="padding-left: 30px;padding-right: 30px;">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Overview</a></li>
              <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <h3>Transaction</h3><br>

                <div class="table-responsive"> 
                    <table class="table table-striped">
                        <tr>
                            <td width="30%">Txhash :</td>
                            <td>0x46af1ee6087785d38cfeaaedde9f54a5b1820652b91acb6bfc6f3560cb96cc2f</td>
                        </tr> 
                        <tr>
                            <td>TxReceipt Status :</td>
                            <td>Success</td>
                        </tr>
                        <tr>
                            <td>Block height :</td>
                            <td><a href="#">6995619</a>(1 Block Confirmation)</td>
                        </tr>
                           <tr>
                            <td>From :</td>
                            <td><a href="#">0x00cfbbaf7ddb3a1476767101c12a0162e241fbad</a></td>
                        </tr>
                           <tr>
                            <td>To :</td>
                            <td>Contract <a href="#">0x4dc3643dbc642b72c158e7f3d2ff232df61cb6ce</a>(AmberToken)</td>
                        </tr>
                           <tr>
                            <td>Tokens Transfered:</td>
                            <td>From <a href="#">0x00cfbbaf7ddb3a1476767101c12a0162e241fbad</a> To <a href="#">0x79ca025dd6186dc822e1dcf22fffc1e940a468a2for</a>  1 ($0.07) AMB</td>
                        </tr>
                           <tr>
                            <td>Value :</td>
                            <td>0 Ether ($0.00)</td>
                        </tr>
                           <tr>
                            <td>Gas Limit:</td>
                            <td>60000</td>
                        </tr>
                           <tr>
                            <td>Gas Used By Transaction:</td>
                            <td>52108 (86.85%)</td>
                        </tr>
                        <tr>
                            <td>Actual Tx Cost/Fee:</td>
                            <td>0.000182378 Ether ($0.03)</td>
                        </tr>
                        <tr>
                            <td>Nonce & {Position}:</td>
                            <td>99191 | {57}</td>
                        </tr>
                        <tr>
                            <td>Input Data:</td>
                            <td><input type="text" class="form-control" id="email" placeholder="0x" disabled></td>
                        </tr>
                    </table>
                  </div>
              </div>
              <div class="tab-pane" id="tab_2">
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
    </section>
</div>
</div>
<!--Footer section-->
 <footer class="main-footer" class="pull-right">
    <img src="dist/img/eastpaclogo.png" width="8%" >
    <strong>Copyright © 2018</strong> All rights
    reserved.
  </footer>

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


</body>
</html>