<!--STATUS BAR-->
<div id="app_statusbar" class="animated fadeIn" style="z-index: 2100; display:none; position: fixed; background-color: rgba(0, 0, 0,0); color: white; height: 25px; width: 100%; padding-right: 5px; padding-bottom: 5px; padding-top: 5px;">
       <span id="overlayStat_time" style="float:right">12:00PM</span>
    <i id="batstat" class="fas fa-battery-full fa-lg" style="float:right; margin-right:5px; margin-top:3px;"></i>
</div>

<!--NAV BAR-->
<!--<div id="app_navbar" class="animated fadeIn w3-display-bottommiddle" style="z-index: 2100; display: none; box-shadow: 0px -2px 10px #BDBDBD; position: fixed; background-color: #F5F5F5; color: white; height: 50px; width: 100%; padding-right: 5px; padding-bottom: 5px; border-top: solid; border-top-width: 1px; padding-top: 5px; ">
   
</div>-->

 <div id="screenguard" onclick="closeSidebar();" class="page animated fadeIn" style="background-color: rgba(0, 0, 0, 0.50); padding-top:35vh; z-index:1104">
</div>

<!--AUTH CONFIRM PAGE-->
<div id="win_popup" class="page animated fadeIn" style="z-index: 2100; background-color: rgba(0, 0, 0, 0.0);">
    <div class="page_bkg" style="background-color: rgba(0, 0, 0, 0.50); padding-top:35vh">
        <!--<div class="page_menu">
            <i class="fa fa-chevron-left" onclick="close_view('pages_geneology');" style="color: white; font-size: 24px"></i>
            <h5 style="margin-left:auto;margin-right:auto; color:white; text-align:center; display:inline-block; width:90%; font-size:20px; font-weight:600">Geneology</h5>
        </div>-->

        <div id="popupWin" class="popup zoomin w3-center">
            <h4 style=" color: #00a9ff; padding-top:15px">Authenticate Output</h4>

            <p>Please enter your password to continue</p>

            <input id="authpass" oninput="computeBuyhashEqui();" class="w3-input w3-border w3-round w3-white" style="width:80%; font-size:12px; text-align:center; margin-left:auto; margin-right:auto; outline:none" type="password">
            <hr style="margin-bottom:10px; margin-top:10px" />

            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="cashOutAuth_Check();" style="width:40%; margin-bottom:10px; color:#00a9ff!important">Continue</button>
            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="cashOutAuthClose();" style="width:40%; margin-bottom:10px">Cancel</button>


        </div>

        <!--<div id="feed_body" class="feed_body" style="background-color:rgba(0, 0, 0, 0.00)">


        </div>-->
    </div>
</div>

<!--IMPUT MODAL PAGE-->
<div id="win_popup_input" class="page animated fadeIn" style="z-index: 2100; background-color: rgba(0, 0, 0, 0.0);">
    <div class="page_bkg" style="background-color: rgba(0, 0, 0, 0.50); padding-top:35vh">
        <!--<div class="page_menu">
            <i class="fa fa-chevron-left" onclick="close_view('pages_geneology');" style="color: white; font-size: 24px"></i>
            <h5 style="margin-left:auto;margin-right:auto; color:white; text-align:center; display:inline-block; width:90%; font-size:20px; font-weight:600">Geneology</h5>
        </div>-->

        <div id="popupWin_input" class="popup zoomin w3-center">
            <h4 style=" color: #00a9ff; padding-top:15px">Manual Add New Miner</h4>

            <p>Please enter miner ID to continue</p>

            <input id="devID" oninput="" class="w3-input w3-border w3-round w3-white" style="width:80%; font-size:12px; text-align:center; margin-left:auto; margin-right:auto; outline:none" type="text">
            <hr style="margin-bottom:10px; margin-top:10px" />

            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="checkDevice(document.getElementById('devID').value);" style="width:40%; margin-bottom:10px; color:#00a9ff!important">Continue</button>
            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="inputModalClose();" style="width:40%; margin-bottom:10px">Cancel</button>


        </div>

        <!--<div id="feed_body" class="feed_body" style="background-color:rgba(0, 0, 0, 0.00)">


        </div>-->
    </div>
</div>

