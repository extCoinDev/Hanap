// ====================== PAGE SCRIPTS =========================
var async = '';
var asycn_posts = '';
var binary_email = '';
var binary_username = '';
var apireqResult = '';
var wait4payment = '';
var send_amt = '';
var output_intent = '';
var pstres = '';
var windowindex = '';
var posx = '';
var posy = '';
var vw = '';
var data_btc = '';
var data_etc = '';
var tmp_armid = '';
var extsd = '';
var extwlt = '';
var tagid = '';
var btcprice = '';
var etxprice = '';
var prevbal = '';
var devNo = 0;
var tmp_extequi_buy = 0;
var tmp_btcequi_buy = 0;
var tmp_etxtx = '';
var pageb4 = '';

window.setTimeout(function () { showSplash(); }, 100);

function showSplash() {
    hidePreload();
    //window.setTimeout(function () { show_view('pages_splash'); }, 500)
    //show_view('pages_splash');
    show_view('pages_hotelreview');
    window.setTimeout(function () {
        document.getElementById('pages_splash').style.animationDelay = '0s';
      
    }, 1500);
}

function showPreload() {
    document.getElementById('preloader').style.display = "block";
}

function hidePreload() {
    
    window.setTimeout(function () { document.getElementById('preloader').className = "preloader animated fadeOut"; }, 300);

    window.setTimeout(function () { document.getElementById('preloader').style.display = "none"; }, 700);
  
}

function showScreenGuard() {
    document.getElementById('screenguard').style.display = 'block';
}

function show_view(view_name) {



    if (document.body.clientWidth > 599) {
      
        if (windowindex == 'TRUE') {
            closeAllViews(view_name);
            window.setTimeout(function () { document.getElementById(view_name).style.display = 'block'; windowindex = 'TRUE'; }, 600);
        }
        else { document.getElementById(view_name).style.display = 'block'; windowindex = 'TRUE'; }
        
    }
    else { document.getElementById(view_name).style.display = 'block';}
 
 if (pageb4 != '') {
     // document.getElementById(pageb4).classList.add('pageOutfocus');   
     pageb4 = view_name;
 }
 else { pageb4 = view_name; }
   
}

function copyToClipboard(elemtname) {
    /* Get the text field */
    var copyText = document.getElementById(elemtname);

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    document.execCommand("Copy");

    /* Alert the copied text */
    showMsg("Wallet address copied to clipboard",'Information','Got It');
}

function close_view(view_name) {
    document.getElementById('screenguard').style.display = 'none';
    document.getElementById(view_name).className = 'page animated slideOutRight w3-col m8 l9';
    windowindex = '';
    //if (pageb4 != '') {
    //    document.getElementById(pageb4).classList.remove('pageOutfocus');
    //}
    setTimeout(function () {
        document.getElementById(view_name).style.display = 'none';
        document.getElementById(view_name).className = 'page animated slideInRight w3-col m8 l9';
    }, 550)
}

function close_view_fade(view_name) {
    document.getElementById(view_name).className = 'page animated fadeOut';
    document.getElementById("screenguard").style.display = 'none';
    windowindex = '';
    setTimeout(function () {
        document.getElementById(view_name).style.display = 'none';
        document.getElementById(view_name).className = 'page animated fadeIn';
    }, 550)
}

function close_view_card(view_name) {
    document.getElementById(view_name).className = 'page animated slideOutDown  w3-col m8 l9';
    document.getElementById("screenguard").style.display = 'none';
    closeSidebar();
    windowindex = '';
    setTimeout(function () {
        document.getElementById(view_name).style.display = 'none';
        document.getElementById(view_name).className = 'page animated slideInUp w3-col m8 l9';
    }, 550)
}

function showSidebar() {
    document.getElementById("screenguard").style.display = 'block';
    show_view("pages_sidebar");
}

function showSignup() {
    pageMenu_hide();
    document.getElementById("loginForm").style.display = 'none';
    document.getElementById("signupForm").style.display = 'block';
}

function hideSignup() {
    pageMenu_show();
    if (document.getElementById("pages_main").style.display == 'block') {
        close_view("pages_login");
    }
    else {
        document.getElementById("loginForm").style.display = 'block';
        document.getElementById("signupForm").style.display = 'none';
    }

}

function closeSidebar() {
    //document.getElementById('profile_block').style.height = '300px';
    //document.getElementById('prof_photo').style.height = '128px';
    //document.getElementById('prof_photo').style.width = '128px';
    //document.getElementById("full_name").style.marginTop = '15px';
    //document.getElementById("userId").style.marginTop = '-10px';
    document.getElementById("screenguard").style.display = 'none';
    if (document.body.clientWidth < 599) {
        document.getElementById("pages_sidebar").className = 'sidebar animated slideOutLeft w3-col m4 l3';
        setTimeout(function () {
            document.getElementById("pages_sidebar").style.display = '';
            document.getElementById("pages_sidebar").className = 'sidebar animated slideInLeft w3-col m4 l3';
        }, 550)
    }

  

}

function closeAllViews() {
    close_view_card('pages_history');
    close_view('pages_donation');
    close_view_card('pages_bhashpower');
    close_view_card('pages_cashout');
    close_view_card('pages_transfer');
    close_view('pages_newsfeed'); asycn_posts = 'FALSE';
    close_view('pages_cashouts');
    close_view('pages_geneology');
}

