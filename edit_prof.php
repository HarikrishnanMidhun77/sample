<!doctype html>
<html lang="en">
    <?php
     include 'config.php';
     $con = mysqli_connect($host, $user, $password,$dbname);
      session_start(); 
      if(!$_SESSION['login_user']){ 
       header("Location:login.php"); 
         exit; }
        if(isset($_GET['fail'])){
echo'
<script>alert("Wrong Password");</script>';
        }
        if(isset($_GET['suc'])){
          echo'
          <script>alert("Profile Updated Successfully");</script>';
                  }

        // $wid=$_SESSION['wid'];
         $sql="SELECT * FROM `invyt_login` WHERE c_email= '".$_SESSION['login_user']."'";
         $det = mysqli_query($con,$sql);
        // $_SESSION['login_user']= $user_email;
         while($row = mysqli_fetch_array($det)) {
            $ema=$row["c_email"];
            $ph=$row["c_phno"];
            $cpswd=$row["c_password"];
         }
    ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="dashcss/neat.min.css?v=1.0">
  </head>
  <body>
  <script>
        function passok() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }
    else {
     //   alert("Passwords Match!!!");
    }
    return ok;
}
    </script>
    <div class="o-page">
      <header class="c-navbar u-mb-large">
        <a class="c-navbar__brand" href="#">
          <img src="https://image.ibb.co/mFQ8aU/logo.png">
          </a>

        <div class="c-dropdown dropdown u-mr-small u-ml-auto">
          
          
        </div>

        <div class="c-dropdown dropdown u-mr-medium">
          <a href="notifications.php">
          <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" role="button">
            <i class="c-notification__icon feather icon-bell"></i>
          </div>
          </a>
        </div>

        <div class="c-dropdown dropdown">
          <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
            <img class="c-avatar__img" src="https://localmarketingplus.ca/wp-content/uploads/2015/02/blue-head.jpg" alt="Adam Sandler">
          </div>

          <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
            <a class="c-dropdown__item dropdown-item" href="dash.php">My Invyts</a>
           <!-- <a class="c-dropdown__item dropdown-item" href="edit_prof.php">Edit Profile</a>-->
            <a class="c-dropdown__item dropdown-item" href="logout.php">Log out</a>
          </div>
        </div>


      </header>

      <div class="container">
          <div class="row">
            <div class="col-12">
              <nav class="c-tabs"> 
                <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                  <a class="c-tabs__link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                    <span class="c-tabs__link-icon">
                      <i class="feather icon-sliders"></i>
                    </span>Edit Profile
                  </a>
                </div>
                <form method="POST" onsubmit="return passok()" action="edit_prof_up.php">
                <div class="c-tabs__content tab-content" id="nav-tabContent">
                  <div class="c-tabs__pane active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                    <div class="row">
                      <div class="col-xl-6">
                        <!--<div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-name">Name</label>
                          <input class="c-input" type="text" value="<?php //echo $wid; ?>" id="user-name">
                        </div>-->
                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-password">Old Password</label>
                          <input class="c-input" type="password" name="opswd"  required>
                        </div>

                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-email">Email Address</label>
                          <input class="c-input" type="text" name="pemail" value="<?php echo $ema; ?>" id="user-email" readonly required>
                        </div>
                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-password">New Password</label>
                          <input class="c-input" type="password" name="npswd" id="pass1">
                        </div>
                          
                      </div>

                      <div class="col-xl-6">
                          
                          <div class="c-field u-mb-medium" style="height: 63px;">
                          
                        </div>

                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-phone">10 digit phone number</label>
                          <input class="c-input" type="tel" name="pphno" pattern="[789][0-9]{9}" value="<?php echo $ph; ?>" id="user-phone" required>
                        </div>
                          
                        
                          
                          <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-password">Confirm New Password</label>
                          <input class="c-input" type="password" name="cnpswd" id="pass2">
                        </div>
                          
                      </div>
                    </div>
                    </form>
                    <span class="c-divider u-mv-medium"></span>

                    <div class="row">
                      <div class="col-12 col-sm-7 col-xl-2 u-mr-auto u-mb-xsmall">
                        <button class="c-btn c-btn--info c-btn--fullwidth">Save Changes</button>
                      </div>

                      <div class="col-12 col-sm-5 col-xl-3 u-text-right">
                      <button class="c-btn c-btn--danger c-btn--fullwidth c-btn--outline" data-toggle="modal" data-target="#modal-delete">Delete My Account</button>

                        <div class="c-modal c-modal--small modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete">
                          <div class="c-modal__dialog modal-dialog" role="document">
                              <div class="c-modal__content">
                                  <div class="c-modal__body">
                                    <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                                        <i class="feather icon-x"></i>
                                    </span>

                                    <span class="c-icon c-icon--danger c-icon--large u-mb-small">
                                      <i class="feather icon-alert-triangle"></i>
                                    </span>
                                    <h3 class="u-mb-small">Do you want to delete your account?</h3>
                                    
                                    <p class="u-mb-medium">By deleting you account, you no longer have access to your dashboard, members and your information.</p>
                                    
                                    <form method="POST" action="del_acc.php">
                                    <div class="c-field">
                                    <input class="c-input u-mb-small" name="opswd" type="password" placeholder="Enter your password to continue">
                                    </div>
                                    <div class="u-text-center">
                                      <a href="#" class="c-btn c-btn--danger c-btn--outline u-mr-small" data-dismiss="modal" aria-label="Close">Cancel</a>
                                      <button type="submit" class="c-btn c-btn--danger">Delete</button>
                                    </div>
                                    </form>
                                  </div>
                              </div><!-- // .c-modal__content -->
                          </div><!-- // .c-modal__dialog -->
                        </div><!-- // .c-modal -->
                      </div>
                    </div>
                  </div>
                    
                </div>
              </nav>
            </div>
          </div>
        </div>
    </div>
    
    <!-- Main JavaScript -->
    <script src="dashjs/neat.min.js?v=1.0"></script>
  </body>
</html>