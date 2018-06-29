<div id="pages_miner" class="page animated slideInUp  w3-col m8 l9">
    <div class="page_bkg" style="">
        <div onclick="expandButton_closeAll();"  class="page_menu" style="margin-top: -125px; background-color: rgba(52, 152, 219, 0);">
            <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:center; display:inline-block; width:100%; font-size:20px; font-weight:600; margin-top:3px;"></h5>

            <div style=" position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
                <!--<i class="fa fa-chevron-left" onclick="close_view_fade('pages_addresses');" style=" color: white; font-size: 24px; margin-top: 4px; float: left;"></i>-->
                <i class="fa fa-times  wow fadeIn" onclick="close_view_card('pages_miner'); expandButton('dashItem_miner', 'pages_miner'); " style="color: white; font-size: 24px; float: right; margin-top: 5px;animation-delay:.5s; "></i>

            </div>

        </div>



        <div id="feed_body" class="feed_body" style="-webkit-animation-duration: .8s !important; padding:0; margin-top: 125px">

            <div id="" class="cardList" style="transition:.3s; overflow:auto">

                <div id="" class="cardListItem wow fadeInUp w3-card-2 w3-card-2" onclick="showScreenGuard(); show_view('pages_addNewMiner','YES'); startQr();" style="animation-delay:.0s">
                    <div class="w3-col s3 m3 l3">
                        <i id="" class="fa fa-plus" onclick=" "></i>
                    </div>

                    <div class="w3-col s9 m9 l9">
                        <h3>Add New Miner</h3>
                        <p>Tap to configure new miner</p>
                    </div>
                </div>

                <div id="" class="cardListItem wow fadeInUp w3-card-2 w3-card-2" style="color: grey; background: none;  border: none; animation-delay:.1s;" onclick="">
                    <div class="w3-col s3 m3 l3">
                        <i id="" class="fa fa-plus" style="color: grey; background: none; -webkit-text-fill-color: grey; " onclick=" "></i>
                    </div>

                    <div class="w3-col s9 m9 l9" onclick="showMsg('We are preparing these tools to power the merchants for the future, stay tuned!', 'Coming soon', 'Okay');" style="color: grey; background: none; -webkit-text-fill-color: grey; ">
                        <h3>Add New POS Kit</h3>
                        <p>Unavailable at the moment</p>
                    </div>
                </div>

                <!--<div id="" class="cardListItem wow fadeInUp w3-card-2 w3-card-2" onclick="" style="animation-delay: .1s;">
                    <div class="w3-col s3 m3 l3">
                        <i id="" class="fa fa-cart-plus" onclick=" "></i>
                    </div>

                    <div class="w3-col s9 m9 l9">
                        <h3>Buy Miner</h3>
                        <p>Submit a request to buy new mini miner</p>
                    </div>

                </div>-->

                <hr />

                <h4>Devices</h4>

                <div id="armDevList" class="">

                    <h6 class="wow fadeInUp" style="text-align:left; color:#ccc; animation-delay:.4s">No devices yet</h6>

                    <!--<div class="cardListItem wow fadeInUp w3-card-2 w3-card-2" onclick="showMinerInfo()" style="">


                        <div class="w3-col s3 m3 l3">
                            <i id="" class="fa fa-cart-plus" onclick=" "></i>
                        </div>

                        <div class="w3-col s9 m9 l9">
                            <h4>EXT-MNR ERXN019</h4>
                            <p>Mini Miner Device</p>
                        </div>

                    </div>-->
                </div>



                <!--<div class="w3-center wow fadeInUp" style="color: #ccc; animation-delay:.2s">
                    <h2>Opps.. No Miner Available Yet</h2>
                    <p>Tap add miner to configure your miner</p>
                </div>-->



            </div>
        </div>

        <!--<h6 style="text-align: center; color: #BDBDBD; margin-top:15px">No Addresses available</h6>-->

    </div>
</div>
</div>