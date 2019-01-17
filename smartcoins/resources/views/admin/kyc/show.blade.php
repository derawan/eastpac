@extends('layouts.app')
@section('content')

        <section class="content">
			<div class="row">
				<div class="col-sm-12" style="margin-top: 10px">
					<div class="box box-warning">
						<div class="box-header with-border">
                            <!--start box kyc details-->
                            <div class="row">
                                <div class="col-md-4">
                                    <h2 class="box-title">KYC Details</h2>
                                </div>
                                <div class="col-md-8">
                                    <a href="#" data-el={{route('kyc.update_status') . "?id=".$kyc->id."&st=4"}} class="btn btn-danger btn-status pull-right"><i class="fa fa-times-circle"></i></a>
                                    <a href="#" data-el={{route('kyc.update_status') . "?id=".$kyc->id."&st=3"}} class="btn btn-success btn-status pull-right"><i class="fa fa-check-circle"></i></a>
                                    <a href="#"  class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Back</a>
                                </div>
                            </div>
							<div class="box-body">
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="box box-solid box-warning">
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <p><b>Submitted By</b></p>
                                                        <p>{{ $kyc->user->username }}</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p><b>Submited On</b></p>
                                                        <p>{{ $kyc->created_at }}</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p><b>Checked By</b></p>
                                                        <p>Admin</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p><b>Checked On</b></p>
                                                        <p>{{ $kyc->updated_at }}</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p><b>Admin Note</b></p>
                                                        <p>Verified by phone call</p>
                                                    </div>
                                                    <div class="col-md-2">
                                                       <p><b>Status</b></p>
                                                        @if($kyc->status == 3) 
                                                       <button class="btn btn-success">APPROVED</button>
                                                        @elseif($kyc->status == 1) 
                                                       <button class="btn btn-warning">PENDING</button>
                                                        @elseif($kyc->status == 4) 
                                                       <button class="btn btn-danger">REJECT</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
							</div>
                            <!--end box kyc detail-->
                            
                            <div class="box box-solid box-warning">
                                <div class="box-body">
                                    <div class="row">
                                        <!--start box personal information-->
                                        <div class="col-md-8">
                                            <p>PERSONAL INFROMATION</p>
                                            <table class="table" border="0">
                                                <tr><td width="15%">First Name</td><td>{{ $kyc->first_name }}</td></tr>
                                                <tr><td width="15%">Last Name</td><td>{{ $kyc->last_name }}</td></tr>
                                                <tr><td width="15%">Email Address</td><td>{{ $kyc->email }}</td></tr>
                                                <tr><td width="15%">Phone Number</td><td>{{ $kyc->mobilenumber }}</td></tr>
                                                <tr><td width="15%">Date of Birth</td><td>{{ $kyc->date_of_birth }}</td></tr>
                                                <tr><td width="15%">Full Address</td><td>{{ $kyc->address_1 }}, {{ $kyc->address_2 }}, {{ $kyc->city }}, {{ $kyc->zip_code }}</td></tr>
                                                <tr><td width="15%">State</td><td>{{ $kyc->state }}</td></tr>
                                                <tr><td width="15%">Nationality</td><td>{{ $kyc->nationality }}</td></tr>
                                                <tr><td width="15%">Wallet Address</td><td>{{ $kyc->wallet_address }}</td></tr>
                                            </table>
                                        </div>  <!--end box personal information-->
                                        <!--start box document-->
                                        @if ($kyc->getMedia('document_files')->count()>0)
                                        <div class="col-md-4">
                                            {{ $kyc->document_file }}
                                            <img src="{{ $kyc->getMedia('document_files')->first()->getFullUrl() }}">
                                        </div><!--end box document-->
                                        @else
                                        <div class="col-md-4">
                                            <img src="dist/img/vector-passport.png" width="55%">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
						</div>
				    </div>
				</div>
            </div>
        </section>
@endsection

@section('script')
<script>

                        
                        $(function(){
                            $('.btn-status').click(function(el){
                                 loc = ($($(el)[0].currentTarget).attr('data-el'));
                                 $.ajax({
                                    url:loc,
                                    success:function() {
                                       document.location = '/administrator/kyc'
                                    }
                                 })
                                
                            })
                        })
                    </script>

@endsection
