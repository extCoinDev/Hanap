<div id="pages_login" class="page animated slideInRight" style="z-index: 2000; width: 100%; padding-top: 0px;">
    <div class="page_bkg" style="background: rgba(0, 0, 0, 0.8784313725490196); ">
        <div id="pageMenu_login" class="page_menu" style="animation-duration: .5s; background-color: rgba(0, 0, 0, 0); padding-top:35px; padding-left:15px">
            <i class="fa fa-chevron-left" onclick="close_view('pages_login','YES');" style="color:white; font-size:24px"></i>
            <div style="display: inline-block; position:absolute; margin-top:4px; margin-left:5px">
                <h6 onclick="close_view('pages_login');" style="display: inline; color: white; font-size: 17px"></h6>
            </div>

        </div>

        <div id="loginForm" class="login-form" style="background-color: rgba(238, 238, 238, 0);  -webkit-animation-duration:.5s">

            <form onsubmit="return login();">                
                <div style=" margin-bottom: 25px;">
                    <img src="dependencies/images/logo.png" alt="" class="" style="width:128px; display:block; margin-left:auto; margin-right:auto;" />

                    <h6 style="color: #FAFAFA; text-align: center; font-size: 30px; padding-bottom:25px">Wallet Login</h6>
                </div>
                
                <p></p>
                <div class="form-group-main ">
                    <input type="text" class="form-control-main" placeholder="Wallet Address" id="usn">
                    <!--<i class="fa fa-user"></i>-->
                </div>
                <div class="form-group-main log-status">
                    <input type="password" class="form-control-main" placeholder="Password" id="pswd">
                    <!--<i class="fa fa-lock"></i>-->
                </div>               

                <button type="submit" onclick="" class="log-btn">Log in</button>
            </form>

            <hr />
            <p style="text-align:center; color:white">Don't have an account?</p>
            <p></p>
            <button type="button" onclick="showSignup();" class="new-acct-btn">Create Account</button>


        </div>
       
        <div id="signupForm" class="login-form animated fadeIn" style="background-color: rgba(238, 238, 238, 0); display:none; -webkit-animation-duration:.5s; padding-top:10%; height:95vh; overflow:auto">
            <h1 style="color: #FAFAFA; text-align: center; font-family: 'Century Gothic'; font-size: 30px; padding-bottom:25px">Create new account</h1>

            <p></p>
            <div class="form-group-main">
                <input type="text" class="form-control-main" onchange="check_address();" placeholder="Wallet Address" id="signup_usn">
                <!--<i class="fa fa-user"></i>-->
            </div>

            <div class="form-group-main">
                <input type="password" class="form-control-main" placeholder="Password" id="signup_pswd">
                <!--<i class="fa fa-lock"></i>-->
            </div>

            <div class="form-group-main">
                <input type="text" class="form-control-main" placeholder="Sponsor Code" id="signup_sponsor_text">
                <!--<i class="fa fa-sitemap"></i>-->
            </div>

            <hr />
            <button type="button" onclick="trySignup();" class="log-btn">Signup</button>

            <p></p>
            <button type="button" onclick="hideSignup();" class="cancel-signup-btn">Cancel</button>


        </div>

    </div>

</div>