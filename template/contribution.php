<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | Contribution</title>
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
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/contribution.css">
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">
  <!--sweetalert -->    
<!--  <link rel="stylesheet" href="dist/css/skins/skin-black.css">-->
 
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    

<style>
.step-number {
    flex-shrink: 0;
    height: 48px;
    width: 48px;
    font-size: 16px;
    color: #758698;
    border: 2px solid #b1becc;
    text-align: center;
    line-height: 45px;
    border-radius: 50%;
    margin-right: 12px;
    margin-top: 4px;
    margin-bottom: 4px;
}
.note {
    padding: 15px 15px 15px 45px;
    border-radius: 4px;
    position: relative;
}
.note-info {
    background: #edf5ff;
}
.note-danger {
    background: rgba(255, 0, 0, 0.05);
}
</style>

<body class="hold-transition skin-black fixed">
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-sm-12" style="margin-top: 10px">
            <div class="box box-warning">
                <div class="box-header with-border">
                  <h2 class="box-title">Buy Tokens</h2>
                    <div class="box-body">
                      <div class="status status-empty">
                       <div class="row">
                            <div class="user-panel" style="text-align:left;">
                            <form action="#">
                                <div class="step-head" style="display: flex; align-items: center"><div class="step-number">01</div><div class="step-head-text"><h4 class="pull-left">Select the payment method and calculate token price</h4></div>
                                </div>
                               <hr>
                                <div class="gaps-1x"></div>
                                <div class="payment-list">
                                    <div class="row">
                                       <div class="col-md-3 col-sm-6">
                                            <div class="payment-item">
                                                <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH" checked="">
                                                <label for="payeth">
                                                    <div class="payment-icon payment-icon-eth"><img src="dist/img/icon-ethereum.png" alt="icon"></div>
                                                    <span class="payment-cur">Ethereum</span>
                                                </label>
                                                <span>@ 0.1 ETH</span>
                                            </div>       
                                       </div><!-- .col -->
                                       <div class="col-md-3 col-sm-6">
                                            <div class="payment-item">
                                                <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC" disabled>
                                                <label for="paylightcoin">
                                                    <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="dist/img/icon-lightcoin.png" alt="icon"></div>
                                                    <span class="payment-cur">Litecoin</span>
                                                </label>
                                                <span>@ 0.1 LTC</span>
                                            </div>
                                       </div> 
                                       <div class="col-md-3 col-sm-6">
                                           <div class="payment-item">
                                                <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC" disabled>
                                                <label for="paybtc">
                                                    <div class="payment-icon payment-icon-btc"><img class="payment-icon" src="dist/img/icon-bitcoin.png" alt="icon"></div>
                                                    <span class="payment-cur">Bitcoin</span>
                                                </label>
                                                <span>@ 0.05 BTC</span>
                                            </div>
                                       </div>
                                       <div class="col-md-3 col-sm-6">
                                           <div class="payment-item">
                                                <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD" disabled>
                                                <label for="payusd">
                                                    <div class="payment-icon payment-icon-usd"><img class="payment-icon" src="dist/img/icon-dollar.png" alt="icon"></div>
                                                    <span class="payment-cur">US Dollar</span>
                                                </label>
                                                <span>@ 0.5 USD</span>
                                            </div>
                                       </div>
                                    </div><!-- .row -->
                                </div><!-- .payment-list -->
                                <hr>
                                <div class="gaps-1x"></div>
                                <div class="step-head" style="display: flex; align-items: center"><div class="step-number">02</div><div class="step-head-text"><h4 class="pull-left">Set amount of EAST tokens you would like to purchase</h4></div>
                                </div>
                                <hr>
                              
                                <p>To become a part of the ICO Crypto project and purchase of EAST token will only be possible after payment made and receving an approval.  As you like to participate our project, please select payment method and enter the amount of EAST tokens you wish to purchase. You can buy EAST tokens using ETH. </p>
                                <div class="gaps-1x"></div><br>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="payment-calculator">
                                            <div class="form-group">
                                                <label for="paymentGet">Tokens to Purchase</label>
                                                <div class="payment-input">
                                                    <input class="form-control" type="text" id="paymentGet" value="1200">
                                                    <span class="payment-get-cur payment-cal-cur">EAST</span>    
                                                </div>
                                            </div>
                                            <em class="ti ti-exchange-vertical"></em>
                                            <div class="form-group">
                                                <label for="paymentFrom">Payment Amount</label>
                                                <div class="payment-input">
                                                    <input class="form-control" type="text" id="paymentFrom" value="600">
                                                    <span class="payment-from-cur payment-cal-cur">USD</span>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gaps-2x d-md-none"></div>
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="payment-bonus">
                                            <h6 class="payment-bonus-title">Current Bonus</h6>
                                            <span class="payment-bonus-amount">20% <span>on pre-sales</span></span>
                                            <span class="payment-bonus-time">End at - 09 Jan, 2019</span>
                                        </div>
                                        <div class="gaps-1x d-md-none"></div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                                <div class="gaps-1x"></div>
                                <div class="payment-calculator-note"><i class="fa fa-info-circle" style="color:#f39c12"></i>The calculator helps you to convert required currency to EAST tokens.</div>
                                <div class="gaps-3x"></div>
                                <div class="payment-summary">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="payment-summary-item payment-summary-final">
                                                <h6 class="payment-summary-title">Final Payment</h6>
                                                <div class="payment-summary-info">
                                                    <span class="payment-summary-amount">600.00</span> <span>usd</span>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="payment-summary-item payment-summary-bonus">
                                                <h6 class="payment-summary-title">Received Bonus</h6>
                                                <div class="payment-summary-info">
                                                    <span>+</span> <span class="payment-summary-amount">600.00</span> <span>east</span>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="payment-summary-item payment-summary-tokens">
                                                <h6 class="payment-summary-title">Tokens Received</h6>
                                                <div class="payment-summary-info">
                                                    <span class="payment-summary-amount">12,200</span> <span>icox</span>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .payment-summary -->
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#tranxETH">
                                   Purchase Token
                                </button>
                                
                                
                                
                            </form><!-- form -->
                        </div>
                       </div>
                
                </div>
                </div>
              </div>
                
           
          </div>
        </div>
      </div>
      
