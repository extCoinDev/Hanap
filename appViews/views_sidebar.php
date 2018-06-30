<div id="pages_sidebar" class="sidebar-off animated slideInLeft w3-col m4 l3" style="overflow:hidden; -webkit-animation-duration:.3s; width:280px;">

    <div class="page_menu" style="background-color: white; height: 240px">
        <img src="dependencies/images/logo.svg" class="sidebaLogo" />
        <h5 class="page_menu_title" style="margin-left:auto; position: absolute; margin-right:auto; color:white; text-align:center; width:100%; font-size:20px; font-weight:600"></h5>

        <!--<div class="page_menu_btns" style=" position:absolute ; width:100%; left:0; padding-right:15px;padding-left:15px">
            <i class="fa fa-chevron-left" onclick="closeSidebar();" style="color: white; font-size: 24px; float: left; margin-top: 5px; "></i>
            <i class="fa fa-user" onclick="showProfile();" style="color: white; font-size: 24px; float: right; margin-top: 5px; "></i>

        </div>-->


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

    <div style="padding-left: 25px; padding-right: 20px; width: 100%; height: 100vh; padding-top: 235px; padding-bottom:30px; background-color:white; overflow:auto">

        <!--  <div onclick="closeSidebar(); closeAllViews();" class="sidebar_menu_item w3-ripple" style="margin-top:0px">
              <div class="w3-col s1 sidebar_menu_item_icon">
                  <i class="fa fa-dashboard" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
              </div>

              <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
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

        <!--<div onclick="show_view('pages_myprofile');" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fa fa-user" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block; margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">My Profile</h6>
            </div>
        </div>-->

        <div onclick="show_view('pages_geneology'); " class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fab fa-apple" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">Home</h6>
            </div>
        </div>

        <div onclick="show_view('pages_donation'); " class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fa fa-lock" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>
            <div class="w3-col s9" style="display: inline-block; margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">Accounts</h6>
            </div>
        </div>


        <div onclick="show_view('pages_unicoin_addresses'); " class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fa fa-location-arrow" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>
            <div class="w3-col s9" style="display: inline-block; margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">Products</h6>
            </div>
        </div>

        <div onclick="show_view('pages_cashouts'); " class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-check-circle" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">Orders</h6>
            </div>
        </div>

        <div onclick="show_view('pages_pending_requests'); " class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fa fa-tasks" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">Apps</h6>
            </div>
        </div>

        <div onclick="show_view('pages_support'); " class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fas fa-question" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">Encashment</h6>
            </div>
        </div>
               
        <div onclick="show_view('pages_faqs'); " class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fa fa-info-circle" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">FAQ</h6>
            </div>
        </div>

        <div onclick="logout();" class="sidebar_menu_item w3-ripple">
            <div class="w3-col s1 sidebar_menu_item_icon">
                <i class="fa fa-chevron-left" onclick="" style="color: #414042; font-size: 24px; float: left"></i>
            </div>

            <div class="w3-col s9" style="display: inline-block;  margin-top:4px; margin-left:25px">
                <h6 style="display: inline; color: #414042; font-size: 17px">Logout</h6>
            </div>
        </div>




        <!--<div onclick="show_view('pages_advertise');" class="sidebar_menu_item w3-ripple">
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