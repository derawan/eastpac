<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | Transaction</title>
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
  <!--datepicker-->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style> 
.user-bg .user-icon{
    position: absolute;   
}
    
.user-bg{
    width: 75%;
    position: absolute;
    z-index: 0; 
    margin-left: 25%;
    margin-top: 15%
}
.user-icon{
  position: absolute;
	width: 80%;
	margin-top: 40%;
	left: 45%;
	z-index: 10;  
}
    
/*toast*/
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}


.barcode-wallet img{width: 80%;}

	
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
	
	@media (max-width: 991px){
		.user-bg{display: none;}
		.user-icon{position: relative; margin-top: 0px; left: 0;}
		.image-profile{text-align: center; margin-bottom: 30px;}
		.barcode-wallet{text-align: center;}
		.barcode-wallet img{width: 25% !important; margin: auto;}
	}
	@media (max-width:767px){
		.form-group{margin: 0 !important;}
		#tab_2 .form-group label, #tab_ .form-group label{margin-left: -15px;}
	}
</style>
<!-- Start body hold-transition skin-black fixed -->
<body class="hold-transition skin-black fixed">
<!-- Start wrapper -->
<div class="wrapper">

  <?php include('page-header.html');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('page-sidebar.html');?>

  <!-- Start Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <!-- Start Section content container-fluid -->
    <section class="content container-fluid" style="margin-top: 20px; margin-left:20px; margin-right:20px;">
        <!-- Start form -->
        <form class="form-horizontal" id="frm_transfer_eth" action="starter.html" method="post">
            <div class="row">
                <div class="col-md-3 col-sm-12 image-profile">
                    <img src="dist/img/bio-bg.png" class="user-bg">
                    <img src="dist/img/user-big.png" class="user-icon">
                </div>
                <div class="col-md-1 col-sm-1">
                </div>
                <div class="col-md-8 col-sm-12">
                    <!-- Start nav-tabs -->
                    <div class="nav-tabs-custom">
                         <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Personal Data</a></li>
                          <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Wallet</a></li>
                          <li><a href="#tab_5" data-toggle="tab" aria-expanded="false">Account</a></li>
                          <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Password</a></li>
                         </ul>
                         <!-- Start tab-content -->
                         <div class="tab-content">
                            <!-- start tab content account information-->
                            <div class="tab-pane active" id="tab_1">
                                <!-- Start box box-solid box-warning -->
                                <div class="box box-solid box-warning">
                                    <div class="box-body">
                                        <h3>Personal Information</h3><br>
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label for="fullname" class="col-sm-4">Full Name</label>
                                                  <div class="col-sm-8">
                                                    <a id="full-name" onclick="showInputFullname();">Stephen Chao <i class="fa fa-pencil"></i></a>
                                                    <div class="input-group input-group-sm" id="full-name-input" style="display:none">
                                                        <input type="text" class="form-control" placeholder="Full Name" value="Stephen Chao">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-success btn-flat" id="btnok-submit-fullname"><i class="fa fa-check"></i></button>
                                                            <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-fullname"><i class="fa fa-times"></i></button>
                                                        </span>
                                                    </div>
                                                    <!-- End input-group input-group-sm -->
                                                   </div>
                                                   <!-- End col-sm-8 -->
                                                </div><!-- End form-group full name-->
                                            </div>
                                            <!-- End col-sm-6 -->

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-4">Username</label>       
                                                        <div class="col-sm-8">
                                                        <p>IXIA1A105</p>
                                                        </div>
                                                        <!-- End col-sm-8 -->
                                                </div><!-- End form-group username-->
                                            </div>
                                            <!-- End-col-sm-6 -->

                                        </div>
                                        <!-- End row box-body -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                 <div class="form-group">
                                                  <label for="phone" class="col-sm-4">Mobile Phone</label>       
                                                  <div class="col-sm-8">
                                                      <p>087767678989</p>
                                                  </div>
                                                </div><!-- End form-group phone-->
                                            </div>
                                            <!-- End col-sm-6 -->

                                            <div class="col-sm-6">
                                                 <div class="form-group">
                                                    <label for="email" class="col-sm-4">Email</label>       
                                                    <div class="col-sm-8">
                                                      <p>chao@mail.com</p>
                                                    </div>
                                                 </div><!-- End Form-group email-->
                                            </div>
                                            <!-- End col-sm-6 -->
                                        </div>
                                        <!-- End row -->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="password_confirmation" class="col-sm-2">Change avatar</label>
                                                    <div class="col-sm-9">
                                                        <a id="upload" onclick="showUpload()">Click Here <i class="fa fa-pencil"></i></a>
                                                        <div class="input-group input-group-sm" id="upload-input" style="display:none">
                                                             <form action="{{ route('profileUpload') }}" method="post" enctype="multipart/form-data">
                                                                <input id="upload-file" type="file" class="form-control" name="avatar" accept="image/*">
                                                                <span class="input-group-btn">
                                                                    <button type="submit" class="btn btn-success btn-flat" id="btnok-submit-upload"><i class="fa fa-check"></i></button>
                                                                    <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-upload"><i class="fa fa-times"></i></button>
                                                                </span>
                                                            </form>
                                                            <!-- End form -->
                                                        </div>
                                                        <!-- End input-group input-group-sm -->
                                                    </div>
                                                    <!-- End col-sm-9 -->
                                                </div><!-- End form-group change ava-->
                                            </div>
                                            <!-- End col -->
                                        </div>
                                        <!-- End row -->

                                        <hr>

                                        <div class="form-group">
                                            <label for="address" class="col-sm-3">Address</label>         
                                            <div class="col-sm-8 input-group input-group-sm">
                                                <input type="text" class="form-control" id="address" placeholder="Address">
                                            </div>
                                        </div>
                                        <!-- End form-group Address -->
                                        <div class="form-group">
                                            <label for="personalID" class="col-sm-3">Personal ID</label>       
                                             <div class="col-sm-8 input-group input-group-sm">
                                                <input type="text" class="form-control" id="personal_id" placeholder="Personal ID">
                                            </div>
                                        </div>
                                        <!-- End form-group Personal ID -->
                                        <div class="form-group">
                                            <label for="birthdate" class="col-sm-3">Birth Date</label>
                                             <div class="col-sm-8 input-group input-group-sm">
                                                <input type="text" class="form-control" id="birthdate" data-date-format="yyyy/mm/dd" placeholder="Birth Date">
                                            </div>
                                        </div>
                                        <!-- End Form-group Birth Date -->
                                        <div class="form-group">
                                            <label for="birthdate" class="col-sm-3">Place of Birth</label>
                                             <div class="col-sm-8 input-group input-group-sm">
                                                <input type="text" class="form-control" id="birthplace" placeholder="Place of Birth">
                                            </div>
                                        </div>
                                        <!-- End form-group Place of birth -->
                                        <div class="form-group">
                                            <div class="col-sm-11">
                                                <button class="btn btn-sm btn-warning pull-right">Save</button>
                                            </div>
                                        </div>
                                        <!-- End form-group save -->
                                </div>
                                <!-- End box box-solid box-warning -->
                            </div>
                            <!-- End tab-pane -->
                        </div>
                        <!--end tab content account information-->
                             
                            <!--start tab content password-->
                            <div class="tab-pane" id="tab_3">
                                <div class="box box-solid box-warning">
                                    <div class="box-body">
                                        <div class="form-group password-input">
                                            <label for="password_old" class="col-sm-3">Old Password</label>       
                                            <div class="col-sm-8 input-group">
                                                <input type="text" class="form-control" id="password_old" placeholder="">
                                            </div>
                                        </div>
                                         <!-- End form-group Old password -->
                                        <div class="form-group password-input">
                                            <label for="password_now" class="col-sm-3">New Password</label>       
                                            <div class="col-sm-8 input-group input-group-lx">
                                                <input type="text" class="form-control" id="password_now" placeholder="">
                                            </div>
                                        </div>
                                        <!-- End form-group New Password -->
                                        <div class="form-group password-input">
                                            <label for="password_confirmation" class="col-sm-3">Confirm New Password</label>       
                                            <div class="col-sm-8 input-group ">
                                                <input type="password" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-success btn-flat" id="btnok-submit-password"><i class="fa fa-check"></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-password"><i class="fa fa-times"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End form-group confirm new password -->
                                    </div>
                                    <!-- End box-body -->
                                </div>
                                <!-- End box box-solid box-warning -->
                            </div>
                            <!--end tab content password-->
                             
                            <!--start tab content wallet account-->
                            <div class="tab-pane" id="tab_4">
                                <div class="box box-solid box-warning">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label for="walletAddress" class="col-sm-3">Wallet Address</label>       
                                                    <div class="col-sm-9 input-group input-group-sm">
                                                        <input type="text" id="walletAddress" class="form-control" value="0xFf2463e6c45B6263638168c54e8049842dFB73dF">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-success btn-flat" id="btn-copy" onclick="copyAddress();"><i class="fa fa-copy"></i></button>
                                                        </span>
                                                    </div>
                                                    <!-- End col input-group wallet address -->
                                                </div>
                                                <!-- End form-group -->
                                                 <div class="form-group">
                                                    <label for="password_now" class="col-sm-3">Wallet Key</label>       
                                                    <div class="col-sm-9 input-group input-group-sm">
                                                        <input type="text" class="form-control" id="walletKey" value="0x09456d75377f56692d9c57d679e2d5108ad96110">
                                                    </div>
                                                 </div>
                                                 <!-- End form-group wallet key -->
                                                 <div class="form-group" >
                                                    <label for="accAddress2" class="col-sm-3">Wallet Key 2</label>       
                                                    <div class="col-sm-9 input-group input-group-sm">
                                                        <input type="text" class="form-control" id="walletKey2" value="0x09456d75377f56692d9c57d679e2d5108ad96110">
                                                    </div>
                                                 </div>
                                                 <!-- End form-group wallet key 2 -->
                                                 <div class="form-group">
                                                    <label for="accAddress2" class="col-sm-3">Type</label>       
                                                    <div class="col-sm-9 input-group input-group-sm">
                                                        <select class="form-control">
                                                            <option value="1">Ethereum</option>
                                                        </select>
                                                    </div>
                                                 </div>
                                                 <!-- End form-group type -->
                                            </div>
                                            <!-- End col-md-9 -->
                                            <div class="col-md-3 barcode-wallet">
                                                <img src="dist/img/eth-qr.png">
                                            </div>
                                            <!-- End col-md-3 -->
                                            <div class="clearfix">
                                            </div>
                                            <!-- End clearfix -->
                                        </div>
                                        <!-- End row -->
                                    </div>
                                    <!-- End box-body -->
                                </div>
                                <!-- box box-solid box-warning -->

                                <div id="snackbar">Copied to Clipboard</div>
                            </div>
                            <!-- End tab-pane content wallet account-->
                             
                            <!--start tab content account information-->
                            <div class="tab-pane" id="tab_5">
                                <div class="box box-solid box-warning">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="walletAddress" class="col-sm-3">User Account ID</label>       
                                            <div class="col-sm-8 input-group input-group-sm">
                                                <input type="text" id="userAccID" class="form-control" placeholder="User Account ID">
                                            </div>
                                        </div>
                                        <!-- End form-group user account id -->
                                        <div class="form-group">
                                            <label for="password_now" class="col-sm-3">User Key</label>       
                                            <div class="col-sm-8 input-group input-group-sm">
                                                <input type="text" class="form-control" id="userKey" placeholder="User Key">
                                            </div>
                                        </div>
                                        <!-- End form-group user key -->
                                        <div class="form-group" >
                                            <label for="accAddress2" class="col-sm-3">User Key 2</label>       
                                            <div class="col-sm-8 input-group input-group-sm">
                                                <input type="text" class="form-control" id="userKey2" placeholder="User Key 2">
                                            </div>
                                        </div>
                                        <!-- End form-group user key2 -->
                                        <div class="form-group">
                                            <label for="accAddress2" class="col-sm-3">Type</label>       
                                            <div class="col-sm-8 input-group input-group-sm">
                                                <select class="form-control">
                                                    <option value="1">Ethereum</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- End form-group type -->
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- End box-body -->
                                </div>
                                <!-- End box box-solid box-warning -->
                            </div>
                            <!-- End tab-pane content account information-->
                        </div>
                        <!-- End nav-tabs-custom -->
                    </div>
                    <!-- End col-md-8 col-sm-12 -->
                </div>
                <!-- End row -->
        </form>
        <!-- End form -->
    </section>
    <!-- End Section -->
  </div>
  <!-- /.content-wrapper -->

