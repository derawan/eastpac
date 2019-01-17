@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
   


<link rel="stylesheet" href="{{asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">KYC Request</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered" id="tbl-kyc" style="padding:10px">
                                    <thead>
                                        <tr>
                                            <td>First Name</td>
                                            <td>Last Name</td>
                                            <td>Phone Number</td>
                                            <td>Email</td>
                                            <td>Date</td>
                                            <td>Status</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl-kyc"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                    {{-- <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul> --}}
                    {{ $kycs->links() }}
                    </div>
                    
                </div>
                </div>
            </div>
        </div>


        <!-- /.box -->

    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->



@endsection

@section('script')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
    $('.pagination').addClass('pagination-sm no-margin pull-right');

</script>
<script>
                        
                        $(function(){
                            $('#tbl-kyc').DataTable( {
                                "ajax": "{{route('kyc.getlist')}}",
                                "columns": [
                                    
                                    { "data": "first_name" },
                                    { "data": "last_name" },
                                    { "data": "mobilenumber" },
                                    { "data": "email" },
                                    { "data": "created_at" },
                                    { "data": "status", render:function(data){
                                        switch(data)
                                        {
                                            case 1 : return 'PENDING'; break;
                                            case 2 : return 'PROGRESS'; break;
                                            case 3 : return 'APPROVED'; break;
                                            case 4 : return 'REJECT'; break;
                                        }
                                    } },
                                    { "data": "id", render:function(data,type,row,meta){
                                        t = '<a href="/administrator/kyc/show/'+data+'" class="btn btn-sm ';
                                        t += 'btn-warning" title="view detail"> ';
                                        t += '<i class="fa fa-search"></i> </a>';
                                        return t;
                                    } }

                                ]
                            } );
                        })
                    </script>

@endsection
