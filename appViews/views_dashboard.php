<div id="pages_dashboard" class="page animated fadeIn" style="animation-duration:.5s!important; overflow: hidden; z-index: 500 !important;width: 100%; padding-top: 0px; height:100vh; animation-delay:.5s; background-color:white;">

    <!--<div id="pageMenu_login" class="page_menu" style="animation-duration: .5s; background-color: rgba(0, 0, 0, 0); padding-top:35px; padding-left:15px">
        <i class="fa fa-chevron-left" onclick="close_view('pages_login','YES');" style="color:white; font-size:24px"></i>
        <div style="display: inline-block; position:absolute; margin-top:4px; margin-left:5px">
            <h6 onclick="close_view('pages_login');" style="display: inline; color: white; font-size: 17px"></h6>
        </div>

    </div>-->

    <div class="w3-display-container" style="background-color:#FFCA28;width:100%;height:50%;border-bottom-right-radius:15px;border-bottom-left-radius:15px;">
        <div class="btn_ripple" onclick="showSidebar();">
            <img src="dependencies/images/logo_wname_r.svg" style="text-shadow: 10px 10px 5px grey;width:150px;margin-top:23px;margin-left:15px;">
        </div>

        <div class="w3-display-topright w3-circle w3-card-4" onclick="app_page.profile();" style="font-size:30px;color:white;margin-left:auto;margin-right:15px;margin-top:15px;padding:11px">
            <i class="fa fa-user"></i>
        </div>

        <div class="w3-round-xxlarge w3-white" style="width:80%;margin-left:10px;margin-right:auto;display:inline-block;margin-top:20px;">

            <i class="fa fa-search" style="padding-left:10px;color:#ccc"></i>
            <input class="w3-border-0" id="search" placeholder="Search.." style="width:80%;margin-left;margin-right:auto;display:inline;line-height:28px;outline:none">

        </div>

        <div class="" style="display: inline; padding-top: 16px; padding-right: 23px; height: 58px; float: right; ">
            <i class="ti-shopping-cart" style="font-size:30px;margin-left:10px;color:white;"> </i>
        </div>

        <div class="w3-round-xlarge w3-white" style="width:95%;height:62%;margin-left:10px;margin-right:auto;margin-top:10px;">
            <!--PICTURE ADS
                   <img src="dependencies/images/hqdefault.jpg " style="margin-left:auto;margin-right:auto;display:block;padding-bottom:10px"> -->
        </div>



    </div>


    <!-- ITEMS -->
    <div class="w3-row">

        <!-- HOT ITEMS & LEFT AND RIGHT ARROW -->
        <div class="w3-display-container w3-row" style="margin-left:15px;">
            <h2 class="" style="font-size:18px;display:inline-block"><b>Hot Items</b></h2>

            <div class="w3-display-right" style="padding-top:15px;padding-right:15px">
            <i class="ti-arrow-circle-left" style="color:#FFCA28;display:inline-block;margin-right:15px; font-size:25px"></i>
            <i class="ti-arrow-circle-right" style="color:#FFCA28;display:inline-block; font-size:25px"></i>
            </div>

        </div>
    
        <div class="w3-col s4 m4 l4 w3-white" style="height:150px;padding: 10px;">
            <div class="w3-round-xlarge w3-card-2" style="height:100%">
            </div>
        </div>

        <div class="w3-col s4 m4 l4 w3-white" style="height:150px; padding: 10px;">
            <div class="w3-round-xlarge w3-card-2" style="height:100%">
            </div>
        </div>

        <div class="w3-col s4 m4 l4 w3-white" style="height:150px; padding: 10px;">
            <div class="w3-round-xlarge w3-card-2" style="height:100%">
            </div>
        </div>

    </div>

    <!-- MESSAGE ICON -->
    <div class="w3-display-bottomright" style="margin-bottom:80px; margin-right:5px; z-index:100">
        <div class="w3-circle w3-card-4 btn_ripple" onclick="" style="font-size: 30px; background-color: #FFCA28; margin-left: auto; margin-right: 15px; padding: 13px;">
            <i class="ti-comment-alt" style="color:white"></i>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="w3-container">
        <div class="w3-row w3-display-bottommiddle w3-center" style="background-color: #FFCA28; width: 100%; height: 60px; bottom:0px">

            <div class="" style="margin-top:15px;">
                <div class="w3-col s3 m3 l3 btn_ripple">
                    <i class="fa fa-home" onclick="" style="color: white; margin-left: 30px; margin-right: 30px; font-size: 30px;display:inline-block"></i>
                </div>

                <div class="w3-col s3 m3 l3">  
                <i class="fa fa-shopping-bag" onclick="app_page.products();" style="color:white;margin-left:30px; margin-right: 30px;font-size:30px;display:inline-block;"></i>
                </div>

                <div class="w3-col s3 m3 l3">
                <i class="fa fa-cog" onclick="" style="color:white;margin-left:30px; margin-right: 30px;font-size:30px;display:inline-block;"></i>
                </div>

                <div class="w3-col s3 m3 l3">
                <i class="fa fa-book" onclick="" style="color:white;margin-left:30px; margin-right: 30px;font-size:30px;display:inline-block;"></i>
                </div>
            </div>
        </div>
    </div>

</div>