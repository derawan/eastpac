@extends('layouts.app')

<style> 
.user-bg .user-icon{
    position: absolute;   
}
    
.user-bg{
    width: 75%;
    position: absolute;
    z-index: 0; 
    margin-left: 15%;
}
.user-icon{
  position: absolute;
	width: 80%;
	margin-top: 20%;
	left: 45%;
	z-index: 10;  
}
</style>
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid" style="margin-top: 20px; margin-left:20px; margin-right:20px;">
      <form class="form-horizontal" id="frm_transfer_eth" action="starter.html" method="post">
        <div class="row">
            <div class="box box-warning">
               
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="dist/img/bio-bg.png" class="user-bg">
                            <img src="{{asset('dist/img/user-big.png')}}" class="user-icon">
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-6">
                             <div class="box-header">
                              <h3 class="box-title">Account Information</h3>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-3 ">Verifikasi</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="name" placeholder="" name="name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-3 ">Full Name</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="full-name" placeholder="{{ Auth::user()->name }}" name="name" disabled onclick="showInputFullname()">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-success btn-flat" id="btnok-submit-fullname"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-fullname"><i class="fa fa-times"></i></button>
                                </span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-3">Username</label>       
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="username" placeholder="" name="username" value="{{ Auth::user()->username }}" disabled>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-3">Mobile Phone</label>       
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="phone" placeholder="" name="phone" value="{{ Auth::user()->phone }}" disabled>
                              </div>
                            </div>
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3">Email</label>       
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="email" placeholder="" name="email" value="{{ Auth::user()->email }}" disabled>
                                </div>
                             </div>
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3">Old Password</label>       
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="password_old" placeholder="" name="password_old">
                                </div>
                             </div>
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3">New Password</label>       
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="password_now" placeholder="" name="password_now">
                                </div>
                             </div>
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3">Confirm New Password</label>       
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="password_confirmation" placeholder="" name="password_confirmation">
                                </div>
                             </div>
                             <div class="row pull-right">
                                <div class="col-sm-6">
                                   <button type="submit" class="btn btn-warning pull-right" onclick="return false;" id="btncancel-submit-password">Cancel</button>
                                </div>
                                <div class="col-sm-6">
                                   <button type="submit" id="btnok-submit-password" class="btn btn-info pull-right" onclick="return false;">Update</button>
                                </div>
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
@endsection


@section('script')
<script>
     $(document).ready(function(){
            
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
            document.getElementById("full-name").disabled = false;
        }
</script>
@endsection