<!--Footer section-->
<?php include('page-footer.html');?>

</div>
<!-- ./wrapper -->

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
<!--datepicker-->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function(){

            // btn full name
            $('#btnok-submit-fullname').click(function() {
                $.ajax({
                    url: '/setting/profile/full-name-save-edit',
                    type: 'post',
                    data: {
                        _token: '{{csrf_token()}}',
                        fullname: $('#full-name-input input').val()
                    },
                    error: function(datas, status, c) {
                        $('#msg').addClass('alert-'+datas.responseJSON.type);
                        $('#msg').removeClass('alert-success');
                        $('#msg strong').text(datas.responseJSON.msg);
                        $('#msg').show();
                    },
                    success: function(datas, status,c) {
                        $('#msg').removeClass('alert-danger');
                        $('#msg').addClass('alert-success');
                        $('#msg strong').text(datas.msg);
                        $('#msg').show();
                        $('.text-full-name').text($('#full-name-input input').val());
                        $('#full-name-input').hide();
                        $('#full-name').show();

                    }
                })
            });

            $('#btnok-submit-password').click(function() {
                $.ajax({
                    url: '/setting/profile/change-password-save',
                    type: 'post',
                    data: {
                        _token: '{{csrf_token()}}',
                        password: $('#password_now').val(),
                        password_confirmation: $('#password_confirmation').val(),
                        password_old: $('#password_old').val(),
                    },
                    error: function(datas, status, c) {
                        $('#msg').addClass('alert-'+datas.responseJSON.type);
                        $('#msg').removeClass('alert-success');
                        $('#msg strong').text(datas.responseJSON.msg);
                        $('#msg').show();
                    },
                    success: function(datas, status,c) {
                        $('#msg').removeClass('alert-danger');
                        $('#msg').addClass('alert-success');
                        $('#msg strong').text(datas.msg);
                        $('#msg').show();
                        $('.text-full-name').text($('#full-name-input input').val());
                        $('#full-name-input').hide();
                        $('#full-name').show();

                    }
                })
            });

            $('#btncancel-submit-fullname').click(function(){
                $('#full-name-input').hide();
                $('#full-name').show();
            });

            $('#btncancel-submit-password').click(function(){
                $('.password-input').hide();
                $('#password').show();
            });
            
            $('#btncancel-submit-upload').click(function(){
                $('#upload-input').hide();
                $('#upload').show();
            });
        });

        function showInputFullname() {
            $('#full-name').hide();
            $('#full-name-input').show();
            $('#full-name-input input').focus();
        }

//        function showInputPassword() {
//            $('#password').hide();
//            $('.password-input').show();
//            $('#password-input input').focus();
//        }
        
        function showUpload() {
                $('#upload').hide();
                $('#upload-input').show();
        }
        
        function copyAddress(){
              var copyText = document.getElementById("walletAddress");
              copyText.select();
              document.execCommand("copy");
              /*toast*/
              var x = document.getElementById("snackbar");
              x.className = "show";
              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
        
      //Date picker
        $('#birthdate').datepicker({
          autoclose: true
        })
</script>
</body>
</html>