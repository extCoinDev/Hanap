<div id="pages_stakingadd" class="page animated fadeInUp w3-col m8 l9" style="-webkit-animation-duration: .3s !important; z-index:1200">
    <div class="page_bkg" style="background-color: #FFA000">
        <div class="page_menu">
            <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:center; display:inline-block; width:100%; font-size:20px; font-weight:600; margin-top:3px;">STAKING CAPACITY</h5>

            <div style="  position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
                <i class="fa fa-times" onclick="close_view_card('pages_stakingadd'); document.getElementById('staking_pages_1').style.display = 'block'; document.getElementById('staking_pages_2').style.display = 'none';" style=" color: white; font-size: 24px; margin-top: 4px; float: right;"></i>
                <!--<i class="fa fa-user" onclick="showProfile();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>-->

            </div>
        </div>

        <div id="feed_body" class="feed_body w3-center" style="-webkit-animation-duration: .8s !important">

            <div id="staking_pages_1" class="wow fadeInUp">
                <h3 class="wow fadeInUp" style="animation-delay: .0s; ">How would you like to increase?</h3>
                <hr class="wow fadeInUp" style="animation-delay: .1s; " />
                <div id="" class="cardListItem wow fadeInUp w3-card-2 w3-container" onclick="document.getElementById('staking_pages_1').style.display = 'none'; document.getElementById('staking_pages_2').style.display = 'block';" style="animation-delay:.2s; padding-left:15px;">
                    <h3>Use EXT wallet</h3>
                    <p>Use your existing ext balance</p>
                </div>
                <div id="" class="cardListItem wow fadeInUp w3-card-2 w3-container" onclick="showScreenGuard(); show_view('pages_buycoin');" style="animation-delay: .3s; padding-left: 15px;">
                    <h3>Buy EXT</h3>
                    <p>Use other crypto to fill up your wallet</p>
                </div>

            </div>

            <div id="staking_pages_2" class="wow fadeInUp" style="display:none; text-align:left">
                <h2>Use EXT wallet</h2>
                <p>Increase Staking using available ext wallet</p>
                <hr />
                <p>Available EXT</p>
                <h3 id="staking_page_available_amt" style="animation-delay: .0s; margin-top:0px">0 EXT</h3>
                <br />

                <p>Amount to Stake:</p>
                <input class="w3-input w3-round" style="width: 100px;" type="number" id="stakeadd" value=" " />
                <br />
                  <button id="" class="w3-button w3-blue w3-hover-white w3-round w3-ripple" onclick="stakeCapIncr();" style=" font-size: 13px; ">Commit Changes <i id="mywalletbtn" class="fa fa-check" onclick="" style=""></i></button>
            </div>

           

        </div>

        </div>
    </div>