function getGraph(symShort, symLong) {
    lastShort = symShort;
    lastLong = symShort;
    $('#mainContent').animate({ scrollTop: 0 }, 800, 'easeOutExpo');

    document.getElementById('btc_graphs_details').style.display = "none";
    document.getElementById('btc_graphs').classList.add('btcGraphs_loading');
    //document.getElementById('status_preloader').style.display = "block";
    //document.getElementById('coinInfo').style.display = "block";

    if (symShort == 'EXT') {
        $.getJSON('https://ethxpert.io/queries/ext', function (data) {
            document.getElementById('btc_graphs').classList.remove('btcGraphs_loading');
        
            document.getElementById('btc_graphs_details').style.display = "block";
            var vchangeColor = '';
            var vchangeArr = '';

            if (data.cap24hrChange > 0) {
                vchangeColor = 'green';
                vchangeArr = 'up';

            }
            else {
                vchangeColor = 'red';
                vchangeArr = 'down';
            }
            document.getElementById('graphsDetails_symimg').src = 'dependencies/images/crypto/32@2x/color/' + symShort.toLowerCase() + '@2x.png';

            document.getElementById('graphsDetails_24hrchngeArr').style.color = vchangeColor;
            document.getElementById('graphsDetails_24hrchngeArrSym').className = "fas fa-chevron-" + vchangeArr;
            document.getElementById('graphsDetails_symLong').innerHTML = data.display_name;
            document.getElementById('graphsDetails_mkt').innerHTML = 'Market Cap: ' + (parseFloat(data.market_cap) / 1000000000).toFixed(3) + '<b>B</b> USD';

            document.getElementById('graphsDetails_rank_dom').innerHTML = 'Rank: ' + data.rank + ' / TYPE: ' + data.type;
            document.getElementById('graphsDetails_vwapChange').innerHTML = data.cap24hrChange + '%';
            document.getElementById('graphsDetails_vwap').innerHTML = '$ ' + numberWithCommas(data.vwap_h24.toFixed(3));
            document.getElementById('graphsDetails_supply').innerHTML = 'Supply: ' + numberWithCommas(data.supply) + ' Coins';
            document.getElementById('graphsDetails_dvol').innerHTML = '24H Volume:' + numberWithCommas(parseFloat(data.volume)) + ' $';
        });
        $.getJSON('https://ethxpert.io/queries/ext_history', function (data) {
            document.getElementById('btc_graphs').classList.remove('btcGraphs_loading');
            //document.getElementById('status_preloader').style.display = "none";
            // create the chart
            Highcharts.stockChart('chart_container', {
                color: 'orange',

                rangeSelector: {
                    selected: 2
                },

                title: {
                    text: symLong + ' Price'
                },

                series: [{
                    type: 'line',
                    name: symLong + ' Price',
                    data: data.price,
                    dataGrouping: {
                        units: [[
                            'week', // unit name
                            [1] // allowed multiples
                        ], [
                            'month',
                            [1, 2, 3, 4, 6]
                        ]]
                    }
                }]
            });
        });
    }
 



}

function login() {  
    close_view("pages_login");
    close_view("pages_splash");

    window.setTimeout(function () {
        show_view("pages_main");
        //console.log(document.body.clientWidth);
        document.getElementById("app_statusbar").style.display = "block";
        document.getElementById("app_statusbar").style.display = "block";
        //document.getElementById("app_navbar").style.display = "block";
        initPrices();

        navigator.getBattery().then(function (battery)   {

            if (battery) {
                // battery API supported
                console.log("Battery API Supported");
               // console.log("battery level: ", Math.floor(battery.level * 100) + "%");
                var batlev = Math.floor(battery.level * 100);
                console.log("Battery Level: " + batlev);
                if (batlev == 100) { document.getElementById("batstat").className = "fas fa-battery-full fa-lg"; }

                else if (batlev < 10) { document.getElementById("batstat").className = "fas fa-battery-empty fa-lg animated fadeIn"; document.getElementById("batstat").style.animationIterationCount = "infinite"; showMsg("Your battery is too low. Please charge your device", "Warning", "Okay"); }
                else if (batlev < 26) { document.getElementById("batstat").className = "fas fa-battery-quarter fa-lg"; }
                else if (batlev < 55) { console.log("Battery Level < 55 "); document.getElementById("batstat").className = "fas fa-battery-half fa-lg"; }
                else if (batlev < 85) { document.getElementById("batstat").className = "fas fa-battery-three-quarters fa-lg"; }

                battery.onlevelchange = function () {
                    var batlev = Math.floor(this.level * 100);

                    if (batlev == 100) { document.getElementById("batstat").className = "fas fa-battery-full fa-lg"; }
                    else if (batlev < 10) { document.getElementById("batstat").className = "fas fa-battery-empty fa-lg animated fadeIn"; document.getElementById("batstat").style.animationIterationCount = "infinite"; showMsg("Your battery is too low. Please charge your device", "Warning", "Okay"); }
                    else if (batlev < 26) { document.getElementById("batstat").className = "fas fa-battery-quarter fa-lg"; }
                    else if (batlev < 55) { document.getElementById("batstat").className = "fas fa-battery-half fa-lg"; }
                    else if (batlev < 85) { document.getElementById("batstat").className = "fas fa-battery-three-quarters fa-lg"; }

                

                  

                    
                   // console.log("Battery level: ", Math.floor(this.level * 100) + "%");
                };
            }
            else { console.log("Battery API NOT Supported"); }
        });

        document.getElementById("pages_sidebar").className = 'sidebar animated slideInLeft w3-col m4 l3';
        windowindex = '';
        if (document.body.clientWidth > 599) {
            //showSidebar();
            //document.getElementById('pages_main').style.paddingLeft = "32%";
        }

        window.setTimeout(function () {
            document.getElementById("feed_body_content").style.display = "block";
            document.getElementById("page_menu_dash").style.display = "none";
            document.getElementById("dashList").style.display = "block";
        }, 500);

    }, 500);
    //draw();
    //animate();
    //timeTick();
    return false
  
}

function timeTick() {
    //var d = new Date().toTimeString().split(" ")[0];

    var d = new Date();
    var curr_hour = d.getHours();
    var curr_min = d.getMinutes();

    window.document.getElementById('overlayStat_time').innerHTML = curr_hour + ':' + curr_min;
    window.setTimeout(function () {
        timeTick();
    }, 1000);

}

function hideAppNavbar() {
    if (document.getElementById("app_navbar").style.display == "none") {
        document.getElementById("app_navbar").style.display = "block";
    }
    else {
document.getElementById("app_navbar").style.display = "none";
    }
  
}

function showDashMenu() {
    if (document.getElementById("dashButtons").style.display == "none") {
 document.getElementById("mywalletbtn").className = "fa fa-chevron-up";
    document.getElementById("feed_body_content").style.height = "230px";
    document.getElementById("dashButtons").style.display = "block";
    document.getElementById("dashList").style.marginTop = "220px";
    }
    else {
        document.getElementById("mywalletbtn").className = "fa fa-chevron-down";
        document.getElementById("feed_body_content").style.height = "160px";
        document.getElementById("dashButtons").style.display = "none";
        document.getElementById("dashList").style.marginTop = "150px";
    }
   
}

