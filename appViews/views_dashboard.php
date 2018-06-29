<div id="pages_main" class="animated slideInRight w3-col m8 l9" style="display: none; -webkit-animation-duration: .5s !important; float:right">
    <div class="page_menu" id="page_menu_dash" style="background-color: #ecf0f1; display:none">
        <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:left; display:inline-block; width:100%; font-size:20px; color:grey; font-weight:600; margin-top:3px;margin-left:15px; margin-top:3px; margin-top:3px;">ETHXPERT</h5>

        <div style=" position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
            <!--   <i class="fa fa-align-right" onclick="showSidebar();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>
                 <i class="fa fa-user" onclick="showProfile();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>-->

        </div>
    </div>

    <!--DASHBOARD BODY-->
    <div id="feed_body" class="feed_body w3-centered w3-center" style="overflow-x:hidden; padding-left:0px; padding-right:0px; padding-top:0px; padding-bottom:60px;">

        <div class="" id="feed_body_content" style="background: linear-gradient(45deg, rgb(12, 117, 247), rgb(0, 191, 191)); color: white; height: 160px; padding-top: 8px; padding-left: 15px; padding-right: 15px; padding-top: 35px; transition: .5s; position: fixed; top: 0px; left: 0px; width: 100vw; z-index: 100; border-bottom: solid 1px; border-bottom-color: white; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; ">
            <div id="dash_header" style="text-align:left; width:100%; animation-duration:.3s;">
                <p class="wow fadeIn" style="color: white; animation-delay: .1s; animation-duration: .5s; ">WALLETS</p>
                <h1 class="wow fadeIn" style="margin: 0px; font-size: 45px; color: white; animation-delay: .3s; animation-duration:.7s"><b id="unc_pesoVal">0.00 </b> <span style="font-size: 35px; margin-left: -8px;">EXT</span> </h1>
                <h4 class="wow fadeInUp" id="unc_amt" style="color: white; animation-delay:.5s ">~ ETH 0</h4>
                

                <!--<button id="wallet_withdraw_btn" class="w3-button w3-hover-white w3-round w3-ripple" onclick="showDashMenu();" style="color: white; font-size: 13px; position: absolute; top: 115px; right: 15px; background-color: rgba(0, 0, 0, 0.00); ">MY WALLET <i id="mywalletbtn" class="fa fa-chevron-down" onclick="" style=""></i></button>-->

            </div>

            <div id="dashMenu_header" class="animated fadeInUp" style="text-align:left; width:100%; animation-duration:.3s; display:none">
                <p class="wow fadeIn" style="color: white; animation-delay: .1s; animation-duration: .5s; "> <i id="" class="fa fa-chevron-left" onclick="expandButton_closeAll();"></i> BACK TO DASHBOARD</p>
                <h1 class="wow fadeIn" style="margin: 0px; font-size: 45px; color: white; animation-delay: .3s; animation-duration:.7s"><b id="dashMenu_headerName">Page</b></h1>


                <!--<button id="wallet_withdraw_btn" class="w3-button w3-hover-white w3-round w3-ripple" onclick="showDashMenu();" style="color: white; font-size: 13px; position: absolute; top: 115px; right: 15px; background-color: rgba(0, 0, 0, 0.00); ">MY WALLET <i id="mywalletbtn" class="fa fa-chevron-down" onclick="" style=""></i></button>-->

            </div>

            <!--DASH BUTTONS-->
            <div class="wow fadeInDown" id="dashButtons" style="color: white; margin-top: 25px; display: none">
                <div class="w3-col s3 m3 l3 w3-ripple" onclick="document.getElementById('screenguard').style.display = 'block'; show_view('pages_cashin');">
                    <div class="">
                        <i class="fas fa-arrow-up" onclick=" " style=" font-size: 24px; "></i>
                    </div>
                    <div style="margin-top:-2px;">
                        <p style="display: inline;  font-size: 13px">SEND</p>
                    </div>
                </div>

                <div class="w3-col s3 m3 l3 w3-ripple" onclick="document.getElementById('screenguard').style.display = 'block'; show_view('pages_cashout');">
                    <div class="">
                        <i class="fas fa-arrow-down" onclick="" style=" font-size: 24px; "></i>
                    </div>
                    <div style="margin-top:-2px;">
                        <p style="display: inline; font-size: 13px">RECEIVE</p>
                    </div>
                </div>

                <div class="w3-col s3 m3 l3 w3-ripple" onclick="document.getElementById('screenguard').style.display = 'block'; show_view('pages_exchange');">
                    <div class="">
                        <i class="fa fa-exchange-alt" onclick="" style="font-size: 24px; "></i>
                    </div>
                    <div style="margin-top:-2px;">
                        <p style="display: inline; font-size: 13px">EXCHANGE</p>
                    </div>
                </div>

                <div class="w3-col s3 m3 l3 w3-ripple" onclick="document.getElementById('screenguard').style.display = 'block'; show_view('pages_history');">
                    <div class="">
                        <i class="fas fa-history" onclick="" style=" font-size: 24px; "></i>
                    </div>
                    <div style="margin-top:-2px;">
                        <p style="display: inline; font-size: 13px">HISTORY</p>
                    </div>
                </div>



            </div>

        </div>
              
        <!--DASH ITEMS-->
        <div id="dashList" class="dashList" style="transition:.3s;">

            <!--DASHDOARD NEWS-->
            <div class="wow fadeInUp" style="">
                <h4 style="color:#ccc; text-align:left">News Updates</h4>

                <!--<div class="cardListItem w3-card-2 w3-container" style="height:11%; padding-bottom:10px">
                    <i id="" class="fa fa-exclamation" style="font-size:110px" onclick=""></i>
                    <h4><b>Maintenance Undergoing!</b></h4>
                    <p style="color:#808080">We're doing critical software updates to network miners / nodes as of the moment, so you may notice that staking operation has stopped. We apologize for inconvience. We are working to get this back up asap. We'll keep you updated</p>


                </div>-->

                <br />

                <div class="cardListItem w3-card-2 w3-container" style="height:11%; padding-bottom:10px">
                    <i id="" class="fa fa-exchange-alt" style="font-size:110px" onclick=""></i>
                    <h4><b>Exchange Beta Test has finished!</b></h4>
                    <p style="color:#808080">Thank you for your continued support! We have successfully conducted our exchange beta testing, and further improvements are being made from the results of our beta test. We will launch our exchange based on our roadmap, so stay tuned!</p>

               <!--     <button class="w3-button w3-round" onclick="expandButton('dashItem_bsell', 'pages_exchange', '', 'Exchange'); setTimeout(function () { show_view('pages_sellcoin'); }, 1000);" style="width: 150px; float:right; text-align:right">TRY NOW!</button>-->
                </div>

                <br />

                <div class="cardListItem w3-card-2 w3-container" style="height:11%">
                    <i id="" class="fa fa-copyright" style="font-size:110px" onclick=""></i>
                    <h4><b>Create your own coin!</b></h4>
                    <p style="color:#808080">Create your own coins powered by today's most advance Blockchain Solutions, Vulkan Blockchain with cross-chain (atomic swap) capability and lightning fast transactions. This feature will be available soon.. stay tuned!</p>

                    <!--<button class="w3-button w3-round" onclick="expandButton('dashItem_bsell', 'pages_exchange', '', 'Exchange'); setTimeout(function () { show_view('pages_sellcoin'); }, 1000);" style="width: 150px; float:right; text-align:right">TRY NOW!</button>-->
                </div>

            </div>

            <hr />

            <div id="dashItem_chart" onclick=" expandButton('dashItem_chart', 'pages_pricegraph','','Charts'); getGraph('EXT', 'EthXpert'); " class="dashListItem wow fadeInUp" style="animation-delay: .1s; transition: .5s;">
                <div class="w3-col s3 m3 l3">
                    <i id="" class="fa fa-chart-line" onclick=""></i>
                </div>

                <div class="w3-col s9 m9 l9">
                    <h3>PRICE CHART</h3>
                    <p>See live EXT price graph</p>
                </div>

            </div>

            <div id="dashItem_chartDummy" onclick=" expandButton('dashItem_chart', 'pages_pricegraph'); ;" class="dashItemDummy" style=""></div>

            <div id="dashItem_bsell" class="dashListItem wow fadeInUp" onclick="expandButton('dashItem_bsell', 'pages_exchange', '', 'Exchange'); " style="animation-delay:.2s;">
                <div class="w3-col s3 m3 l3">
                    <i id="" class="fa fa-credit-card" onclick=""></i>
                </div>

                <div class="w3-col s9 m9 l9">
                    <h3>BUY &amp; SELL EXT</h3>
                    <p>Exchange your coins to other cryptos</p>
                </div>
            </div>

            <div id="dashItem_bsellDummy" onclick=" expandButton('dashItem_chart', 'pages_pricegraph'); " class="dashItemDummy" style=""></div>

            <div id="dashItem_wallets" class="dashListItem wow fadeInUp" onclick="expandButton('dashItem_wallets', 'pages_addresses', '', 'Wallets');" style="animation-delay:.3s;">
                <div class="w3-col s3 m3 l3">
                    <i id="" class="fa fa-archive" onclick=" "></i>
                </div>

                <div class="w3-col s9 m9 l9">
                    <h3>MY WALLETS</h3>
                    <p>Manage your wallets</p>
                </div>

            </div>
            <div id="dashItem_walletsDummy" onclick=" expandButton('dashItem_chart', 'pages_pricegraph'); " class="dashItemDummy" style=""></div>

            <div id="dashItem_miner" class="dashListItem wow fadeInUp" onclick="expandButton('dashItem_miner', 'pages_miner', '', 'Kits'); " style="animation-delay:.4s;">
                <div class="w3-col s3 m3 l3">
                    <i id="" class="fab fa-docker" onclick=""></i>
                </div>

                <div class="w3-col s9 m9 l9">
                    <h3>MY KITS</h3>
                    <p>Manage your miner and other IOT devices</p>
                </div>

            </div>
            <div id="dashItem_minerDummy" onclick=" expandButton('dashItem_chart', 'pages_pricegraph'); " class="dashItemDummy" style=""></div>

        </div>
       
       
    </div>

    <hr />

        <!--NAV BAR-->
        <div id="app_navbar" class="wow fadeIn w3-display-bottommiddle w3-center" style="z-index: 2100; background: linear-gradient(166deg, rgb(12, 117, 247), rgb(0, 191, 191)); color: white; height: 52px; width: 100%; padding-right: 5px; padding-bottom: 0px; border-top: solid; border-top-width: 1px; padding-top: 7px; border-top-left-radius: 10px; border-top-right-radius: 10px; ">
            <div></div>

            <div class="w3-col s4 m4 l4 w3-ripple" onclick="showMsg('This feature will be available once the pre-ico has finished', 'Sending', 'Okay');">
                <div class="sidebar_menu_item_icon">
                    <i class="fas fa-arrow-circle-up" onclick="" style=" font-size: 24px; "></i>
                </div>
                <div style="margin-top:-3px;">
                    <p style="display: inline;  font-size: 13px">Send</p>
                </div>
            </div>
            <div class="w3-col s4 m4 l4 w3-ripple" onclick="showScreenGuard(); show_view('pages_history');">
                <div class="sidebar_menu_item_icon">
                    <i class="fas fa-history m4 l4" onclick="" style=" font-size: 24px; "></i>
                </div>
                <div style="margin-top:-3px;">
                    <p style="display: inline;  font-size: 13px">Transactions</p>
                </div>
            </div>
            <div class="w3-col s4 m4 l4 w3-ripple" onclick="showMsg('This feature will be available once the pre-ico has finished', 'Receiving', 'Okay');">
                <div class="sidebar_menu_item_icon">
                    <i class="fas fa-arrow-circle-down" onclick="" style=" font-size: 24px; "></i>
                </div>
                <div style="margin-top:-3px;">
                    <p style="display: inline; font-size: 13px">Receive</p>
                </div>
            </div>

        </div>
    </div>