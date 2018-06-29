<div id="pages_MinerInfo" class="page animated slideInRight  w3-col m8 l9">
    <div class="page_bkg" style="background-color: rgba(0, 0, 0, 0.80)">
        <div class="page_menu" style="background-color: rgba(51, 51, 51, 0.00)">
            <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:center; display:inline-block; width:100%; font-size:20px; font-weight:600; margin-top:3px;"></h5>

            <div style=" position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
                <i class="fa fa-chevron-left" onclick="close_view('pages_MinerInfo','YES'); " style=" color: white; font-size: 24px; margin-top: 4px; float: left;"></i>
                <!--<i class="fa fa-user" onclick="showProfile();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>-->

            </div>

        </div>

        <div id="feed_body" class="feed_body" style="-webkit-animation-duration: .8s !important; color:white; background-color: rgba(0, 0, 0, 0.00)">

            <h3>ARM Device</h3>
            <hr class="wow fadeInUp" style="animation-delay:.1s" />
            <div class="w3-col s3 m3 l3">
                <i id="" class="fa fa-bolt" style=" font-size: 75px; padding-left: 17px; padding-top: 17px;"></i>
            </div>

            <div class="w3-col s9 m9 l9">
                <h3 id="armDevId">ARM Device ID</h3>
                <p id="armStat">STATUS:</p>
                <p id="armStatCap">STAKING CAPACITY:</p>
            </div>


            <div class="w3-col s12 m12 l12">
                <hr style="animation-delay:.3s" />

                <h6 id="armTltStakeCap" class="wow fadeInUp" style="text-align: left; color: #BDBDBD; margin-top:15px">TOTAL STAKING PERFORMANCE:</h6>
                <h6 id="armStakeDiff" class="wow fadeInUp" style="text-align: left; color: #BDBDBD; margin-top:15px">STAKING DIFFICULTY: 5.197</h6>
                <br />

                <p id="earncap" class="wow fadeInUp" style="text-align: center; color: #ccc; animation-delay: .4s" onclick="">
                    Earning Capacity: <br />
                    66.5 EXT / DAY (~ $ 5.32 @ $0.08)
                </p>
                <br />
                <div id="" onclick="show_view('pages_minerlive', 'YES')" class="wow fadeInUp w3-center w3-round" style="border:solid 1px white; animation-delay: .5s; height:45px; padding-top:4px; width:100%">
                   <!-- <h4>Increase Staking Capacity</h4>-->
                    <h4>View Live Staking</h4>

                </div>
                <br />
                <div id="" onclick="show_view('pages_minersetting', 'YES')" class="wow fadeInUp w3-center w3-round" style="border:solid 1px white; animation-delay: .6s; height:45px; padding-top:4px; width:100%">
                    <h4>Settings</h4>

                </div>
            </div>


        </div>
    </div>
</div>