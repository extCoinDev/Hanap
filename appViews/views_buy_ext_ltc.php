<div id="pages_buyext_ltc" class="page animated slideInRight w3-col m8 l9" style="-webkit-animation-duration: .3s !important;">
    <div class="page_bkg" style="background-color: #FFA000">
        <div class="page_menu" style="background-color: rgb(203, 198, 198)">
            <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:center; display:inline-block; width:100%; font-size:20px; font-weight:600; margin-top:3px;">Buy with Litecoin</h5>

            <div style="  position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px; padding-left:15px">
                <i class="fa fa-chevron-left" onclick="close_view('pages_buyext_ltc', 'YES');" style="color: white; font-size: 24px"></i>
                <!--<i class="fa fa-user" onclick="showProfile();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>-->

            </div>
        </div>

        <div id="feed_body" class="feed_body">
            <div class="">
                <div id="send_select_form">

                    <div id="buy_ext_btc_initForm" class="animated slideInRight" style="-webkit-animation-duration: .5s; position: absolute; left: 20px; right: 20px; ">
                        <h5>You are buying using:</h5>

                        <div style="height:50px">
                            <div class="w3-col m3 s3 l3">
                                <!--<select class="w3-select" name="option">
                            <option value="BTC">Bitcoin</option>
                            <option value="ETH">Ethereum</option>
                            <option value="XRP">Ripple</option>
                            <option value="XMR">Monero</option>
                        </select>-->
                                <h3 style=" margin-left: 5px; margin-top: 13px;">LTC</h3>
                            </div>

                            <!-- <h1 id="extequi_buy" class="animated fadeIn" style="margin:0px">0.00</h1>-->
                            <div class="w3-col m8 s8 l8  w3-right">
                                <input id="extequi_ltc_buy" oninput="computeBuyExt('LTC', 'LTC');" class="w3-input w3-border-0 w3-white wow fadeIn" style="width:100%; margin-left:auto; margin-right:auto; font-size:24px; text-align:right; outline:none;" value="0" type="number">
                                <h6 id="buy_ext_btc_price" class="w3-right" style="margin-top: 0x; color: #777;">Litecoin </h6>
                            </div>

                        </div>

                        <hr style="margin-top: 30px; background-color: #ccc;" />

                        <h5>You will recieve:</h5>
                        <div style="height:50px">
                            <div class="w3-col m3 s3 l3">
                                <select class="w3-select w3-white" title="Receive" style="border-bottom: solid 1px rgb(99, 127, 234); ">
                                    <option value="BTC">EXT</option>
                                    <option value="ETH" disabled>Ethereum</option>
                                    <option value="XRP" disabled>Ripple</option>
                                    <option value="XMR" disabled>Monero</option>
                                </select>
                            </div>

                            <div class="w3-col m8 s8 l8  w3-right">
                                <input id="extwbuy_ltc_input" oninput="computeBuyExt('EXT', 'LTC');" class="w3-input w3-border-0 w3-white wow fadeIn" style="width:100%; margin-left:auto; margin-right:auto; font-size:24px; text-align:right; outline:none" value="0" type="number">
                                <h6 id="buy_ext_btc_extlbl" class="w3-right" style="margin-top: 0px; color: #777;">EthXpert Coin</h6>
                            </div>



                            <br />
                            <div class="w3-col s12 m12 l12 w3-center">
                                <h6>CURRENT RATE</h6>
                                <h5 id="extequi_buy_rate_eth" class="w3-text-orange"></h5>
                                <br />
                                <button class="w3-button w3-round w3-padding-16 w3-ripple" onclick="payments_btc_finalizePay();" style="width: 40%; margin-bottom: 25px; background-color: rgb(203, 198, 198); color: white">NEXT</button>
                            </div>


                        </div>
                    </div>


                    <div id="buy_ext_btc_confirmForm" style="display: none; -webkit-animation-duration: .5s; position: absolute; left: 20px; right: 20px; " class="animated slideInRight">
                        <h6>Check all the details before processing</h6>

                        <br />
                        <div class="w3-col s4 m4 l4">
                            <h5 class="w3-text-orange">YOU HAVE: </h5>
                            <h5 class="w3-text-orange">YOU GET: </h5>
                            <h5 class="w3-text-orange">RECIPIENT WALLET: </h5>
                        </div>

                        <div class="w3-col s7 l7 m7">
                            <h4 id="buy_ext_btc_finalize_get" class="w3-text-grey"><b>0 BTC</b></h4>
                            <h4 id="buy_ext_btc_finalize_send" class="w3-text-grey"><b>0 EXT</b></h4>
                            <h4 class="w3-text-grey"><b>EXT WALLET</b></h4>
                        </div>


                        <div class="w3-col">

                            <hr style="margin-top: 30px; background-color: #ccc;" />

                            <div class="w3-col s6 m6 l6">
                                <h5 class="w3-text-orange">EXCHANGE RATE: </h5>
                                <h5 class="w3-text-orange">NETWORK TRANSACTION FEE: </h5>
                                <h5 class="w3-text-orange">ESTIMATED ARRIVAL: </h5>
                            </div>

                            <div class="w3-col s6 l6 m6">
                                <h5 id="buy_ext_btc_finalize_xchangrt" class="w3-text-grey"><b>0</b></h5>
                                <h4 class="w3-text-grey"><b>0.0001 BTC</b></h4>
                                <h4 class="w3-text-grey"><b>~ 5-60 minutes</b></h4>
                            </div>

                        </div>


                        <div class="w3-col s12 m12 l12">
                            <br />
                            <button class="w3-button w3-round w3-padding-16 w3-ripple" onclick="payments_btc_createOrder();" style="width: 100%; margin-bottom: 25px; background-color: #FFA000; color: white">CONFIRM AND PAY</button>
                            <br />
                            <button class="w3-button w3-round w3-padding-16 w3-ripple" onclick="payments_btc_reset();" style="width: 100%; margin-bottom: 25px; background-color: #e6e6e6; color: white">GO BACK</button>
                        </div>


                    </div>


                    <div id="showOrder_form" class="w3-center animated fadeIn">
                        <div id="loader" class="loader"></div>
                        <div class="animated fadeIn" id="display_qr" style="display: none">

                            <h4 style=" text-align: center; margin-bottom: 5px; color: #707070;" id="lbl1"></h4>
                            <p></p>
                            <div class="wow zoomIn" id="qrimg" style="margin-left: auto; margin-right: auto;" onclick="copyToClipboard('btcadd')"></div>
                            <p style="margin-top:15px;">Tap QR Code to copy Wallet Address</p>

                            <h5 class="wow fadeInUp" id="exttobuy" style="margin-top: 20px; text-align: center; margin-bottom: 5px; color: #707070; animation-delay:.0s"><b></b></h5>

                            <input class="wow fadeInUp" type="text" id="btcadd" style="border: none; width: 315px; text-align: center; animation-delay: .1s" value="" />

                            <h5 class="wow fadeInUp" id="btcpayinfo" style="margin-top: -5px; text-align: center; margin-bottom: 5px; color: #707070; animation-delay: .2s"><b></b></h5>

                            <!--<h5 class="wow fadeInUp" style="margin-top: 35px; text-align: center; margin-bottom: 5px; color: #707070; animation-delay: .3s" id="status"><b></b></h5>-->

                            <br />
                            <button class="w3-button w3-text-white w3-round w3-padding-16 w3-ripple wow fadeInUp" onclick="paymentSent();" style="width: 100%; background-color: #FFA000; margin-bottom: 10px; margin-left: auto; margin-right: auto; animation-delay: .4s; ">I ALREADY PAID</button>
                            <button class="w3-button w3-light-grey w3-round w3-padding-16 w3-ripple wow fadeInUp" onclick="payments_btc_reset('YES')" style="width: 100%; margin-bottom: 15px; margin-left: auto; margin-right: auto; animation-delay: .4s; ">CANCEL</button>


                        </div>
                    </div>

                    <div id="Successform" class="w3-center animated fadeIn" style="display:none">

                        <h2>Payment Successful!</h2>
                        <i class="fa fa-check" style="margin-left:auto; margin-right:auto; font-size: 40px; text-align:center" aria-hidden="true"></i>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>