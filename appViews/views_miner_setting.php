<div id="pages_minersetting" class="page animated fadeInUp w3-col m8 l9" style="-webkit-animation-duration: .3s !important; z-index:1200">
    <div class="page_bkg" style="background-color: #FFA000">
        <div class="page_menu">
            <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:center; display:inline-block; width:100%; font-size:20px; font-weight:600; margin-top:3px;">Miner Settings</h5>

            <div style="  position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
                <i class="fa fa-times" onclick="close_view_card('pages_minersetting');" style=" color: white; font-size: 24px; margin-top: 4px; float: right;"></i>
                <!--<i class="fa fa-user" onclick="showProfile();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>-->

            </div>
        </div>

        <div id="feed_body" class="feed_body" style="-webkit-animation-duration: .8s !important">

            <div class="wow fadeInUp" id="send_select_form" style="-webkit-animation-delay:.3s">
                <h3 style="color:#ccc">Basic</h3>      
                <hr />

                <p>Cryptocurrency to Mine:</p>
                <select class="w3-select">
                    <option value="EXT">EthXpert | EXT</option>
                    <option value="XMRV2" disabled>Monero | XMRV2</option>
                    <option value="ETH" disabled>Ethereum | ETH</option>
                </select>

                <br />
                <h3 style="color:#ccc; margin-top:55px;">Other Options</h3>      
                <hr />

                <div id="" onclick="show_view('pages_stakingadd', 'YES');" class="wow fadeInUp w3-center w3-round" style="border: solid 1px rgba(52, 152, 219, 1); background-color: rgba(52, 152, 219, 1); color: white; animation-delay: .6s; height: 45px; padding-top: 4px; width: 100%; ">
                    <h4>Increase Staking Capacity</h4>

                </div>
                <br />

                <div id="" onclick="showConfirmMsg('Removing this device from your account will make you unable to control, view and change settings for this device', 'Remove Device', 'I understand, Continue Remove', 'No, Cancel this','removeDev')" class="wow fadeInUp w3-center w3-round" style="border:solid 1px maroon; background-color:maroon; color:white; animation-delay: .7s; height:45px; padding-top:4px; width:100%">
                    <h4>Remove Device</h4>

                </div>
                <!--<p style="color:#ccc">More settings to come</p>-->
            </div>

       

        </div>
    </div>
</div>