@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/contribution.css')}}">
<style>
/*countdown timer*/
#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display: contents;
  font-weight: 100;
  text-align: center;
  font-size: 20px;

}

#clockdiv td > div{
  padding: 3px;
  border-radius: 5px;
/*  background: #701296;*/
  display:table-cell;
  margin-left: 0px;
}
	#clockdiv table{
		margin: auto;
	}
	#clockdiv table td{
		padding: 0px;
	}
#clockdiv td div > span{
    padding: 5px 3px;
    border-radius: 5px;
    background: #b060d0;
}
.smalltext{
  padding-top: 5px;
  font-size: 10px;
}
.token-countdown{
  background: #f39c12;
  padding: 0px;
}
.token-countdown-title{
  color: #fff;
  margin-bottom: 10px;
}

@media only screen and (max-width: 991px) {
.div-btn-process{
		margin-top:20px;
}
.div-btn-process .pull-right{
	float:none !important;
}
}

/*amchartjs*/
#chartdiv {
  width: 100%;
  height: 500px;
}
 
</style>
@endsection

@section('content')
<section class="content" style="min-height: 25px;">  
    <!-- Start box box-warning -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">D - Share</h3>
        </div>
        <!-- Start User-panel -->
        <div class="user-panel">
            <div class="row">
                <div class="col-md-9" border="1">
                    <div class="box box-solid box-warning">
                    <!-- Start Box-Body -->
                      <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="tile-item tile-primary">
                                    <div class="tile-bubbles"></div>
                                    <h6 class="tile-title">YOUR D-SHARE</h6>
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
                                <input type="text" class="form-control" style="border:1px solid #f39c12" id="est">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-warning btn-flat">EST</button>
                                </span>
                              </div>
                            </div>
                            <div class="col-md-1" style=" text-align: center; margin-top:10px"><i class="fa fa-exchange"></i></div>
                             <div class="col-md-4">
                              <div class="input-group input-group-lg">
                                <input type="text" class="form-control" style="border:1px solid #f39c12" id="dshare">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-warning btn-flat">ETH</button>
                                </span>
                              </div>
                            </div>
                            <div class="col-md-2 div-btn-process"><button class="btn btn-lg btn-warning pull-right" onclick="processExchange()">Process</button></div>
                          </div><hr>
                          
                           <!--tab start -->
                          <div class="row">
                            <div class="col-md-12">
                                <!-- Start nav-tabs -->
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                      <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">D-Share Chart</a></li>
                                      <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">D-Share Transaction</a></li>
                                      <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">My Transaction</a></li>
                                     </ul>
                                </div><!-- end nav-tabs -->
                                <!-- Start tab-content -->
                                <div class="tab-content">
                                     <!-- start tab content dshare chart-->
                                    <div class="tab-pane active" id="tab_1">
                                        <div id="chartdiv"></div>
                                    </div><!-- end tab content dshare chart-->
                                    <!-- start tab content dshare table-->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="box-body table-responsive no-padding">
                                              <table class="table table-hover">
                                                <tbody>
                                                <tr>
                                                  <th>ID</th>
                                                  <th>User</th>
                                                  <th>Date</th>
                                                  <th>Status</th>
                                                </tr>
                                                <tr>
                                                  <td>183</td>
                                                  <td>Alexander Christie</td>
                                                  <td>11-02-2019</td>
                                                  <td><span class="label label-warning"><i class="fa fa-minus-circle"></i></span></td>
                                                </tr>
                                                <tr>
                                                  <td>219</td>
                                                  <td>Olivia Burton</td>
                                                  <td>10-02-2019</td>
                                                    <td><span class="label label-success"><i class="fa fa-check-circle"></i></span></td>
                                                </tr>
                                                <tr>
                                                  <td>657</td>
                                                  <td>Michael Kors</td>
                                                  <td>09-02-2019</td>
                                                  <td><span class="label label-success"><i class="fa fa-check-circle"></i></span></td>
                                                </tr>
                                                <tr>
                                                  <td>175</td>
                                                  <td>Alba</td>
                                                  <td>08-02-2019</td>
                                                  <td><span class="label label-danger"><i class="fa fa-times-circle"></i></span></td>
                                                </tr>
                                                <tr>
                                                  <td>196</td>
                                                  <td>Elle</td>
                                                  <td>07-02-2019</td>
                                                  <td><span class="label label-success"><i class="fa fa-check-circle"></i></span></td>
                                                </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                    </div><!-- end tab content dshare table-->
                                     <!-- start tab content dshare chart-->
                                    <div class="tab-pane" id="tab_3">
                                        <div class="box-body table-responsive no-padding">
                                              <table class="table table-hover">
                                                <tbody>
                                                <tr>
                                                  <th>ID</th>
                                                  <th>Date</th>
                                                  <th>Amount</th>
                                                  <th>Status</th>
                                                </tr>
                                                <tr>
                                                  <td>005</td>
                                                  <td>11-02-2019</td>
                                                  <td>70</td>
                                                  <td><span class="label label-success">Buy D-Share</span></td>
                                                </tr>
                                                <tr>
                                                  <td>004</td>
                                                  <td>10-02-2019</td>
                                                  <td>30</td>
                                                  <td><span class="label label-success">Buy D-Share</span></td>
                                                </tr>
                                                <tr>
                                                  <td>003</td>
                                                  <td>09-02-2019</td>
                                                  <td>63</td>
                                                  <td><span class="label label-success">Buy D-Share</span></td>
                                                </tr>
                                                <tr>
                                                  <td>002</td>
                                                  <td>08-02-2019</td>
                                                  <td>80</td>
                                                  <td><span class="label label-warning">Buy EST</span></td>
                                                </tr>
                                                <tr>
                                                  <td>001</td>
                                                  <td>07-02-2019</td>
                                                  <td>30</td>
                                                  <td><span class="label label-warning">Buy EST</span></td>
                                                </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                    </div><!-- end tab content dshare chart-->
                                </div><!-- end tab-content -->
                            </div>
                          </div>
                           <!-- End Box-body -->
                        </div>
                         <!-- End box box-solid box-warning  -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->

                <!--exchange rate-->
                <div class="col-md-3" border="1px">
                  <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                      <div class="box-title"><h3>D-Share Current Price</h3></div>
                    </div>

                    <!-- Start Box-body -->
                    <div class="box-body">
                        <h6>EXCHANGE RATE</h6>
                        <h4>1 ETH = 100 EAST = 70 D-SHARE</h4>
                        <hr>      
                    </div>
                    <!-- End Box-body -->
                  </div>
                  <!-- End Box Box-solid box-warning -->

                        <!-- Start token-countdown -->
                        <div class="token-countdown" style="padding-bottom: 10px; margin-top: 10px;">
                          <span class="token-countdown-title">SALE END IN</span>
                              <!-- Start clockdiv -->
                              <div id="clockdiv">
                                <!-- Start Table -->
                                <table>
                              	  <tr>
                              		  <td>
                                    <!-- Days -->
  		                                  <div>
                                            <span class="days"></span>
                                            <div class="smalltext">Days</div>
               		                      </div>
                              		  </td>

                              		  <td>
                                    <!-- Hours -->
                                      <div>
                                          <span class="hours"></span>
                                          <div class="smalltext">Hours</div>
                                      </div>
                              			</td>
                              		
                                    <td>
                                    <!-- Minutes -->
                                      <div>
                                        <span class="minutes"></span>
                                        <div class="smalltext">Minutes</div>
                                      </div>    
                                    </td>
                                    
                                    <td>
                                    <!-- Seconds -->
                                      <div>
                                        <span class="seconds"></span>
                                        <div class="smalltext">Seconds</div>
                                      </div>
                                    </td>

                                  </tr>
                                </table>
                                <!-- End Table -->
                              </div>
                              <!-- End clockdiv -->
                      </div>
                      <!-- End token-countdown -->
        
                      <br>
                        <!-- Start box box-solid box-warning  -->
                      <div class="box box-solid box-warning">
                          <!-- Start boz-header -->
                          <div class="box-header with-border">
                            <div class="box-title"><h3>Latest News</h3></div>
                          </div>
                          <!-- End Box-header -->

                            <!-- Start box-body -->
                            <div class="box-body" style="text-align:justify">
                                <p>The global economy looks poised to slow moderately from 3.8% in 2018 to 3.5% next year in Goldman Sachs Research’s view, led by deceleration in the US and further softening in China <a href="#">Read more...</a> 
                                </p>
                            </div>
                            <!-- End Box-body -->
                      </div>
                      <!-- End box box-solid box-warning -->
                </div>
            </div>
        </div>
        <!-- End User-panel -->
    </div>
    <!-- End Box-warning -->
</section>
@endsection
        
@section('script')
<!--<script src="{{ asset('bower_componens/datatables.net/js/jquery.dataTables.min.js') }}"></script>-->
<!-- amchartjs -->
<script src="{{asset('dist/js/amchart/core.js')}}"></script>
<script src="{{asset('dist/js/amchart/charts.js')}}"></script>
<!--all dshare js-->    
<script src="{{asset('dist/js/dshare.js')}}"></script>       
@endsection
        