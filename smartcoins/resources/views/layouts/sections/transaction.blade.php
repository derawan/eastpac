@extends('layouts.app')

@section('css')

@endsection

@section('content')

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
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!--DataTables-->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">
  <link rel="shortcut icon" href="dist/img/favicon.ico">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<section class="content" style="padding-left: 30px;padding-right: 30px;">
    <div class="nav-tabs-custom">
         <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Transaction by Token</a></li>
            <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Transaction by D-Share</a></li>
         </ul>
     

         <!-- Start tab-content -->
         <div class="tab-content">
         
            <div class="tab-pane active" id="tab_1">
                <div class="card">
                    <div class="row">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Transaction</h3>
                            </div>

                            <div class="box-body">
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
             <div class="tab-pane" id="tab_2">
               <div class="box box-solid box-warning">
                  <div class="box-body">
                     <div id="box-body table-responsive">
                        <table id="example2" class="display dt-responsive" style width="100%">
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
                     <!-- end box=body table-responsive -->
                  </div>
                  <!-- End box-body -->
               </div>
               <!-- End box box-solid box-warning -->
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
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

            }
        ]
    });




        });
    
    
    //example2
$(document).ready(function() {
  var responseObj = [
    { "txhash": "0x5456746ewfds787..", "block": "90898",  "age":"25 sec ago", "from":"0x56sa5wsa564a455..", "to":"0x94jd2", "value":"0.002 ether"},
    { "txhash": "0xadw56754azsa897..", "block": "90898",  "age":"26 sec ago", "from":"0xsxa564sa5645aa4..", "to":"0x23hjk", "value":"0. ether"},
    { "txhash": "0x546sad45675asx4..", "block": "90898",  "age":"27 sec ago", "from":"0x5xs4f5d6ew456q4..", "to":"0xs7s98", "value":"0.002 ether"},
    { "txhash": "0x56asza45fw545ew..", "block": "90898",  "age":"28 sec ago", "from":"0x5a4s5a456sxza84..", "to":"0x3bhj2", "value":"0 ether"},
    { "txhash": "0xsd456asd4586sd7..", "block": "90898",  "age":"29 sec ago", "from":"0xas564sa654sas45..", "to":"0x98sa0", "value":"0.002 ether"},
    { "txhash": "0xcds56756a6sd567..", "block": "90898",  "age":"30 sec ago", "from":"0xsw45ws45658za58..", "to":"0x23hjk", "value":"0 ether"},
    { "txhash": "0xcds56756a6sd567..", "block": "90898",  "age":"30 sec ago", "from":"0xsw45ws45658za58..", "to":"0x23hjk", "value":"0 ether"},
    { "txhash": "0xcds56756a6sd567..", "block": "90898",  "age":"30 sec ago", "from":"0xsw45ws45658za58..", "to":"0x23hjk", "value":"0 ether"},
    { "txhash": "0xcds56756a6sd567..", "block": "90898",  "age":"30 sec ago", "from":"0xsw45ws45658za58..", "to":"0x23hjk", "value":"0 ether"},
    { "txhash": "0xcds56756a6sd567..", "block": "90898",  "age":"30 sec ago", "from":"0xsw45ws45658za58..", "to":"0x23hjk", "value":"0 ether"},

];
$('#example2').dataTable({
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
@endsection