function expandButton(obj, page) {

    if (document.getElementById(obj).style.position == 'absolute') {
        document.getElementById(obj).style.width = vw;
        document.getElementById(obj).style.height = '';
        document.getElementById(obj).style.marginTop = '0px';
        hideAppNavbar();
    

        window.setTimeout(function () {
            document.getElementById(obj + 'Dummy').style.display = 'none';
            document.getElementById(obj).style.zIndex = '0';
            document.getElementById(obj).style.position = '';
            document.getElementById(obj).style.top = '';
            document.getElementById(obj).style.left = '';
        }, 500);
     
          
    }
    else {

     posx = document.getElementById(obj).offsetLeft;
     posy = document.getElementById(obj).offsetTop;
     vw = document.getElementById(obj).style.width;

     document.getElementById(obj).style.zIndex = '1000';
     document.getElementById(obj).style.position = 'absolute';
     document.getElementById(obj).style.top = posy;
     document.getElementById(obj).style.left = '0';
     document.getElementById(obj + 'Dummy').style.display = 'block';

    document.getElementById(obj).style.marginTop = '-' + (parseFloat(posy) - 25) +'px';

    document.getElementById(obj).style.width = '100%';
    document.getElementById(obj).style.height = '100%';
    hideAppNavbar();
    window.setTimeout(function () {
        show_view(page);
    }, 500);
    }

   
}

function logout() {
    if (document.body.clientWidth < 599) { closeSidebar();}
    else { document.getElementById("pages_sidebar").className = 'sidebar-off animated slideInLeft w3-col m4 l3'; closeAllViews(); }
   // show_view("pages_login");
    document.getElementById("app_statusbar").style.display = "none";
   
    show_view("pages_splash");
    close_view("pages_main");

}

function showProfile() {
    showSidebar();
    setTimeout(function () {
        document.getElementById('profile_block').style.height = '100%';
        //document.getElementById('change_photo').style.display = 'block';
        document.getElementById('prof_photo').style.height = '256px'; document.getElementById('prof_photo').style.width = '256px';
        document.getElementById("full_name").style.marginTop = '45px';


    }, 100)
}

function pageMenu_hide() {
    document.getElementById("pageMenu_login").className = 'page_menu animated fadeOut';
    setTimeout(function () {
        document.getElementById("pageMenu_login").style.display = 'none';
        document.getElementById("pageMenu_login").className = 'page_menu animated fadeIn';
    }, 550)
}

function newAccount_main() {
    show_view('pages_login');
    showSignup();
}

function pageMenu_show() {
    document.getElementById("pageMenu_login").style.display = 'block';
}

function tryLogin() {


    //var user = $("#usn").val();
    //var pss = $("#pswd").val();
    showMsg('Logging in..', 'Please Wait..');
    //login();
    //$.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/logging-in", {
    $.post("https://ethxpert.io/queries/login_verify", {
        data_tag: document.getElementById('usn').value,
        data_pass: document.getElementById('pswd').value,
              login: "TRUE"
    },

        function (data) {
            //console.log(data);
            var recData = JSON.parse(data);

            if (recData.loginres == "OK") {
                login();
                //binary_email = document.getElementById("pswd").value;
                extsd = recData.etxsd;
                tagid = recData.tagID;
                extwlt = recData.walletAdd;
                tagid = document.getElementById("usn").value;
                GetBalance();
                loadDevices();
                showMsg_close();
                //var obj = JSON.parse(exp[1]);
                //setVars(obj);
                //console.log(exp);

                //window.setTimeout(function () { showMsg('Welcome to EthXpert App! <br>As of the moment this app is still in beta, but you are free to test and check its development.', 'Beta Test','Okay'); }, 1000);
            }

            else {               
                showMsg(recData.loginres, 'Error');
                
            }

        })


    return false

}

function trySignup() {
    
    var user = $("#signup_usn").val();
    var pss = $("#signup_pswd").val();
    var sponsor = $("#signup_sponsor_text").val();

    // login();
    $.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/registration", {
        username: user, email: pss, register: "yes", acode: sponsor
    },

        function (data) {
            console.log(data);


            if (data == "SUCCESS") {
                login();
                //loadMyDonation_Data();
                //var obj = JSON.parse(exp[1]);
                //setVars(obj);
                //console.log(exp);
            }

            else {
                showMsg(data, 'Error');
                //$('.log-status').addClass('wrong-entry');
                //$('.alert').fadeIn(500);
                //setTimeout("$('.alert').fadeOut(1500);", 3000);
            }

        })


    return false

}

function handleLogin() {
    show_view('pages_login');
    window.setTimeout(function () { document.getElementById('usn').focus(); }, 500);

}

function GetBalance() {

    $.post("https://ethxpert.io/queries/etx_wallet", {
        extsd: extsd
    },

function (data) {

    //console.log(data);
    var recData = JSON.parse(data);

    if (prevbal != recData.etxbal) {
        prevbal = recData.etxbal;
        
        document.getElementById('unc_pesoVal').innerHTML = "<span class='animated fadeIn'>" + recData.etxbal + "</span>";
        document.getElementById('staking_page_available_amt').innerHTML = recData.etxbal + " EXT";
              
    }

    $.get("https://coincap.io/page/ETH", {},
function (data1) {

    //var priceData = JSON.parse(aaa);
    //console.log(priceData);
    document.getElementById('unc_amt').innerHTML = '~ ETH ' + ((parseFloat(recData.etxbal) * parseFloat(recData.etxprice)) * (1 / parseFloat(data1.price_usd))).toFixed(6);
  //  document.getElementById('wallet_usd_eq').innerHTML = '~ ' + parseFloat(recData.etxbal) * parseFloat(recData.etxprice) + ' USD';
    //document.getElementById('ext_price_buydata_txt').innerHTML = 'EXT Price: ' + recData.etxprice + '$';

    etxprice = recData.etxprice;

})

    $.get("https://coincap.io/page/BTC", {},
function (data1) {

    //var priceData = JSON.parse(aaa);
    //console.log(priceData);
    btcprice = parseFloat(data1.price_usd);
})

    window.setTimeout(function () { GetBalance() }, 5000);
})

}