</section>
<div class="modal fade" id="tranxETH" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details ETH</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 EAST</strong> tokens (incl. bonus of 450 EAST) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <i class="fa fa-ethereum"></i>
                            <input type="text" class="tranx-payment-address" value="0xFf2463e6c45B6263638168c54e8049842dFB73dF" disabled="">
                            <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="0xFf2463e6c45B6263638168c54e8049842dFB73dF"><i class="fa fa-copy"></i></button>
                        </div><!-- .tranx-payment-info --><!-- @updated on v1.0.1 -->
                        <ul class="tranx-info-list">
                            <li><span>SET GAS LIMIT:</span> 120 000</li>
                            <li><span>SET GAS PRICE:</span> 95 Gwei</li>
                        </ul><!-- .tranx-info-list -->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    <span>OR Scan bellow QR Code to pay</span>
                                    <img class="tranx-info-qrimg" src="dist/img/eth-qr.png" alt="qr">
                                    <div class="gaps-4x"></div><br>
<!--                                    <ul class="btn-grp guttar-20px">-->
                                        <button href="#" class="btn btn-primary" onclick="getPayments()">Yes, I want</button>
                                        <button href="#" class="btn btn-danger" data-dismiss="modal">No, Thanks</button>
<!--                                    </ul>-->
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <i class="fa fa-info-circle" style="color:#93d1ff;"></i>
                                    <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <i class="fa fa-info-circle" style="color:#ff4b4b"></i>
                                    <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
</div>
</div>

</div>
<!--Footer section-->
<?php include('page-footer.html'); ?>

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
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
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
<script src="dist/sweetalert/dist/sweetalert.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="bower_components/Flot/jquery.flot.categories.js"></script>
<script src="bower_components/chart.js/amcharts.js"></script>
<script src="bower_components/chart.js/serial.js"></script>
<script>
    function getPayments(){
//       swal({
//          title: "We're reviewing your payment",
//          text: "We’ll review your transaction and get back to your within 6 hours. You’ll receive an email with the details of your contribution.",
//          icon: "success",
//          button: "Purchase",
//        },function() {
//            window.location = "transaction.php";
//        });
        
        
        swal({ title: "We're reviewing your payment",
               text: "We’ll review your transaction and get back to your within 6 hours. You’ll receive an email with the details of your contribution.",
               icon: "success",  
               button: "Purchase",
               type: "success"}).then(okay => {
               if (okay) {
                window.location.href = "transaction.php";
              }
            });
    }
</script>

</body>
</html>