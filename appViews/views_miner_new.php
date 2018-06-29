<div id="pages_addNewMiner" class="page animated slideInRight  w3-col m8 l9">
    <div class="page_bkg" style="background-color: rgba(0, 0, 0, 0.80)">
        <div class="page_menu" style="background-color: rgba(51, 51, 51, 0.00)">
            <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:center; display:inline-block; width:100%; font-size:20px; font-weight:600; margin-top:3px;">Add New Miner</h5>

            <div style=" position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
                <i class="fa fa-chevron-left" onclick="close_view('pages_addNewMiner','YES'); $('#reader').html5_qrcode_stop();" style=" color: white; font-size: 24px; margin-top: 4px; float: left;"></i>
                <!--<i class="fa fa-user" onclick="showProfile();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>-->

            </div>

        </div>

        <div id="feed_body" class="feed_body" style="-webkit-animation-duration: .8s !important; background-color: rgba(0, 0, 0, 0.00)">
            <div class="w3-center" style="width: 300px; height: 250px; margin-left: auto; margin-right: auto; padding-top: 18%; color: white;">
                <h3 class="wow zoomIn" style="">SCAN DEVICE QR</h3>
                <h5>Place device's QR Code infront your camera.</h5>
                <div id="reader" class="" style="width:300px;height:250px; margin-left:auto; margin-right:auto; display:none">
                </div>
            </div>
           

            <h6 class="wow fadeInUp" style="text-align: center; color: #BDBDBD; margin-top:15px"> Make sure you have sufficient lighting to scan the qr code properly</h6>
            <hr class="wow fadeInUp" style="animation-delay:.3s" />
            <p class="wow fadeInUp" style="text-align: center; color: #ccc; animation-delay: .4s" onclick="showMsgInput();">Having trouble scanning the code? <br /> Tap here</p>

        </div>
    </div>
</div>