<?php include 'include/header.php';?>

<body>
<div class="body-back">
  <div class="masthead pdng-stn1">
                                    <?php include 'menuside.php';?>
    <div class="phone-box wrap push" id="home">
      <div class="menu-notify">
        <div class="profile-left"> <a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a> </div>
        <div class="Profile-mid">
          <h5 class="pro-link"><a href="index.php">BetterGrade</a></h5>
        </div>
        <div class="Profile-right"> <a href="#small-dialog" class="sign-in popup-top-anim"> <i class="fa fa-user"></i></a>
          <!-- modal -->
          <div id="small-dialog" class="mfp-hide">
            <div class="login-modal">
              <div class="login-form">
                <form action="#" method="post">
                  <p>User Name </p>
                  <input type="text" name="Name" required=""/>
                  <p>User Password</p>
                  <input type="password" name="Password" required=""/>
                  <div class="wthree-text">
                    <ul>
                      <li>
                        <input type="checkbox" id="brand" value="">
                        <label for="brand"><span></span> Remember me ?</label>
                      </li>
                      <li> <a href="#">Forgot password?</a> </li>
                    </ul>
                    <div class="clear"> </div>
                  </div>
                  <input type="submit" value="Sign In">
                </form>
                <p>Don’t have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
              </div>
            </div>
          </div>
          <!-- //modal -->
          <!-- modal-two -->
          <div id="small-dialog1" class="mfp-hide">
            <div class="login-modal">
              <div class="booking-info">
                <h3><a href="main.php">B<span>e</span>t<span>t</span>e<span>r</span> <span>G</span>r<span>a</span><span>d</span>e</a></h3>
              </div>
              <div class="login-form signup-form">
                <form action="#" method="post">
                  <p>User Name </p>
                  <input type="text" name="Name"  required=""/>
                  <p>User Email </p>
                  <input type="text" name="Email"  required=""/>
                  <p>User Password</p>
                  <input type="password" name="Password" placeholder="" required=""/>
                  <div class="wthree-text">
                    <input type="checkbox" id="brand1" value="">
                    <label for="brand1"><span></span>I accept the terms of use</label>
                  </div>
                  <input type="submit" value="Sign Up">
                </form>
              </div>
            </div>
          </div>
          <!-- //modal-two -->
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- banner -->
      
    <div class="w3agile banner-bottom">
    <h1 >Grammer Checker</h1> <br />
        <div class="card" >
                <div class="card-header bg-dark text-white">
                    Check for Grammer
                </div>
                <div class="card-body">
                    <textarea class="form-control" rows="5" aria-label="With textarea"></textarea>
                </div><br />
        </div>
        <br />
        <button type="button" class="btn btn-dark btn-lg">Click here to check Grammer</button>
        <br /><br />
        <div class="card" >
        <div class="card-header bg-dark text-white">
                    Correct Grammer
                </div>
                <div class="card-body">
                    <textarea type="text" rows="5" class="form-control" aria-label="ans" aria-describedby="inputGroup-sizing-default"></textarea>
                </div>
        </div>

        
    </div>

        
        
      </div>
      <!-- //banner -->





      <!--//welcome-->
      <div class="w3agile agileinfo_copy_right">
          <div class="agileinfo_copy_right_left">
            <p>© 2019 Better Grade. All rights reserved | Design by Diluna Chathuranga </p>
          </div>
          <div class="agileinfo_copy_right_right">
            <ul class="social">
              <li><a class="social-linkedin" href="#"> <i></i>
                <div class="tooltip"><span>Facebook</span></div>
                </a></li>
              <li><a class="social-twitter" href="#"> <i></i>
                <div class="tooltip"><span>Twitter</span></div>
                </a></li>
              <li><a class="social-google" href="#"> <i></i>
                <div class="tooltip"><span>Google+</span></div>
                </a></li>
              <li><a class="social-facebook" href="#"> <i></i>
                <div class="tooltip"><span>Pinterest</span></div>
                </a></li>
              <li><a class="social-instagram" href="#"> <i></i>
                <div class="tooltip"><span>Instagram</span></div>
                </a></li>
            </ul>
          </div>
          <div class="clearfix"> </div>
        </div>
        <!--/footer-->
      </div>
    </div>
  </div>
</div>
</body>
</html>