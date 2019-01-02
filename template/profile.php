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
</style>
<body class="hold-transition skin-black fixed">
<div class="wrapper">

  <?php include('page-header.html');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('page-sidebar.html');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid" style="margin-top: 20px; margin-left:20px; margin-right:20px;">
      <form class="form-horizontal" id="frm_transfer_eth" action="starter.html" method="post">
            <div class="row">
                <div class="col-sm-3">
                    <img src="dist/img/bio-bg.png" class="user-bg">
                    <img src="dist/img/user-big.png" class="user-icon">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <div class="box box-warning">
                        <div class="box-header">
                          <h3 class="box-title">Account Information</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="fullname" class="col-sm-3 ">Full Name</label>
                              <div class="col-sm-9">
                                 <a id="full-name" onclick="showInputFullname();">Stephen Chao</a>
                                 <div class="input-group input-group-sm" id="full-name-input" style="display:none">
                                    <input type="text" class="form-control" placeholder="Full Name" value="Stephen Chao">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-success btn-flat" id="btnok-submit-fullname"><i class="fa fa-check"></i></button>
                                        <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-fullname"><i class="fa fa-times"></i></button>
                                    </span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="username" class="col-sm-3">Username</label>       
                              <div class="col-sm-9">
                                  <p>IXIA1A105</p>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="phone" class="col-sm-3">Mobile Phone</label>       
                              <div class="col-sm-9">
                                  <p>087767678989</p>
                              </div>
                            </div>
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3">Email</label>       
                                <div class="col-sm-9">
                                  <p>chao@mail.com</p>
                                </div>
                             </div>
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3">Change Password</label>       
                                <div class="col-sm-8">
                                    <a id="password" onclick="showInputPassword()">Click Here !</a>
                                </div>
                             </div>
                             <div class="form-group password-input"  style="display:none" >
                                <label for="password_old" class="col-sm-3">Old Password</label>       
                                <div class="col-sm-8 input-group input-group-sm">
                                    <input type="text" class="form-control" id="password_old" placeholder="">
                                </div>
                             </div>
                             <div class="form-group password-input"  style="display:none">
                                <label for="password_now" class="col-sm-3">New Password</label>       
                                <div class="col-sm-8 input-group input-group-sm">
                                    <input type="text" class="form-control" id="password_now" placeholder="">
                                </div>
                             </div>
                             <div class="form-group password-input"  style="display:none">
                                <label for="password_confirmation" class="col-sm-3">Confirm New Password</label>       
                                <div class="col-sm-8 input-group input-group-sm">
                                    <input type="password" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-success btn-flat" id="btnok-submit-password"><i class="fa fa-check"></i></button>
                                        <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-password"><i class="fa fa-times"></i></button>
                                    </span>
                                </div>
                             </div>
                        </div>
                    </div>
            </div>
         </div>
      </form>
    </section>
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
        });

        function showInputFullname() {
            $('#full-name').hide();
            $('#full-name-input').show();
            $('#full-name-input input').focus();
        }

        function showInputPassword() {
            $('#password').hide();
            $('.password-input').show();
            $('#password-input input').focus();
        }

       

    </script>
</body>
</html>