<!--IMPUT SERIAL MODAL PAGE-->
<div id="win_popup_input_sec" class="page animated fadeIn" style="z-index: 2100; background-color: rgba(0, 0, 0, 0.0);">
    <div class="page_bkg" style="background-color: rgba(0, 0, 0, 0.50); padding-top:35vh">
        <!--<div class="page_menu">
            <i class="fa fa-chevron-left" onclick="close_view('pages_geneology');" style="color: white; font-size: 24px"></i>
            <h5 style="margin-left:auto;margin-right:auto; color:white; text-align:center; display:inline-block; width:90%; font-size:20px; font-weight:600">Geneology</h5>
        </div>-->

        <div id="popupWin_input_sec" class="popup zoomin w3-center">
            <h4 style=" color: #00a9ff; padding-top:15px">Configure New Miner</h4>

            <p>Make the miner yours! Please enter the serial code of the miner.</p>

            <input id="devSerial" oninput="" class="w3-input w3-border w3-round w3-white" style="width:80%; font-size:12px; text-align:center; margin-left:auto; margin-right:auto; outline:none" type="text">
            <hr style="margin-bottom:10px; margin-top:10px" />

            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="verifyDevice();" style="width:40%; margin-bottom:10px; color:#00a9ff!important">Continue</button>
            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="inputModalSecClose();" style="width:40%; margin-bottom:10px">Cancel</button>


        </div>

        <!--<div id="feed_body" class="feed_body" style="background-color:rgba(0, 0, 0, 0.00)">


        </div>-->
    </div>
</div>

<!--LOAD POPUP PAGE-->
<div id="win_Loadpopup" class="page animated fadeIn" style="z-index: 2500; background-color: rgba(0, 0, 0, 0.0);">
    <div class="page_bkg" style="background-color: rgba(0, 0, 0, 0.50); padding-top:35vh">
        <!--<div class="page_menu">
            <i class="fa fa-chevron-left" onclick="close_view('pages_geneology');" style="color: white; font-size: 24px"></i>
            <h5 style="margin-left:auto;margin-right:auto; color:white; text-align:center; display:inline-block; width:90%; font-size:20px; font-weight:600">Geneology</h5>
        </div>-->

        <div id="popuploadWin" class="popup zoomin w3-center" style="min-height:100px; padding-left:10px; padding-right:10px">
           


        </div>

        <!--<div id="feed_body" class="feed_body" style="background-color:rgba(0, 0, 0, 0.00)">


        </div>-->
    </div>
</div>

<!--CONFIRM MODAL BOX PAGE-->
<div id="win_confirmpopup" class="page animated fadeIn" style="z-index: 2500; background-color: rgba(0, 0, 0, 0.0);">
    <div class="page_bkg" style="background-color: rgba(0, 0, 0, 0.50); padding-top:35vh">
        <!--<div class="page_menu">
            <i class="fa fa-chevron-left" onclick="close_view('pages_geneology');" style="color: white; font-size: 24px"></i>
            <h5 style="margin-left:auto;margin-right:auto; color:white; text-align:center; display:inline-block; width:90%; font-size:20px; font-weight:600">Geneology</h5>
        </div>-->

        <div id="popupconfirmWin" class="popup zoomin w3-center" style="min-height:100px; padding-left:10px; padding-right:10px">
            <h4 style=" background: linear-gradient(to right, rgb(12, 117, 247), rgb(0, 191, 156)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; padding-top: 15px" id="confirmMsgTitle">Please Wait..</h4>

            <p id="confirmMsg_text">Please Wait..</p>
            <hr style="margin-bottom: 10px; margin-top: 10px; border-top-color: #dcdcdc" />
            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="ConfirmMsg_option1();" style="width: 100%; margin-bottom: 10px; color: #00a9ff!important;" id='confmsg_option1'>Close</button>
            <div style=""></div>
            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="confirmMsg_close();" style="width: 100%; margin-bottom: 10px; color: #00a9ff!important;" id='confmsg_option2'>Cancel</button>


        </div>

        <!--<div id="feed_body" class="feed_body" style="background-color:rgba(0, 0, 0, 0.00)">


        </div>-->
    </div>
</div>

<!--MESSAGE BOX PAGE-->
<div id="win_Msgpopup" class="page animated fadeIn" style="z-index: 2500; background-color: rgba(0, 0, 0, 0.0);">
    <div class="page_bkg" style="background-color: rgba(0, 0, 0, 0.50); padding-top:35vh">
        <!--<div class="page_menu">
            <i class="fa fa-chevron-left" onclick="close_view('pages_geneology');" style="color: white; font-size: 24px"></i>
            <h5 style="margin-left:auto;margin-right:auto; color:white; text-align:center; display:inline-block; width:90%; font-size:20px; font-weight:600">Geneology</h5>
        </div>-->

        <div id="popupmsgWin" class="popup zoomin w3-center" style="min-height:100px; padding-left:10px; padding-right:10px">
            <h4 style=" background: linear-gradient(to right, rgb(12, 117, 247), rgb(0, 191, 156)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; padding-top: 15px" id="msgTitle">Please Wait..</h4>

            <p id="msg_text">Please Wait..</p>
            <hr style="margin-bottom: 10px; margin-top: 10px; border-top-color: #dcdcdc" />
            <button class="w3-button w3-light-gray w3-round w3-ripple" onclick="showMsg_close();" style="width: 40%; margin-bottom: 10px; color: #00a9ff!important;" id='msgbtnname'>Close</button>



        </div>

        <!--<div id="feed_body" class="feed_body" style="background-color:rgba(0, 0, 0, 0.00)">


        </div>-->
    </div>
</div>

