<div id="pages_cashout" class="page animated slideInRight  w3-col m8 l9">
    <div class="page_bkg" style="background-color: #FFA000">
        <div class="page_menu">
            <h5 style="margin-left:auto; position: absolute; margin-right:auto; text-align:center; display:inline-block; width:100%; font-size:20px; font-weight:600; margin-top:3px;">CASH OUT</h5>

            <div style=" position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
                <i class="fa fa-chevron-left" onclick="close_view('pages_cashout');" style=" color: white; font-size: 24px; margin-top: 4px; float: left;"></i>
                <!--<i class="fa fa-user" onclick="showProfile();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>-->

            </div>

        </div>

        <div id="feed_body" class="feed_body" style="-webkit-animation-duration: .8s !important">

            <h3>Cashout from wallet</h3>
            <hr />

            <h4>BITCOIN ADDRESS</h4>            
            <input id="walletWithdrawAmt" oninput="" class="w3-input w3-white" style="width:90%; font-size:18px; text-align:left; outline:none" type="text" placeholder="Type address here">

            <br />

            <h4>AMOUNT TO WITHDRAW</h4>
            <p>Payment will be in your BTC wallet</p>
            <input id="walletWithdrawAmt" oninput="" class="w3-input w3-border w3-round w3-white" style="width:50%; font-size:18px; text-align:center; outline:none" type="number">

            <br />
            <button id="wallet_withdraw_btn" class="w3-button w3-light-gray w3-round w3-padding-16 w3-ripple" onclick="cashOutAuth('withdrawWallet');" style="width:40%; margin-bottom:25px">CASHOUT</button>

            <div class="loader" style="display: none; " id="loader_withdraw"></div>

           

        </div>
    </div>
</div>