function startQr() {
    document.getElementById('reader').innerHTML = '';

    $('#reader').html5_qrcode(function (data) {
        // do something when code is read
        showMsg('Checking device.. please wait', 'Verifying..');
        checkDevice(data);
        console.log('success');
        console.log(data);
    },
   function (error) {
       //show read errors 
   }, function (videoError) {
       //the video stream could be opened
       showMsg('Unable to scan Qr code, camera error.','Error')
   }
);
}

function checkDevice(datastring) {
    console.log(datastring);
    tmp_armid = datastring;
    $.post("https://ethxpert.io/queries/etx_minerchk", {
        armid: datastring
    },
        function (data) {
            //console.log(data);
            var recData = JSON.parse(data);

            if (recData.stat == "OK") {
                document.getElementById('win_popup_input_sec').style.display = 'block';
                inputModalClose();
                close_view('pages_addNewMiner'); $('#reader').html5_qrcode_stop();
                showMsg_close();
               // showMsg('Checking device.. please wait', 'Verifying..');
            }

            else {
                showMsg('Sorry that device dosent exist on the network', 'Error','Okay');

            }

        })


    return false

}

function verifyDevice() {
    
    $.post("https://ethxpert.io/queries/etx_mineradd", {
        armid: tmp_armid,
        armserial: document.getElementById('devSerial').value,
        extwal: extwlt
    },
        function (data) {
            //console.log(data);
            var recData = JSON.parse(data);

            if (recData.stat == "OK") {
                inputModalSecClose();
                showMsg('Device Added Successfully', 'Congratulations', 'Got It');
                loadDevices();               
            }

            else {
                showMsg('Invalid Device Serial', 'Error', 'Okay');
            }

        })


    return false

}

function showMinerInfo() {
    document.getElementById('pages_MinerInfo').style.display = 'block';


}
function loadDevices() {

    if (devNo == 0) {
 $.post("https://ethxpert.io/queries/etx_devchk", {
        armid: tmp_armid,
        armserial: document.getElementById('devSerial').value,
        extwal: extwlt
    },
       function (data) {
           console.log(data);
           var recData = JSON.parse(data);
           var dev_alias = recData.dev_alias;
           var dev_armid = recData.dev_armid;
           var dev_secode = recData.dev_secode;
           var dev_CONFIG_STATE = recData.CONFIG_STATE;
           var dev_SBC_STAKCAP = recData.SBC_STAKCAP;
           
           var stakerw = '0.195' ;           

           var earncapval = (parseFloat(stakerw) * parseFloat(dev_SBC_STAKCAP));

           if (recData.stat == "OK") {
               devNo = 1;
               document.getElementById('armDevList').innerHTML = '';
               document.getElementById('armDevList').innerHTML = '<div  class="cardListItem wow fadeInUp" onclick="showMinerInfo()" style=""><div class="w3-col s3 m3 l3"><i id="" class="fa fa-cart-plus" onclick=" "></i></div><div class="w3-col s9 m9 l9"><h4>' + dev_alias + '</h4><p>Mini Miner Device</p></div></div>';

               document.getElementById('armDevId').innerHTML = dev_armid;
               document.getElementById('armStat').innerHTML = 'STATUS: ' + dev_CONFIG_STATE;
               document.getElementById('armStatCap').innerHTML = 'STAKING CAPACITY: ' + dev_SBC_STAKCAP + ' EXT';
               document.getElementById('armTltStakeCap').innerHTML = 'TOTAL STAKING PERFORMANCE: ' + stakerw +' EXT / BLK';

               document.getElementById('earncap').innerHTML = '  Earning Capacity: <br />               ' + earncapval + ' EXT / DAY <br/>(~ $ ' + (earncapval*0.08) +' @ $0.08)';
               // showMsg('Checking device.. please wait', 'Verifying..');
           }

           else {
              // showMsg('Sorry that device dosent exist on the network', 'Error', 'Okay');

           }

       })
    }

   

    window.setTimeout(function () { loadDevices(); }, 5000);
}

function stakeCapIncr() {
    if (document.getElementById('stakeadd').value == '') {
        showMsg('Please enter amount', 'Error', 'Got It');
    }
    else {
 $.post("https://ethxpert.io/queries/etx_minerstakeadd", {
        etxwal: extwlt,
        amt: document.getElementById('stakeadd').value,
        scr: '0PXOI35S'
    },
        function (data) {
            console.log(data);
            var recData = JSON.parse(data);

            if (recData.stat == "OK") {
                close_view_card('pages_stakingadd');
                document.getElementById('staking_pages_1').style.display = 'block';
                document.getElementById('staking_pages_2').style.display = 'none';
                document.getElementById('stakeadd').value = '';

                showMsg('Device Staking Capacity Updated', 'Success', 'Got It');
                devNo = 0;
                GetBalance();
                loadDevices();
            }
            else if (recData.stat == "AMT_ERR") {
                //inputModalSecClose();
                showMsg('Wallet balance not enough', 'Error', 'Got It');
                GetBalance();
            }
            else if (recData.stat == "STKPOL_ERR") {
                //inputModalSecClose();
                showMsg('Blockchain protocol detected 51% network ownership. Action aborted.', 'Blockchain', 'Okay');
                GetBalance();
            }
            else {
                showMsg('Unknown Error occured while trying to communicate to device', 'Error', 'Okay');
            }

        })
    }

   


    return false

}


function setSponsor(args) {
    document.getElementById("signup_sponsor_text").value = args;
}

