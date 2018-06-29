<div id="pages_pricegraph" class="page animated slideInUp w3-col m8 l9">
    <div class="page_bkg" style="">
        <div class="page_menu" style="margin-top: -125px; background-color: rgba(52, 152, 219, 0);">
            <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:center; display:inline-block; width:100%; font-size:20px; font-weight:600; margin-top:3px;"></h5>

            <div onclick="expandButton_closeAll();" style=" position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
                <!--<i class="fa fa-chevron-left" onclick="close_view_fade('pages_addresses');" style=" color: white; font-size: 24px; margin-top: 4px; float: left;"></i>-->
                <i class="fa fa-times wow fadeIn" onclick="close_view_card('pages_pricegraph'); expandButton('dashItem_chart', 'pages_pricegraph');" style="color: white; font-size: 24px; float: right; margin-top: 5px; animation-delay:.5s"></i>

            </div>

        </div>



        <div id="feed_body" class="feed_body" style="-webkit-animation-duration: .8s !important; padding: 0; margin-top: 125px">

            <div id="coinInfo" class=" coinInfo" style="animation-duration:.5s!important">

                <!--GRAPHS-->
                <div id="btc_graphs" class="btcGraphs">
                   
                    <div id="chart_container" style="width:100%; height:400px;"></div>

                </div>
             


                <div id="btc_graphs_details" class="wow fadeIn graphsDetails">

                    <img class="" id="graphsDetails_symimg" style="width:24px; display:inline-block; margin-top:-20px" src="https://s2.coinmarketcap.com/static/img/coins/64x64/1.png" alt="Coin" />
                    <h2 id="graphsDetails_symLong" style="max-width: 150px; display: inline-block"><b>Bitcoin</b></h2>
                    <h6 id="graphsDetails_mkt">Market Cap: 136.127B USD</h6>
                    <h6 id="graphsDetails_rank_dom">Rank: 1 / DOM: 72.56%</h6>

                    <div id="graphsDetails_24hrchngeArr" style="float:right; margin-top:-105px; text-align:right; animation-delay:0s; transition-delay:0s;">
                        <h3 style=""><i id="graphsDetails_24hrchngeArrSym" class="fas fa-chevron-down"></i> <span id="graphsDetails_vwapChange"></span></h3>
                        <h6 id="graphsDetails_vwap">6703.784 USD</h6>
                    </div>

                    <p id="graphsDetails_supply">Supply: 95,478,079 Coins</p>
                    <p id="graphsDetails_dvol">24H Volume: 3.723B USD</p>
                </div>
                <br />
            </div>

        </div>
    </div>
</div>