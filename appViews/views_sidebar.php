<div id="pages_sidebar" class="sidebar-off animated slideInLeft w3-col m4 l3" style="overflow:hidden; -webkit-animation-duration:.3s; width:50%; border-radius: 0px 15px 15px 0px;">

<div class="page_menu w3-card-4" style="background-color: #FFE066; height:150px; border-radius: 0px 0px 15px 0px;">
    <div class="page_menu w3-display-container" style="background-color: #FFE066; ">
        
    <img src="dependencies/images/logo_wname_r.svg" class="sidebarLogo w3-display-middle" style="width: 80%"/>

        <h5 class="page_menu_title" style="margin-left:auto; position: absolute; margin-right:auto; color: white; text-align:center; width:100%; font-size:20px; font-weight:600"></h5>

        <div class="page_menu_btns" style=" position:absolute; width:100%; left:0; padding-right:10px; padding-left:10px">
        

        </div>
    </div>
</div>


    <!--<div id="profile_block" onclick="showProfile();" style="width: 100%; height: 300px; background-color: #414042; padding-top: 80px; transition: .5s">

        <div class="w3-center">
            <img src="dependencies/images/avatar2.png" id="prof_photo" class="w3-circle w3-border w3-border-white" style="height: 128px; width: 128px; border-width:5px!important; transition:.5s" alt="">

            <h3 id="full_name" style="color: white; transition: .5s"><b>Full Name</b></h3>
            <p id="userId" style="color: rgba(255, 255, 255, 0.57); margin-top: -10px;">@username</p>

            <p id="" style="color: rgba(255, 255, 255, 0.57); margin-top: 40px;">Some info here</p>
            <p id="" style="color: rgba(255, 255, 255, 0.57); margin-top: 20px;">Some info here</p>
            <p id="" style="color: rgba(255, 255, 255, 0.57); margin-top: 20px;">Some info here</p>
        </div>

    </div>-->

    <div style="padding-left: 20px; padding-right: 20px; width: 100%; height: 100vh; padding-top: 170px; padding-bottom:30px; background-color:white; overflow:auto">

        <!--div onclick="closeSidebar(); closeAllViews();" class="sidebar_menu_item w3-ripple" style="margin-top:0px">
              <div class="w3-col s1 sidebar_menu_item_icon">
                  <i class="fa fa-dashboard" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
              </div>-->

              <!--<div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
                  <h6 style="display: inline; color: #414042; font-size: 17px"><b>Dashboard</b></h6>
              </div>
          </div>

          <div onclick="show_view('pages_newsfeed'); asycn_posts = 'TRUE'; getPosts();" class="sidebar_menu_item w3-ripple" style="margin-top:0px">
              <div class="w3-col s1 sidebar_menu_item_icon">
                  <i class="fa fa-rss" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
              </div>

              <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
                  <h6 style="display: inline; color: #414042; font-size: 17px"><b>Support</b></h6>
              </div>
          </div>-->

        <div onclick="show_view('pages_myprofile'); closeSidebar();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-user" onclick="" style="color: orange; font-size: 18px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block; margin-top:4px; margin-left:15px">
                <h6 style="display: inline; color: black; font-size: 15px">My Profile</h6>
            </div>
        </div>

        <div onclick="show_view(''); closeSidebar();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-star" onclick="" style="color: orange; font-size: 18px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:15px">
                <h6 style="display: inline; color: black; font-size: 15px">Reviews / Wishlist</h6>
            </div>
        </div>

        <div onclick="show_view(''); closeSidebar();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-dollar-sign" onclick="" style="color: orange; font-size: 18px; float: left"></i>
            </div>
            <div class="w3-col s9" style="display: inline-block; margin-top:4px; margin-left:15px">
                <h6 style="display: inline; color: black; font-size: 15px">My Refunds</h6>
            </div>
        </div>


        <div onclick="show_view(''); closeSidebar();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-map" onclick="" style="color: orange; font-size: 18px; float: left"></i>
            </div>
            <div class="w3-col s9" style="display: inline-block; margin-top:4px; margin-left:15px">
                <h6 style="display: inline; color: black; font-size: 15px">My Locations</h6>
            </div>
        </div>

        <div onclick="show_view(''); closeSidebar();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-ban" onclick="" style="color: orange; font-size: 18px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:15px">
                <h6 style="display: inline; color: black; font-size: 15px">My Cancellations</h6>
            </div>
        </div>

        <div onclick="show_view(''); closeSidebar();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-info" onclick="" style="color: orange; font-size: 18px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:15px">
                <h6 style="display: inline; color: black; font-size: 15px">FAQ</h6>
            </div>
        </div>

        <div onclick="show_view('mypro'); closeSidebar();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-file-alt" onclick="" style="color: orange; font-size: 18px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:15px">
                <h6 style="display: inline; color: black; font-size: 15px">Terms and Conditions</h6>
            </div>
        </div>
               
        <div onclick="logout();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-power-off" onclick="" style="color: orange; font-size: 18px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:15px">
                <h6 style="display: inline; color: black; font-size: 15px">Log Out</h6>
            </div>
        </div>






        <!--div onclick="show_view('pages_advertise');" class="sidebar_menu_item w3-ripple">
            <i class="fa fa-ravelry" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            <div style="display: inline-block;  margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px"><b>Advertise</b></h6>
            </div>
        </div>

        <div onclick="show_view('pages_services');" class="sidebar_menu_item w3-ripple">
            <i class="fa fa-magic" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            <div style="display: inline-block;  margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px"><b>Services</b></h6>
            </div>
        </div>-->

    </div>
</div>
</div>