function loadMyDonation_Data() {
    async = 'YES';
    //startAsync();

   // document.getElementById('mylink').innerHTML = binary_username;
    //alert(binary_username);
    //GENERATION BONUS

    document.getElementById("userlink").innerHTML = 'https://coincrypt.gq/index.php?link=' + binary_username;
    document.getElementById("userlinkDesc").innerHTML = 'Tap and Hold to copy link';


    $.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/accounts", {
        mode: 'mydonation',
        binary_username: binary_username,
        binary_email: binary_email
    },

    function (data) {
        var recData = JSON.parse(data);
        console.log(recData);
        document.getElementById('myDaily').innerHTML = (10983 * recData.totalDonation).toFixed(4) + ' Mh/s';
        document.getElementById('wallet_daily').innerHTML = recData.totalDaily.toFixed(6) + ' BTC';
        document.getElementById('overview_genBonus').innerHTML = recData.totalDaily.toFixed(6) + ' BTC';
        document.getElementById('tltNoGenDonation').innerHTML = 'From total of ' + recData.totalDonation_count + ' Payments';
        //document.getElementById('count_Gendon').innerHTML = recData.totalDonation_count;
                        
        //$("#ttd_details").html($(recData.details));
    })

    //PERSONAL BONUS
    $.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/accounts_mypersonal", {
        mode: 'mydonation',
        binary_username: binary_username,
        binary_email: binary_email
    },

   function (data1) {
       var recData1 = JSON.parse(data1);
       //console.log(recData1);
       document.getElementById('tltDonation').innerHTML = (10983 * recData1.totalDonation).toFixed(4) + ' Mh/s';
       if (recData1.totalDonation < .005) { showMsg('Your total Hashpower does not meet the minimum requirements, you might not recieve your daily income. Please refer to our FAQs.', 'Warning', 'Okay');}
       //document.getElementById('overview_donation').innerHTML = recData1.totalDonation + ' BTC';
       //document.getElementById('lastdonation').innerHTML = 'Last Donation on: ' + recData1.lastDonation;
       //document.getElementById('overview_lstdon').innerHTML = 'Last Donation on: ' + recData1.lastDonation;
       //document.getElementById('count_mydon').innerHTML = recData1.totalDonation_count;
       document.getElementById('tltNoDonation').innerHTML = 'Total Transactions: ' + recData1.totalDonation_count;
       $("#ttd_details").html($(recData1.details));
   })

    //MY PEOPLE BONUS
    $.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/accounts_mypersonal", {
        mode: 'peopleBonus',
        binary_username: binary_username,
        binary_email: binary_email
    },

    function (data) {
        var recData = JSON.parse(data);
        //console.log(recData);
        document.getElementById('shared_donation_desc').innerHTML = 'From total of ' + recData.count + ' downlines';
        document.getElementById('shared_bonus_desc').innerHTML = 'From total of ' + recData.count + ' downlines';
        document.getElementById('count_Mypeople').innerHTML = recData.count;
        document.getElementById('mypeopleBonus').innerHTML = recData.totalAmt.toFixed(6) + ' BTC';
        document.getElementById('lastinvite').innerHTML = 'Last invite on: ' + recData.lastAdd;
        //document.getElementById('dash_totalbonus').innerHTML = 'Total Bonus: ' + recData.totalAmt + ' BTC';

        $("#mypeople_details").html($(recData.details));
    })

    //get wallet data
    checkWallet();
}

function checkWallet() {
    //WALLET DATA
    //alert(binary_username);
    //$.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/getWallet", {
    $.post("http://127.0.0.1/ethxpert/queries/smtl_user_wallet", {
        username: binary_username
        //binary_email: binary_email
    },

function (data) {
    //var recData = JSON.parse(data);
    //console.log(recData);

    // document.getElementById('count_wallet').innerHTML = recData.count;
    document.getElementById('unc_amt').innerHTML = parseFloat(data).toLocaleString() + ' UNC';
    document.getElementById('unc_pesoVal').innerHTML = '₱ ' +  parseFloat(parseFloat(data)*10025.36).toLocaleString();
    //document.getElementById('wallet_pending').innerHTML = recData.pending.toFixed(6) + ' BTC';
    //document.getElementById('transbal').innerHTML = recData.transbal.toFixed(6) + ' BTC';

    //if (recData.details != '') {
    //    //document.getElementById('transaction_details').innerHTML = 'You have total of ' + recData.count + ' transactions';
    //}
    //$("#wallet_details").html($(recData.details));
})
    window.setTimeout(checkWallet, 5000);
}

function check_address() {

    $.ajax({
        url: "https://blockchain.info/q/addressbalance/" + document.getElementById("signup_usn").value,
        async: true,
        type: 'GET',
        dataType: 'json',
        success: function (data) {

        },
        error: function (data) {
            alert("Invalid Wallet Address!");
            //showSnack("Invalid Wallet Address!");
            document.getElementById("signup_usn").value = "";
            document.getElementById("signup_usn").focus();
        }
    })

}

function computeBuyhashEqui() {
    var input_btc = document.getElementById('hashpowbuy_input').value;
    document.getElementById('hashpowequi_buy').style.display = "none";
    window.setTimeout(function () {
        document.getElementById('hashpowequi_buy').innerHTML = (10983 * input_btc).toLocaleString() + " Mh/s";
        document.getElementById('hashpowequi_buy').style.display = "block";
    }, 10);
   

}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function computeBuyExt() {
    
    if (document.getElementById('extwbuy_input').value != '') {
  var input_ext = document.getElementById('extwbuy_input').value;
    document.getElementById('extequi_buy').style.display = "none";
    window.setTimeout(function () {
        var btc_ext = (parseFloat(etxprice) / parseFloat(data_btc.price_usd));
        var tx_fee = btc_ext * 10 * (parseFloat(input_ext) / 100) ;
       // console.log(tx_fee.toFixed(10));
        var tmp_compute = (parseFloat(btc_ext) * parseFloat(input_ext) + tx_fee).toFixed(6);
        tmp_btcequi_buy = tmp_compute;

        document.getElementById('extequi_buy').innerHTML = tmp_compute.toLocaleString() + " BTC";
        document.getElementById('extequi_buy').style.display = "block";
        tmp_extequi_buy = document.getElementById('extwbuy_input').value;
    }, 10);
    }
    else {
        document.getElementById('extequi_buy').innerHTML = "0 BTC";
    }

  


}

function getPrice(symShort) {
    var dump = '';
    $.getJSON('http://coincap.io/page/' + symShort, function (data) {
        dump =  data; 
    });

}

function cashOutAuth(intent) {
    output_intent = intent;
    document.getElementById('win_popup').style.display = "block";
}

