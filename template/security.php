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
  <!--DataTables-->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
.status {
    padding: 40px 20px;
    border-radius: 4px;
/*    text-align: center;*/
    border: 1px solid #dce6f5;
}
.status-empty .status-icon {
    background: #eff6ff;
    border-color: #c8d8f0;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

</style>    

<body class="hold-transition skin-black fixed">
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!--Table Section-->
    <section class="content" style="padding-left: 30px;padding-right: 30px;">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h2 class="box-title">Security Settings</h2>
            </div>
            <div class="box-body">
            <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs ">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Security</a></li>
              <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Activity Log</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <h3>General Security Option</h3><br>
                  <div class="status status-empty">
                     <div class="row">
                         <div class="col-md-1">
                            <div class="form-group">
                                <label class="switch">
                                  <input type="checkbox"><span class="slider round"></span>                
                                </label>
                            </div>
                         </div>
                         <div class="col-md-6" style="margin-left:-1%">
                            Save my Activities Log
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-1">
                            <div class="form-group">
                                <label class="switch">
                                  <input type="checkbox"><span class="slider round"></span>                
                                </label>
                            </div>
                         </div>
                         <div class="col-md-6" style="margin-left:-1%">
                            Confirm me through email before password change
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-1">
                            <div class="form-group">
                                <label class="switch">
                                  <input type="checkbox"><span class="slider round"></span>                
                                </label>
                            </div>
                         </div>
                         <div class="col-md-6" style="margin-left:-1%">
                            Ask me password before token withdraw
                         </div>
                      </div>
                      

                    </div>
                    <hr>
                    <div class="row">
                       <div class="col-md-12"><h3>Two-Factor Security Option</h3><br>
                           <p>Two-factor authentication is a method for protection your web account. When it is activated you need to enter not only your password, but also a special code. You can receive this code by in mobile app. Even if third person will find your password, then can't access with that code.</p></div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                        Current Status: <button class="btn btn-default btn-sm">Disabled</button>
                        </div>
                    </div> <br> 
                      <div class="row">
                         <div class="col-md-1">
                            <div class="form-group">
                                <label class="switch">
                                  <input type="checkbox"><span class="slider round"></span>                
                                </label>
                            </div>
                         </div>
                         <div class="col-md-6" style="margin-left:-1%">
                            Enable and use an authenticator App
                         </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                            <p><b>1) Install an authentication app on your device. Any app that supports the Time-based One-Time Password (TOTP) protocol should work, including:</b></p>
                     
                            <p>- Google Authenticator (Android/iOS)</p>
                            <p>- Authy (Android/iOS)</p>
                            <p>- Microsoft Authenticator (Windows Phone)</p>
                          </div>
                       
                      </div><br>
                      <div class="row">
                          <div class="col-md-12">
                             <p><b>2) Use the authenticator app to scan the barcode below.</b></p>
                             <img src="dist/img/eth-qr.png" width="10%" style="margin-left:1.5%">
                          </div>
                      </div><br>
                      <div class="row">
                          <div class="col-md-12">
                              <p><b>3) Enter the code generated by the authenticator app.</b></p>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <input type="text" class="form-control input-md" id="code-generator" placeholder="">
                                </div>
                              </div>
                          </div>
                      </div><br>
                      <div class="row">
                          <div class="col-md-12">
                            <button class="btn btn-md btn-primary" style="margin-left:1.5%">VERIFY</button>
                          </div>
                      </div>
                      <br><br>
                      <div class="row">
                        <div class="col-md-1" style="color:red">
                            <i class="fa fa-info-circle" ></i>
                        </div>
                         <div class="col-md-11" style="color:red; margin-left:-5%">
                          <p>Important! In case of loss of access to the mobile application, you can regain it using mobile number that specified in your profile. If you don't save that, we will not able to help you to regain.</p>
                        </div>
                      </div>
                      
                  </div>
             

                  <div class="tab-pane" id="tab_2">
                    <div class="col-md-12"></div>
                    <h3>Activity</h3><br>
                    <p>Here is your recent activities. you can also clear this log as well as disable this feature from security settings.</p><br>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>DEVICE</th>
                                    <th>BROWSER</th>
                                    <th>IP</th>
                                </tr>
                            </thead>
                          </table>
                        </div>
                  </div>
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
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
     //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
</script>
<script>
$(document).ready(function() {
      var responseObj = [
        { "date": "01-16-2019 09:04PM", "device": "Mac",  "browser":"Chrome", "ip":"198.51.100.0"},
        { "date": "01-02-2019 11:09PM", "device": "Windows",  "browser":"Firefox", "ip":"198.51.93.0"},

    ];
    $('#example').dataTable({
       "data": responseObj,
       "columns": [
          { "data": "date"},
          { "data": "device"},
          { "data": "browser"},
          { "data": "ip"}
       ]
    });
  });

</script>
</body>
</html>