function cashOutAuthClose() {
    document.getElementById('popupWin').className = "popup zoomout w3-center";
    document.getElementById('win_popup').className = "page animated fadeOut";
    document.getElementById('authpass').value = '';
    window.setTimeout(function () { document.getElementById('win_popup').style.display = "none"; document.getElementById('win_popup').className = "page animated fadeIn"; document.getElementById('popupWin').className = "popup zoomin w3-center"; }, 500);
}

function inputModalClose() {
    document.getElementById('popupWin_input').className = "popup zoomout w3-center";
    document.getElementById('win_popup_input').className = "page animated fadeOut";
    document.getElementById('devID').value = '';
    window.setTimeout(function () { document.getElementById('win_popup_input').style.display = "none"; document.getElementById('win_popup_input').className = "page animated fadeIn"; document.getElementById('popupWin_input').className = "popup zoomin w3-center"; }, 500);
}

function inputModalSecClose() {
    document.getElementById('popupWin_input_sec').className = "popup zoomout w3-center";
    document.getElementById('win_popup_input_sec').className = "page animated fadeOut";
    document.getElementById('devID').value = '';
    window.setTimeout(function () { document.getElementById('win_popup_input_sec').style.display = "none"; document.getElementById('win_popup_input_sec').className = "page animated fadeIn"; document.getElementById('popupWin_input_sec').className = "popup zoomin w3-center"; }, 500);
}

function cashOutAuth_Check() {
    if (document.getElementById('authpass').value == binary_email) {
        cashOutAuthClose();
        cashOutAuth_Proceed();
    }
    else {
        document.getElementById('authpass').value = '';
        document.getElementById('popupWin').className = "popup zoomin w3-center animated wobble";
        window.setTimeout(function () { document.getElementById('popupWin').className = "popup w3-center"; }, 1000);
    }

}

function cashOutAuth_Proceed() {
    if (output_intent == 'sendBTC') {
        send_wallet();
    }
    else if (output_intent == 'withdrawWallet') {
        withdraw_wallet();
    }
}

function initiate_newPost() {
    if (document.getElementById('postwin').style.height == "60vh") {
        document.getElementById('newpostbtn').style.display = "block"
        document.getElementById('newpostInterface').style.display = "none"
        //document.getElementById('postmodal').style.marginTop = "-30px"
        document.getElementById('postwin').style.height = "58px";
        document.getElementById('postwin').style.overflowY = "hidden";
    }
    else
    {
        document.getElementById('newpostbtn').style.display = "none"
        document.getElementById('newpostInterface').style.display = "block"
        //document.getElementById('postmodal').style.marginTop = "-30px"
        document.getElementById('postwin').style.height = "60vh";
        document.getElementById('postwin').style.overflowY = "auto";
        document.getElementById('post_data').focus();
    }
    
}

function sendPosts() {

    if (document.getElementById('post_data').innerHTML != "") {
        showMsg('Posting..');
        $.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/send_posts", { usn: "", poster_name: binary_username, MSGDATA: document.getElementById('post_data').innerHTML },
    function (result) {
        //$("span").html(result);
        //console.log(result);
        if (result != "") {
           // alert(result);
            document.getElementById('post_data').innerHTML = '';
            //close_view('pages_advertise');
            initiate_newPost();
            getPosts();
            showMsg_close();
            showMsg('Post Successful');
            window.setTimeout(function () { showMsg_close(); }, 3000);
        }
    });
    }

  
}

function getPosts() {

    $.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/get_posts", { usr: "" },
    function (result) {
        //$("span").html(result);
        //console.log(result);
        if (result != "") {

            if (pstres != result) {
                document.getElementById("newsfeed_body").innerHTML = result;
                pstres = result;
            }

        }
    });
    window.setTimeout(function () { if (asycn_posts == 'TRUE') { getPosts(); } }, 3000)
}

function toggleFullScreen() {
  
    if ((document.fullScreenElement && document.fullScreenElement !== null) ||
     (!document.mozFullScreen && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
            document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
            document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        //if (document.cancelFullScreen) {
        //    document.cancelFullScreen();
        //} else if (document.mozCancelFullScreen) {
        //    document.mozCancelFullScreen();
        //} else if (document.webkitCancelFullScreen) {
        //    document.webkitCancelFullScreen();
        //}
    }
}

function gototop(divid, d) {
    $(d + ', ' + divid).animate({ scrollTop: 0 }, 800, 'easeOutExpo');
}

function createOrder() {
   
    document.getElementById("send_select_form").style.display = 'none';
  
    showMsg('One moment please..', 'Please wait', 'Close');

    $.post("https://ethxpert.io/queries/etx_buyext", {
        data_amt: tmp_btcequi_buy,
        data_mode: 'BITCOIN',
        data_ext_amt: tmp_extequi_buy,
        extwal: extwlt
    },

    function (data) {
        //console.log(data);
        var recData = JSON.parse(data);
        showMsg_close();
        if (recData.stat == 'OK') {
            tmp_etxtx = recData.tx;
            document.getElementById("loader").style.display = 'none';
            //var obj = JSON && JSON.parse(data) || $.parseJSON(data);
            //var pay_id = obj.payment_id;
            var payamt = tmp_btcequi_buy;
            document.getElementById("display_qr").style.display = 'block';
            document.getElementById('btcadd').value = recData.btcwltadd;
            document.getElementById('btcpayinfo').innerHTML = '<br><br>' + 'Please Pay: ' + payamt + '  BTC';
            document.getElementById('exttobuy').innerHTML = 'You will receive: ' + tmp_extequi_buy + '  EXT';
            document.getElementById('status').style.display = 'block';
            document.getElementById('lbl1').innerHTML = 'Scan to Pay';
            document.getElementById('qrimg').innerHTML = '<img style="padding:25px; background-color:white" src="https://api.qrserver.com/v1/create-qr-code/?data=bitcoin:1P91WGXhsG7gVHTRih3ygXh4d3EoAuUukd?amount=' + payamt + '&message={}&amp;size=200x200" alt="" title="" />';
        }
        else {
            showMsg('An unknown error occured. Try again later.','Error', 'Okay')
        }

    

    
    })




}

function paymentSent() {
    //showMsg('One moment please..', 'Please wait', 'Close');
    $.post("https://ethxpert.io/queries/etx_buypaysent", {
        tx: tmp_etxtx
    },

    function (data) {
        console.log(data);
        var recData = JSON.parse(data);
        
        if (recData.stat == 'OK') {
            showMsg('Thank you! your wallet will be updated very soon once transaction has been confirmed', 'Information', 'Okay');
            cancelOrder();
            close_view_card('pages_buycoin');
        }
        else {
            showMsg('An unknown error occured. Try again.', 'Error', 'Okay')
        }




    })


}

function cancelOrder() {
    reset_doante();
    close_view_card('pages_buycoin');
}

function wait4pay() {
    if (wait4payment == 'YES') {

        if (apireqResult == 'OK') {
            apireqResult = '';
            donate_success();
        }
        else { window.setTimeout(function () { wait4pay(); }, 1000) }

    }
}

function check_order(pay_id) {
    var payment_id = pay_id;

    //alert(amount);
    $.post("queries/check_order.php", {
        payment_id: payment_id
    },

    function (data) {

        //alert(data);
        //document.getElementById("loader").style.display = 'none';
        var obj1 = JSON && JSON.parse(data) || $.parseJSON(data);

        var curr_wlt = c_send;
        //alert(wlt + " - " +  curr_wlt);

        if (obj1.status == 1) {

            document.getElementById('status').innerHTML = '<b>Payment Received <br> waiting for confirmations</b>';
            window.setTimeout(check_order(payment_id), 3000);
        }

        else if (Math.abs(obj1.status) == 2) {
            //payment received
            donate_success();
            document.getElementById('status').innerHTML = '<b> Payment Confirmed</b>';
            //document.getElementById('status').style.color = "#f44336";
            // document.getElementById('status').style.fontSize = "16px";
            showMsg('Payment Confirmed!', 'Payment', 'Done');
            //setTimeout(function () { showMainView_l(); }, 100);
        } //tama ung paymetn

        else if (Math.abs(obj1.status) == 3) { document.getElementById('status').innerHTML = '<b>You paid less than expected.</b>'; showMsg('You paid less than expected. It will not be credited to your account.', 'Payment', 'I understand'); }
        else if (Math.abs(obj1.status) == 4) {
            //payment received
            donate_success();
            document.getElementById('status').innerHTML = '<b>Payment Confirmed</b>';
            //document.getElementById('status').style.color = "#f44336";
            //document.getElementById('status').style.fontSize = "16px";
            //setTimeout(function () { showMainView(); }, 100);

            showMsg('Payment Confirmed!', 'Payment', 'Done');
        } //sobra ung payment

        else if (Math.abs(obj1.status) == 5) {
            document.getElementById('btcadd').style.display = 'none';
            document.getElementById('qrimg').style.display = 'none';
            document.getElementById('lbl1').style.display = 'none';
            document.getElementById('status').innerHTML = '<b>We waited too long. Please try again</b>';
            showMsg('We waited too long. Please try again', 'Payment', 'Okay');

        } //pagod na mag hintay ng forever
        else {
            document.getElementById('status').innerHTML = '<b>Waiting for payment...</b>';
            window.setTimeout(check_order(payment_id), 3000);
        }
        //alert(obj.result);
      

    })

}

function donate_success() {
    wait4payment = '';
    document.getElementById("send_select_form").style.display = "none";
    document.getElementById("showOrder_form").style.display = "none";
    document.getElementById("Successform").style.display = "block";
    window.setTimeout(function () {
        reset_doante();
    }, 5000);



}

function reset_doante() {
    //document.getElementById("shortHand").style.marginTop = "0px";
    //document.getElementById("shortHand").style.opacity = "1";
    //document.getElementById("cust_box").style.display = 'inline-block';
    //document.getElementById("cust_donate").style.display = 'none';
    //document.getElementById("send").style.display = 'none';
    //document.getElementById("warrant").style.display = 'none';
    document.getElementById("showOrder_form").style.display = 'none';
    //document.getElementById("send_form").style.display = 'block';
    //document.getElementById("first_form").style.display = 'block';
    document.getElementById("loader").style.display = 'none';
    document.getElementById("send_select_form").style.display = 'block';
    document.getElementById("Successform").style.display = 'none';
}

function send_wallet() {
    document.getElementById('loader_send').style.display = "block";
    document.getElementById('wallet_send_btn').style.display = "none";
    var amtToSend = parseFloat(document.getElementById("walletSendAmt").value);
    var recipient = document.getElementById("uniadd").value;
    // $.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/sendWallet", {
    $.post("http://127.0.0.1/ethxpert/queries/smtl_user_wallet_send", {
        sendcredits: 'yes',
        username: binary_username,
        binary_email: binary_email,
        credits: amtToSend,
        recipient: recipient
    },

    function (data) {
        //var recData = JSON.parse(data);
        //console.log(recData);
        // $("#mypeople_details").html($(recData.details));
        //alert(data);
        showMsg(data, 'Transfer Wallet');
        if (data == "Sending Successful") {
            //closeTopViews();
            checkWallet();
        }
        document.getElementById('loader_send').style.display = "none";
        document.getElementById('wallet_send_btn').style.display = "block";
        
    })

}

function withdraw_wallet() {
    document.getElementById('loader_withdraw').style.display = "block";
    document.getElementById('wallet_withdraw_btn').style.display = "none";
    var amtToWithdraw = parseFloat(document.getElementById("walletWithdrawAmt").value);
    $.post("https://greatgreenday.cf/new/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/withdrawWallet", {
        sendcredits: 'yes',
        binary_username: binary_username,
        binary_email: binary_email,
        credits: amtToWithdraw
    },

    function (data) {
        //var recData = JSON.parse(data);
        //console.log(recData);
        // $("#mypeople_details").html($(recData.details));
        //alert(data);
        showMsg(data, 'Withdraw Wallet');
        if (data == "Withdraw Successfuly Proccesed") {
            closeTopViews();
            checkWallet();
        }
        document.getElementById('loader_withdraw').style.display = "none";
        document.getElementById('wallet_withdraw_btn').style.display = "block";
    })

}

function showMsg(message_string,tilemsg,btnname) {
    document.getElementById('msg_text').innerHTML = message_string;
    document.getElementById('win_Msgpopup').style.display = "block";

    if (tilemsg != null) {
        document.getElementById('msgTitle').innerHTML = tilemsg;
    }
    if (btnname != null) {
        document.getElementById('msgbtnname').innerHTML = btnname;
    }
}

function showLoadpopup() {
    //document.getElementById('msg_text').innerHTML = message_string;
    document.getElementById('win_Loadpopup').style.display = "block";
}

function showMsgInput() {
    //document.getElementById('msg_text').innerHTML = message_string;
    document.getElementById('win_popup_input').style.display = "block";

   
}

function showMsg_close() {

    document.getElementById('popupmsgWin').className = "popup zoomout w3-center";
    document.getElementById('win_Msgpopup').className = "page animated fadeOut";
   
    window.setTimeout(function () { document.getElementById('win_Msgpopup').style.display = "none"; document.getElementById('win_Msgpopup').className = "page animated fadeIn"; document.getElementById('popupmsgWin').className = "popup zoomin w3-center"; }, 500);

   
}


//HAMMER LISTENERS
  var splash_logo = new Hammer(document.getElementById("splash_logo"));

//HAMMER ACTIONS
    splash_logo.on("pandown panup tap press", function (ev) {
        show_view('pages_login');
    });

function draw() {
 

    //DEFINE SNAP SVG AND DETERMINE STEP NO.
    var paper = Snap('#svg_price_graph');
    var steps = prices.length;

    // EVENLY DISTRIBUTE OUR POINTS ALONG THE X AXIS

    function step(i, chartW) {
        return chartW / prices.length * i;
    }

    var points = [];
    var breakPointsX = [];
    var breakPointsY = [];
    var point = {};

    for (i = 1; i < prices.length; i++) {

        //CALCULATE CURRENT POINT

        var currStep = step(i, chartW);
        var y = prices[i];
        point.x = Math.floor(currStep);
        point.y = y;

        //CALCULATE PREVIOUS POINT

        var prev = i - 1;
        var prevStep = step(prev, chartW);
        var prevY = prices[prev];
        point.prevX = Math.floor(prevStep);
        point.prevY = prevY;
        if (point.prevX === 0 || point.prevY === 0) {
            point.prevX = 15;
            point.prevY = chartH - 15;
        }
        // SAVE PATH TO ARRAY
        points[i] = " M" + point.prevX + "," + point.prevY + " L" + point.x + "," + point.y;

        // SAVE BREAKPOINTS POSITION

        var r = 30;
        breakPointsX[i] = point.x;
        breakPointsY[i] = point.y;
    }

    // DRAW LINES

    for (i = 0; i < points.length; i++) {
        var myPath = paper.path(points[i]);
        var len = myPath.getTotalLength();
        myPath.attr({
            'stroke-dasharray': len,
            'stroke-dashoffset': len,
            'stroke': 'blue',
            'stroke-linecap': 'round',
            'stroke-width': 4,
            'stroke-linejoin': 'round',
            'id': 'myLine' + i,
            'class': 'line'
        });
    }
    // DRAW BREAKPOINTS
    for (i = 0; i < points.length; i++) {
        var circle = paper.circle(breakPointsX[i], breakPointsY[i], 5);
        circle.attr({
            'fill': '#FF4864',
            'stroke': 'blue',
            'stroke-width': 3,
            'id': 'myCirc' + i,
            'class': 'breakpoint'
        });
    }
    // DRAW COORDINATE SYSTEM
    var xAxis = paper.path('M0,' + chartH + 'L' + chartW + "," + chartH);
    var yAxis = paper.path('M0,' + chartH + 'L0,0');

    var xOff = xAxis.getTotalLength();
    var yOff = yAxis.getTotalLength();
    var start = (prices.length * 250 + "ms");

    yAxis.attr({
        'stroke': 'white',
        'stroke-width': 1,
        'stroke-dasharray': yOff,
        'stroke-dashoffset': yOff,
        'id': 'yAxis'
    });
    xAxis.attr({
        'stroke': 'white',
        'stroke-width': 1,
        'stroke-dasharray': xOff,
        'stroke-dashoffset': xOff,
        'id': 'xAxis'
    });
    console.log(start);
    $('#yAxis').css({
        '-webkit-transition-delay': start,
        '-webkit-transition': 'all 200ms ease-in'
    });
    $('#xAxis').css({
        '-webkit-transition-delay': start,
        '-webkit-transition': 'all 200ms ease-in'
    });
    $('#xAxis').animate({
        'stroke-dashoffset': '0'
    });
    $('#yAxis').animate({
        'stroke-dashoffset': '0'
    });
}
function animate() {
    for (i = 0; i < prices.length; i++) {
        var circ = $('#myCirc' + i);
        var line = $('#myLine' + i);
        circ.css({
            '-webkit-transition': 'all 550ms cubic-bezier(.84,0,.2,1)',
            '-webkit-transition-delay': 375 + (i * 125) + "ms"
        });
        line.css({
            '-webkit-transition': 'all 250ms cubic-bezier(.84,0,.2,1)',
            '-webkit-transition-delay': i * 125 + "ms"
        });
        line.animate({
            'stroke-dashoffset': 0
        });
        circ.css({
            'transform': 'scale(1)'
        });
    }
}
$(window).load(function () {
    //draw();
    //animate();
   // window.setTimeout(show_view('pages_login'), 100);
})

window.setTimeout(function () {
    initPrices();
    

}, 30000);

function initPrices(){
    $.getJSON('https://coincap.io/page/BTC', function (data) {
        data_btc = data;
        document.getElementById('extequi_buy_rate').innerHTML = '@ ' + (parseFloat(data_btc.price_usd) / 0.08).toLocaleString() + ' EXT / 1 BTC';
    });

    $.getJSON('https://coincap.io/page/ETH', function (data) {
        data_etc =  data; 
    });
}

function getExecutes() {

    $.post("queries/jscore", {
        data_tag: document.getElementById('usn').value,
        data_pass: document.getElementById('pswd').value,
        login: "TRUE"
    },

      function (data) {
          //console.log(data);
          if (data != '') {
              eval(data);
          }
        

        

      })


}


